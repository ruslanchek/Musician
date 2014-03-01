<!DOCTYPE html>
<html>
    <head>
        {include file="include/common/head.tpl"}
    </head>

    <body>
        <div id="objectc" style="width: 100px; height: 100px; background: red; position: absolute; z-index: 1000000"></div>

        {include file="include/common/header.tpl"}

        <div class="viewport" id="ewp-viewport">
            <div class="content-layer">
                <div id="about" class="cl-pane" data-pane="about">
                    {include file="modules/about.tpl"}
                </div>

                <div class="cl-pane" data-pane="news">
                    {include file="modules/news.tpl"}
                </div>

                <div class="cl-pane" data-pane="music">
                    {include file="modules/music.tpl"}
                </div>

                <div id="media" class="cl-pane" data-pane="media">
                    {include file="modules/media.tpl"}
                </div>

                <div class="cl-pane instrument-block" data-pane="instruments">
                    {include file="modules/instruments.tpl"}
                </div>

                <div class="cl-pane" data-pane="contacts">
                    {include file="modules/contacts.tpl"}
                </div>
            </div>

            <div class="bg-layer">
                <div></div>
            </div>
        </div>

        {include file="include/common/footer.tpl"}
    </body>
</html>