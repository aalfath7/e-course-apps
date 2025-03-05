<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="p-5 space-y-10">
    <?= $this->include('components/carousel') ?>

    <div class="grid grid-cols-2 gap-5 bg-blue-100">
        <div class="flex items-center justify-center">
            <div>
                <h1 class="font-bold text-4xl">E Course Platform</h1>
                <p class="text-xl">Tempat belajar berbagai ilmu pengetahuan.</p>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <img class="h-44" src="<?= base_url('images/ecourse-ilust.jpg') ?>" alt="">
        </div>
    </div>

    
</div>
<?= $this->endSection() ?>