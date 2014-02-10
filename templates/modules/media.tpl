<div class="cl-pane-content">
    <div id="media-content">
        <div id="photo" class="js-masonry">

        </div>
    </div>
    <div class="clear"></div>
    <div id="media-pager" class="pages-nav"></div>
</div>

{literal}
    <script id="media-list-items" type="text/x-handlebars-template">
        {{#each items}}
        <div class="item"><a href="{{this.path}}{{this.name}}.{{this.extension}}"><img src="{{this.path}}{{this.name}}_pic.{{this.extension}}"/></a></div>
        {{/each}}
    </script>

    <script id="media-list-item" type="text/x-handlebars-template">
        <div class="social-item-open social-item-open-gallery">
            <a class="close" href="#"></a>
            <img src="{{src}}">
        </div>
    </script>
{/literal}
