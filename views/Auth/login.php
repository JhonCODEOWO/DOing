<main class="flex flex-col h-full">
    <h1>Inicia sesión</h1>
    <form action="/login" method="post" class="w-full mt-5">
        <fieldset class="fieldset">
            <legend class="fieldset-legend">Correo electrónico</legend>
            <input type="text" name="email" class="input" placeholder="Tu correo electrónico" value="<?php echo old('email') ?>">
            <?php if(error('email')): ?>
                <p class="label text-error"><?php echo error('email') ?></p>
            <?php endif ?>
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend">Contraseña</legend>
            <input type="text" name="password" class="input" placeholder="Tu contraseña">
            <?php if(error('password')): ?>
                <p class="label text-error"><?php echo error('password') ?></p>
            <?php endif ?>
        </fieldset>

        <input type="submit" class="btn btn-info" value="Iniciar sesión">
    </form>

    <section class="flex justify-between text-info text-xs mt-3">
        <a href="/account/create">¿No tienes cuenta? Crea una aquí</a>
        <a href="/account/restorePassword">¿Olvidaste tu contraseña?</a>
    </section>
</main>