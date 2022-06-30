{include file="header.tpl"}
{if isset($smarty.session.USER_ADMIN)&&($smarty.session.USER_ADMIN)}
    {include file="tableForm.tpl"}
{/if}
{include file="productFilterForm.tpl"}
{include file="countryFilterForm.tpl"}
{include file="advancedFilterForm.tpl"}
    <table>
        <h3>{$title} <a href="table">>🏠<</a></h3>
        <h4 id="modifyError"></h4>
        <thead>
            <th>producto</th>
            <th>país</th>
            <th>precio</th>
        </thead>
        <tbody>
            {foreach from=$products item=$product}
                <tr>
                    <td>{$product->product}</td>
                    <td>{$product->country}</td>
                    <td>{$product->price}</td>
                    {if isset($smarty.session.USER_ADMIN)&&($smarty.session.USER_ADMIN)}
                        <td><button class="modifyBtns" id="{$product->id}">Editar</button></td>
                        <td><a href="deleteProduct/{$product->id}">Borrar</a></td>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
    <script type="text/javascript" src="js/app.js"></script>
{include file="footer.tpl"}