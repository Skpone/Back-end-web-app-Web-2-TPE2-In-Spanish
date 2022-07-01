{literal}
    <div id='app'>
        <h1>{{ title }} </h1>
        <p>{{ description }}</p>

        <table>
            <thead>
                <th>producto</th>
                <th>tipo</th>
                <th>país</th>
                <th>ingredientes</th>
                <th>precio</th>
            </thead>
            <tbody>
                    <tr v-for="product in products">
                        <td><a :href="`productDetails/${product.id}`">{{product.product}}</a></td>
                        <td>{{product.type}}</td>
                        <td>{{product.country}}</td>
                        <td>{{product.ingredients}}</td>
                        <td>{{product.price}}</td>
{/literal}
                        {if isset($smarty.session.USER_ADMIN)&&($smarty.session.USER_ADMIN)}
                            {literal}
                                <td><button v-on:click='modifyProduct' :data-id='product.id'>Editar</button></td>
                                <td><button v-on:click='deleteProduct' :data-id='product.id'>Borrar</button></td>
                            {/literal}
                        {/if}
{literal}
                    </tr>
            </tbody>
        </table>
    </div>
{/literal}