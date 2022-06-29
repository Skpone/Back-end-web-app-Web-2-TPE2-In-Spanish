{include file="header.tpl"}

    <form method="POST" action="verify">
        <label for="email">Correo:</label>
        <input type="text" name="email" required>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required minlength="8" maxlength="16">
        {if $error}
            {$error}
        {/if}
        <button type="submit">Entrar</button>
    </form>

{include file="footer.tpl"}