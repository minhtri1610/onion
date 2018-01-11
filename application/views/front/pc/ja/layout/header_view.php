<?php if ($this->router->fetch_class() == 'auth'): ?>

    <?php if (in_array($this->router->fetch_method(), array('index'))): ?>

        <?php include_once "include-header-auth-index.php"; ?>

    <?php elseif (in_array($this->router->fetch_method(), array('forgot_password','lock'))): ?>

        <?php include_once "include-header-auth-forgot_password.php"; ?>

    <?php else: ?>

    <?php endif; ?>

<?php else: ?>


<?php endif; ?>

