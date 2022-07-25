{include file="header.tpl"}
    <h3>{$title}</h3>
    <div class="accordion">
        {foreach from=$users item=$user}
            <div class="accordion-item">
                <div class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{$user->id}">
                        {$user->email}
                    </button>
                </div>
                <div id="collapse{$user->id}" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <ul class="list-group">
                            <a class="list-group-item list-group-item-action disabled">ID:{$user->id}</a>
                            {if ($smarty.session.USER_ID != $user->id)}
                                {if !$user->admin}
                                    <a class="list-group-item list-group-item-action" href='changeAdmin/{$user->id}/1'>Dar admin</a>
                                {else}
                                    <a class="list-group-item list-group-item-action" href='changeAdmin/{$user->id}/0'>Quitar admin</a>
                                {/if}
                                    <a class="list-group-item list-group-item-action" href='deleteUser/{$user->id}'>Eliminar</a>
                            {/if}
                        </ul>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
{include file="footer.tpl"}