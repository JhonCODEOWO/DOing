<main>
    <h1>Restaura tu contraseña.</h1>
    <p>Ingresa el correo electrónico de una cuenta existente y nos encargaremos del resto.</p>
    <form action="/account/restorePassword" method="post">
        <fieldset class="fieldset">
            <legend for="name" class="fieldset-legend">Correo electrónico</legend>
            <input type="text" class="input" name="email">
            <p class="label text-error"></p>
        </fieldset>
        <input type="submit" value="Identificar cuenta." class="btn btn-warning">
    </form>
</main>