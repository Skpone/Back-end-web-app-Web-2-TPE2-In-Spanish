{literal}
    <div id='app'>
        <h1>{{ title }} </h1>
        <h4>{{ description }}</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Producto</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">País</th>
                        <th scope="col">Ingredientes</th>
                        <th scope="col">Precio</th>
{/literal}
                        {if isset($smarty.session.USER_ADMIN)&&($smarty.session.USER_ADMIN)}
                            {literal}
                                <th scope="col">Editar datos</th>
                                <th scope="col">Eliminar Producto</th>
                            {/literal}
                        {/if}
{literal}
                    </tr>
                </thead>
                <tbody>
                        <tr v-for="product in products">
                            <td class="text-capitalize"><a class="link-secondary" :href="`productDetails/${product.id}`">{{product.product}}</a></td>
                            <td class="text-capitalize">{{product.type}}</td>
                            <td class="text-capitalize">{{product.country}}</td>
                            <td class="text-capitalize">{{product.ingredients | truncate(8)}}</td>
                            <td class="text-capitalize">{{product.price}}</td>
{/literal}
                            {if isset($smarty.session.USER_ADMIN)&&($smarty.session.USER_ADMIN)}
                                {literal}
                                    <td><button class="btn btn-secondary" v-on:click='modifyProduct' :data-id='product.id'>Editar</button></td>
                                    <td><button class="btn btn-danger" v-on:click='deleteProduct' :data-id='product.id'>Borrar</button></td>
                                {/literal}
                            {/if}
{literal}
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
{/literal}