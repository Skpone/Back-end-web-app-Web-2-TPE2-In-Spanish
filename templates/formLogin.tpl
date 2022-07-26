{include file="header.tpl"}

    <h2>Ingresa!</h2>
    <form method="POST" action="verifyLogin">
        <input type="text" name="email" class="form-control mb-3" placeholder="Correo Electronico" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Contraseña" required minlength="8" maxlength="16">
        {if $error}
            {$error}
        {/if}
        <button type="submit" class="btn btn-warning">Entrar</button>
    </form>

{include file="footer.tpl"}