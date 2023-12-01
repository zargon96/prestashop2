<div id="mycustomtab">
    {if isset($bannerText) && isset($bannerColor)}
        {assign var="style" value="background-color: {$bannerColor};"}
        <div class="alert alert-{if $bannerColor == 'green'}success{elseif $bannerColor == 'red'}danger{/if}">
            <strong>{$bannerText}</strong>
        </div>
    {/if}
</div>


