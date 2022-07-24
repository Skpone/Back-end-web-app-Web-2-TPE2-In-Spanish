{include file="header.tpl"}
    {if $product}
        <div>
            <h1>{$product->product} info</h1>
            <ul>
                <li id="product-id" data-id="{$product->id}">ID: {$product->id}</li>
                <li>Tipo: {$product->type}</li>
                <li>País de orígen: {$product->country}</li>
                <li>Ingredientes: {$product->ingredients}</li>
                <li>Precio: {$product->price}</li>
            </ul>
        </div>
    {else}
        <h1>el producto no existe</h1>
    {/if}
    {include file="scoreFilterForm.tpl"}
    {include file="ordByScoreForm.tpl"}
    <button id="resetCommentsBtn">Resetear</button>
    {include file="vue/productCommentsListVue.tpl"}
    {if isset($smarty.session.USER_ID)}
        {include file="addCommentForm.tpl"}
    {/if}

    {if isset($smarty.session.USER_ID)}
        <script type="text/javascript" src="js/loggedComments.js"></script>
    {else}
        <script type="text/javascript" src="js/comments.js"></script>
    {/if}

{include file="footer.tpl"}