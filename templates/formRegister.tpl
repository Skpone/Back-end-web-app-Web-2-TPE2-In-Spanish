{include file="header.tpl"}

    <h2>Registrate!</h2>
    <form method="POST" action="verifyRegister">
        <input type="text" name="email" class="form-control mb-3" placeholder="Correo Electronico" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Contraseña" minlength="8" maxlength="16" required>
        {if $error}
            {$error}
        {/if}
        <button type="submit" class="btn btn-warning">Entrar</button>
    </form>

{include file="footer.tpl"}