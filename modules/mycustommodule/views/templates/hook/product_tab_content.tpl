<div id="mycustomtab">
    <h3>Custom Tab Content</h3>
    <p>This is the content of my custom tab.</p>

    {if isset($bannerText) && isset($bannerColor)}
        {assign var="style" value="background-color: {$bannerColor};"}
        <div class="quantity-banner" style="{$style}">     
            {$bannerText}
        </div>
    {/if}
</div>


