<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section>
    <p>ACCOUNTS</p>
    <h1>User Accounts</h1>
    <p>Sample staff records currently stored in a static PHP array.</p>
</section>
<section>
    <h2>Users</h2>
    <p><?= count($users) ?> records</p>
    <table border="1" cellpadding="8">
        <thead><tr><th>Username</th><th>Full Name</th><th>Role</th></tr></thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr><td><?= esc($user['username']) ?></td><td><?= esc($user['full_name']) ?></td><td><?= esc($user['role']) ?></td></tr>
            <?php endforeach ?>
        </tbody>
    </table>
</section>
<?= $this->endSection() ?>
