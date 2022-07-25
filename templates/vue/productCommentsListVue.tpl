{* aca solamentre mostramos la lista de comentarios, no va ni el filtro ni el form para agregar *}
    <div id="overflow">
{literal}
        <div id="app">
            <h1>{{ title }}</h1>
            <ul v-for="comment in comments">
                <li>{{comment.email}}</li>
                <li>{{comment.comment}}</li>
                <li>{{comment.score}} estrellas</li>
{/literal}
                {if isset($smarty.session.USER_ADMIN)&&($smarty.session.USER_ADMIN)}
                    {literal}
                        <li><button class="btn btn-danger" v-on:click='deleteComment' :data-id='comment.id'>Borrar</button></li>
                    {/literal}
                {/if}
{literal}
            </ul>
        </div>
{/literal}
    </div>