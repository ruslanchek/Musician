{$instruments = $core->getInstruments()}

<div class="cl-pane-content">
    {foreach from=$instruments name=instrument_menu item=instrument key=i}
    {$image = $core->getItemSingleImage('section_37', $instrument.id, 'col_252')}
    <div class="{if $smarty.foreach.instrument_menu.first}active{/if} instrument-item instrument{$i+1}" data-id="{$instrument.id}">
        <div class="instrument-wrapper">
            <img src="{$image.path}{$image.name}.{$image.extension}"/>
        </div>
    </div>
    {/foreach}

    {foreach from=$instruments name=instrument_item item=instrument key=i}
    <div class="instruments {if $smarty.foreach.instrument_item.first}active{/if}" data-id="{$instrument.id}">

        {$gallery = $core->getItemImageGallery('section_37', $instrument.id, 'col_254')}
        {foreach from=$gallery name=instrument_gallery item=ig}
        <img data-instrument_id="{$instrument.id}" data-image_id="{$ig.id}" class="{if $smarty.foreach.instrument_gallery.first}active{/if} instrument-big-image" src="{$ig.path}{$ig.name}.{$ig.extension}"/>
        {/foreach}

        <div class="video-view-descr">
            <h6>{$instrument.name}</h6>
            <p>{$instrument.desc}</p>

            <div class="instruments-preview" data-instrument_id="{$instrument.id}">
                {foreach from=$gallery name=instrument_gallery_preview item=ig}
                <div data-instrument_id="{$instrument.id}" data-image_id="{$ig.id}" class="{if $smarty.foreach.instrument_gallery_preview.first}active{/if} instruments-preview-item">
                    <img src="{$ig.path}{$ig.name}_mini.{$ig.extension}"/>
                </div>
                {/foreach}
            </div>
        </div>

        <div class="full-descr" data-instrument_id="{$instrument.id}">
            <div class="full-descr-content">
                <a class="close" href="#"></a>
                <h6>{$instrument.name}</h6>

                {$instrument.text}
            </div>
        </div>
    </div>
    {/foreach}
</div>