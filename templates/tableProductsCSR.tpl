{include file="header.tpl"}
    {if isset($smarty.session.USER_ADMIN)&&($smarty.session.USER_ADMIN)}
        {include file="tableForm.tpl"}
    {/if}
    {include file="productFilterForm.tpl"}
    {include file="countryFilterForm.tpl"}
    {include file="advancedFilterForm.tpl"}
    {include file="vue/tableProductsVue.tpl"}
    {if isset($smarty.session.USER_ADMIN)&&($smarty.session.USER_ADMIN)}        
        <script type="text/javascript" src="js/appAdmin.js"></script>
    {else}
        <script type="text/javascript" src="js/app.js"></script>
    {/if}
{include file="footer.tpl"}