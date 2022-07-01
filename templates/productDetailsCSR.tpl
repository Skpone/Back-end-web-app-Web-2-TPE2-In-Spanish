{include file="header.tpl"}
    <div>
        <h1>{$product->product} info</h1>
        <ul>
            <li>Tipo: {$product->type}</li>
            <li>País de orígen: {$product->country}</li>
            <li>Ingredientes: {$product->ingredients}</li>
            <li>Precio: {$product->price}</li>
        </ul>
    </div>
    <div>
        <h2>Opiniones:</h2>
        {include file="vue/productCommentsListVue.tpl"}
    </div>
{include file="footer.tpl"}