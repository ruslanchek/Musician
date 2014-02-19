<?php
/*
 * Этот класс используется для расширения функционала ядра системы (/classes/Core.php)
 * */

require_once($_SERVER['DOCUMENT_ROOT'] . '/twitter/TwitterAPIExchange.php');

Class Project extends Utilities
{
    public function __construct()
    {
        $this->settings = array(
            'oauth_access_token' => "42608033-iT1O0zOhMYPitjA2kXdG1ynvS2kF76zEkhDw3eQN1",
            'oauth_access_token_secret' => "6KYlvsz2se5VznKP3TKBK54KL62GxzE6u20q46hzXE1jB",
            'consumer_key' => "yYrQADuHH3LRhnd64k9pNg",
            'consumer_secret' => "Ul9yihShoOnupvTwad2l5BCjWMTZ8DmfNaZYjNmQ",
            'username' => 'ruslanchek'
        );

        $this->operateAJAX();
    }

    private function operateAJAX()
    {
        if ($this->answer_type == 'ajax') {
            switch ($_GET['action']) {
                case 'getNews' : {
                    header('Content-type: application/json');
                    print json_encode( $this->getNews($_GET['page']) );
                } break;

                case 'getNewsItem' : {
                    header('Content-type: application/json');
                    print json_encode( $this->getNewsItem($_GET['id']) );
                } break;

                case 'getMedia' : {
                    header('Content-type: application/json');
                    print json_encode( $this->getMedia($_GET['page']) );
                } break;

                case 'getTracks' : {
                    header('Content-type: application/json');
                    print json_encode( $this->getTracks($_GET['album'], $_GET['page']) );
                } break;

                case 'setTrackRate' : {
                    header('Content-type: application/json');
                    print json_encode( $this->setTrackRate($_GET['id'], $_GET['act']) );
                } break;

                case 'getTweets' : {
                    header('Content-type: application/json');
                    print $this->getTweets();
                } break;
            };

            exit;
        }
    }

    private function getMedia($page = 1)
    {
        return $this->getSectionContent(
            'section_33 d',
            array('d.id', 'd.name', 'i.path', 'i.name', 'i.extension'),
            'd.publish = 1',
            array('d.sort', 'ASC'),
            8,
            $page,
            "LEFT JOIN images i ON (i.relative_table = 'section_33' && i.relative_id = d.id && i.form_item = 'col_221' && i.type = 0)"
        );
    }

    private function getNews($page = 1)
    {
        return $this->getSectionContent(
            'section_32',
            array('id', 'name', array('col_215', 'date'), array('col_216', 'text_short')),
            'publish = 1',
            array('col_215', 'ASC'),
            6,
            $page,
            false
        );
    }

    private function getNewsItem($id)
    {
        $query = "
            SELECT
                `id`,
                `name`,
                `col_215` AS `date`,
                `col_217` AS `text`
            FROM
                `section_32`
            WHERE
                `id` = ".intval($id)."
        ";

        return $this->db->assocItem($query);
    }

    public function getLastNewsItems($limit = 1)
    {
        $query = "
            SELECT
                `id`,
                `name`,
                `col_215` AS `date`,
                `col_217` AS `text_short`
            FROM
                `section_32`
            WHERE
                `publish` = 1
            LIMIT " . intval($limit);

        return $this->db->assocItem($query);
    }

    private function getTracks($album_id, $page){
        return $this->getSectionContent(
            'section_34 d',
            array(
                'd.id',
                'd.name',
                array('f.path', 'f_path'),
                array('f.name', 'f_name'),
                array('f.extension', 'f_extension'),
                array('d.col_226', 'rate'),
                array('d.col_228', 'last'),
                array('d.col_236', 'duration'),
                array('a.name', 'album_name'),
                array('d.col_234', 'album')
            ),
            'd.publish = 1 && d.col_234 = ' . intval($album_id),
            array('d.sort', 'ASC'),
            5,
            $page,
            "
                LEFT JOIN files f ON (f.relative_table = 'section_34' && f.relative_id = d.id && f.form_item = 'col_225' && f.type = 0)
                LEFT JOIN section_35 a ON (a.id = d.col_234)
            "
        );
    }

    public function getAlbums(){
        $query = "
            SELECT
                `id`,
                `name`
            FROM
                `section_35`
            WHERE
                `publish` = 1
            ORDER BY
                `sort`
            ASC
        ";

        return $this->db->assocMulti($query);
    }

    private function checkTrackRated($id){
        $query = "
            SELECT count(id) AS `count`
            FROM tracks_rated
            WHERE track_id = " . intval($id) . " && `ip` = '" . $this->db->quote($_SERVER['REMOTE_ADDR']) ."'";

        $result = $this->db->assocItem($query);

        if($result['count'] <= 0){
            return true;
        }else{
            return false;
        }
    }

    private function setTrackRate($id, $action){
        if(!$this->checkTrackRated($id)){
            return (object) array('status' => false, 'message' => 'Вы уже оценили этот трек');
        }

        if($action == 'up'){
            $act = ' + 1';
            $last = '+';
        }else{
            $act = ' - 1';
            $last = '–';
        }

        $query = "
            UPDATE
                section_34
            SET
                col_226 = col_226 " . $this->db->quote($act) . ",
                col_228 = '" . $this->db->quote($last) . "'
            WHERE
                id = " . intval($id);

        $this->db->query($query);

        $query = "
            INSERT
                tracks_rated
            SET
                track_id = " . intval($id). ", ip = '" . $this->db->quote($_SERVER['REMOTE_ADDR']) . "'
        ";

        $this->db->query($query);

        return (object) array('status' => true, 'message' => 'Спасибо!');
    }

    public function getVideos(){
        $query = "
            SELECT
                d.`id`,
                d.`name`,
                d.`col_241` AS `description`,
                d.`col_242` AS `duration`,

                f1.path AS mp4_path,
                f1.name AS mp4_name,
                f1.extension AS mp4_extension,

                f2.path AS webm_path,
                f2.name AS webm_name,
                f2.extension AS webm_extension
            FROM
                `section_36` d
            LEFT JOIN
                files f1 ON (f1.relative_table = 'section_36' && f1.relative_id = d.id && f1.form_item = 'col_246' && f1.type = 0)
            LEFT JOIN
                files f2 ON (f2.relative_table = 'section_36' && f2.relative_id = d.id && f2.form_item = 'col_247' && f2.type = 0)
            WHERE
                d.`publish` = 1
            ORDER BY
                d.`sort`
            ASC
        ";

        return $this->db->assocMulti($query);
    }

    public function getInstruments(){
        $query = "
            SELECT
                `id`,
                `sort`,
                `publish`,
                `name`,
                `col_251` AS `desc`,
                `col_256` AS `text`
            FROM
                `section_37`
            WHERE
                `publish` = 1
            ORDER BY
                `sort`
            ASC
        ";

        return $this->db->assocMulti($query);
    }

    public function getTweets(){
        $twitter = new TwitterAPIExchange($this->settings);

        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
        $getfield = '?count=2&screen_name=' . $this->settings['username'];
        $requestMethod = 'GET';

        return $twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest();
    }
}