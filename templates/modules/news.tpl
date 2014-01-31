<div class="cl-pane-content">
    <div class="left-block social-block">
        {include file="include/common/twitter.tpl"}
    </div>

    <div class="right-block">
        <div class="social-list" style="display: block;">
            <div id="news-content"></div>
            <div class="clear"></div>
            <div id="news-pager" class="pages-nav"></div>
        </div>
    </div>
</div>


{literal}
    <script id="news-list-items" type="text/x-handlebars-template">
        {{#each items}}
        <div class="social-block-item" data-id="{{this.id}}">
            <h6>{{this.name}}</h6>

            <p>
                {{{this.text_short}}}
                <span class="date">{{{this.date}}}</span>
            </p>
        </div>
        {{/each}}
    </script>

    <script id="news-opened-item" type="text/x-handlebars-template">
        <div class="social-item-open">
            <a class="close" href="#"></a>

            <h1>{{header}}</h1>
            {{{content}}}
        </div>
    </script>
{/literal}