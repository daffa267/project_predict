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
        <h2><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brilliance" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16M1 8a7 7 0 0 0 7 7 3.5 3.5 0 1 0 0-7 3.5 3.5 0 1 1 0-7 7 7 0 0 0-7 7" />
            </svg> PREDICT 1.0</h2>
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