    <h3 class="text-primary">Comentarios...</h3>
    <div class="mb-3" id="overflow">
{literal}
        <div id="app">
            <ul class="list-group mb-3" v-for="comment in comments">
                <li class="list-group-item">{{comment.email}}</li>
                <li class="list-group-item">{{comment.comment}}</li>
                <li class="list-group-item">{{comment.score}} estrellas</li>
{/literal}
                {if isset($smarty.session.USER_ADMIN)&&($smarty.session.USER_ADMIN)}
                    {literal}
                        <li class="mt-2"><button class="btn btn-danger" v-on:click='deleteComment' :data-id='comment.id'>Borrar</button></li>
                    {/literal}
                {/if}
{literal}
            </ul>
        </div>
{/literal}
    </div>