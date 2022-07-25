{include file="header.tpl"}

    <h1>Registrate!</h1>
    <form method="POST" action="verifyRegister">
        <label for="email" class="form-label">Correo:</label>
        <input type="text" name="email" class="form-control" required>
        <label for="password" class="form-label">Contraseña:</label>
        <input type="password" name="password" class="form-control" required minlength="8" maxlength="16">
        {if $error}
            {$error}
        {/if}
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>

{include file="footer.tpl"}