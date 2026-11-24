<main>
    <form action="/account/create" method="post">
        <h1>Crear cuenta</h1>
        <fieldset class="fieldset">
            <legend for="name" class="fieldset-legend">Nombre de usuario</legend>
            <input type="text" class="input" name="name" value="<?php echo old('name') ?>">
            <p class="label text-error"><?php echo error('name') ?></p>
        </fieldset>
        <fieldset class="fieldset">
            <legend for="name" class="fieldset-legend">Apellido(s)</legend>
            <input type="text" class="input" name="last_name" value="<?php echo old('last_name') ?>">
            <p class="label text-error"><?php echo error('last_name') ?></p>
        </fieldset>
        <fieldset class="fieldset">
            <legend for="name" class="fieldset-legend">Email</legend>
            <input type="text" class="input" name="email" value="<?php echo old('email') ?>">
            <p class="label text-error"><?php echo error('email') ?></p>
        </fieldset>
        <fieldset class="fieldset">
            <legend for="password" class="fieldset-legend">Contraseña</legend>
            <input type="text" class="input" name="password" value="<?php echo old('password') ?>">
            <p class="label text-error"><?php echo error('password') ?></p>
        </fieldset>
        <fieldset class="fieldset">
            <legend for="password" class="fieldset-legend">Confirma tu contraseña</legend>
            <input type="text" class="input" name="password_confirmation">
            <p class="label text-error"><?php echo error('password_confirmation') ?></p>
        </fieldset>

        <input type="submit" value="Crear cuenta" class="btn btn-success">
    </form>
</main>