<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">
</head>
<body>
    <div class="login-container">
        <h2><img src="https://img.icons8.com/windows/32/ffffff/windows-10.png" alt="logo" /> PREDICT 1.0</h2>
        <form action="#" method="POST">
            <div style="position: relative;">
                <span class="icon icon-user">
                    <img src="https://img.icons8.com/ios-filled/20/cccccc/user.png" />
                </span>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div style="position: relative;">
                <span class="icon icon-lock">
                    <img src="https://img.icons8.com/ios-filled/20/cccccc/lock.png" />
                </span>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <input type="submit" value="LOGIN">
        </form>
    </div>

    <?php if (session()->getFlashdata('error')): ?>
    <p><?= session()->getFlashdata('error'); ?></p>
<?php endif; ?>

</body>
</html>
