<?php if($errors): ?>

    <div class="alert alert-danger">Identifiants incorrecte</div>

<?php endif; ?>

<form method="post">
    <?= $form->input('username', 'Pseudo'); ?>
    <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
    <?= $form->submit() ?>

</form>