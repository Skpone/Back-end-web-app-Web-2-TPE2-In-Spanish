{include file="header.tpl"}
    {if $product}
        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                        <h1 class="text-capitalize">{$product->product}</h1>
                    </button>
                </div>
                <div id="collapseOne" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <ul class="list-group">
                            <li class="list-group-item text-capitalize" id="product-id" data-id="{$product->id}">ID: {$product->id}</li>
                            <li class="list-group-item text-capitalize">Tipo: {$product->type}</li>
                            <li class="list-group-item text-capitalize">País de orígen: {$product->country}</li>
                            <li class="list-group-item text-capitalize">Ingredientes: {$product->ingredients}</li>
                            <li class="list-group-item text-capitalize">Precio: {$product->price}</li>
                        </ul>
                    </div>
                </div>
        </div>
    {else}
        <h1 class="text-danger">el producto no existe</h1>
    {/if}
    <div class="container">
        {include file="scoreFilterForm.tpl"}
        {include file="ordByScoreForm.tpl"}
        <button class="btn btn-secondary mb-2" id="resetCommentsBtn">Resetear</button>
    </div>
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