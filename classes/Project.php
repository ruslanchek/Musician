<?php
/*
 * Этот класс используется для расширения функционала ядра системы (/classes/Core.php)
 * */

Class Project extends Utilities
{
    public function __construct()
    {
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
}