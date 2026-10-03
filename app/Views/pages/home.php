<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section>
    <p>POINT-OF-SALE SYSTEM</p>
    <h1>Welcome to SimplePOS</h1>
    <p>A basic account management area for your store. Choose a section below to view the sample records.</p>
    <p><a href="<?= site_url('customers') ?>">View Customers</a></p>
    <p><a href="<?= site_url('users') ?>">View Users</a></p>
</section>
<?= $this->endSection() ?>
