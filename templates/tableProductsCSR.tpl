{include file="header.tpl"}
    {if isset($smarty.session.USER_ADMIN)&&($smarty.session.USER_ADMIN)}
        <div class="container">
            {include file="addProductForm.tpl"}
        </div>
    {/if}
    <div class="container">
        {include file="productFilterForm.tpl"}
        {include file="countryFilterForm.tpl"}
        {include file="advancedFilterForm.tpl"}
    </div>
    <div class="container">
        {include file="vue/tableProductsVue.tpl"}
    </div>
    {if isset($smarty.session.USER_ADMIN)&&($smarty.session.USER_ADMIN)}        
        <script type="text/javascript" src="js/appAdmin.js"></script>
    {else}
        <script type="text/javascript" src="js/app.js"></script>
    {/if}
{include file="footer.tpl"}