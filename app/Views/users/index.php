<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section>
    <p>ACCOUNTS</p>
    <h1>User Accounts</h1>
    <p>Staff records retrieved from the database.</p>
</section>
<section>
    <h2>Users</h2>
    <p><?= count($users) ?> records</p>
    <table border="1" cellpadding="8">
        <thead><tr><th>Username</th><th>Full Name</th></tr></thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr><td><?= esc($user['username']) ?></td><td><?= esc($user['full_name']) ?></td></tr>
            <?php endforeach ?>
        </tbody>
    </table>
</section>
<?= $this->endSection() ?>
