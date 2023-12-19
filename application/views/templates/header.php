<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen bg-gray-100">
    <!-- NAVBAR -->
    <div class="bg-blue-500 text-white p-4">
        <div class="container mx-auto flex flex-row justify-between items-center">
            <span class="text-xl font-semibold uppercase"><?= $title; ?></span>
            <div class="flex flex-row gap-8">
                <a href="<?= base_url(); ?>" class="text-lg font-semibold uppercase">Home</a>
                <a href="<?= base_url('pages/login'); ?>" class="text-lg font-semibold uppercase">Login</a>
                <a href="<?= base_url('pages/register'); ?>" class="text-lg font-semibold uppercase">Register</a>
            </div>
        </div>
    </div>

    <div class="flex-grow flex flex-col justify-center items-center p-10" id="content">
