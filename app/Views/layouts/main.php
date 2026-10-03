<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'POS System') ?></title>
</head>
<body>
    <header>
        <a href="<?= site_url('/') ?>">SimplePOS</a>
        <nav aria-label="Main navigation">
            <a href="<?= site_url('/') ?>">Home</a> |
            <a href="<?= site_url('about') ?>">About</a> |
            <a href="<?= site_url('customers') ?>">Customers</a> |
            <a href="<?= site_url('users') ?>">Users</a>
        </nav>
    </header>
    <hr>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <hr>
    <footer>
        SimplePOS - Laboratory Activity
    </footer>
</body>
</html>
