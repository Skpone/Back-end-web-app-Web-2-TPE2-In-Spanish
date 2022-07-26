    <h3 class="text-primary">Comentarios...</h3>
    <div class="mb-3" id="overflow">
{literal}
        <div id="app">
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