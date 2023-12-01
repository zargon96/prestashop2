<div id="mycustomtab">
    {if isset($bannerText) && isset($bannerColor)}
        <div class="alert alert-{if $bannerColor == 'green'}success{elseif $bannerColor == 'red'}danger{/if}">
            <strong>{$bannerText}</strong>
        </div>
    {/if}
</div>


