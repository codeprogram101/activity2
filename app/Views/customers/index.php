<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section>
    <p>ACCOUNTS</p>
    <h1>Customer Accounts</h1>
    <p>Customer records retrieved from the database.</p>
</section>
<section>
    <h2>Customers</h2>
    <p><?= count($customers) ?> records</p>
    <table border="1" cellpadding="8">
        <thead><tr><th>Full Name</th><th>Email</th><th>Phone</th></tr></thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr><td><?= esc($customer['full_name']) ?></td><td><?= esc($customer['email']) ?></td><td><?= esc($customer['phone']) ?></td></tr>
            <?php endforeach ?>
        </tbody>
    </table>
</section>
<?= $this->endSection() ?>
