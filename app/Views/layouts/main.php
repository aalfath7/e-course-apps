<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Course Apps</title>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <style>
        *{
            font-family : 'inter';
        }
    </style>
</head>

<body>
    <header>
        <?= $this->include('./components/navbar') ?>
    </header>

    <main class="p-5">
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('./components/footer') ?>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>