<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="p-5 space-y-10">
    <?= $this->include('components/carousel') ?>

    <h1>Home Page</h1>
</div>
<?= $this->endSection() ?>