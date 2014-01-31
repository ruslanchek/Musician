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
        <div class="item"><a href="#"><img src="{{this.path}}{{this.name}}_pic.{{this.extension}}"/></a></div>
        {{/each}}
    </script>
{/literal}