{include file="header.tpl"}
    <h3>{$title}</h3>
    <ul>
        {foreach from=$users item=$user}
            <li>
                id:{$user->id} | 
                {$user->email} | 
                {if ($smarty.session.USER_ID != $user->id)}
                    {if !$user->admin}
                        <a href='changeAdmin/{$user->id}/1'>Dar admin</a>
                    {else}
                        <a href='changeAdmin/{$user->id}/0'>Quitar admin</a>
                    {/if}
                     | <a href='deleteUser/{$user->id}'>Eliminar</a> |                  
                {/if}    
            </li>
        {/foreach}
    </ul>
{include file="footer.tpl"}