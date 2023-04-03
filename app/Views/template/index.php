<!doctype html>
<html lang="en">

<?php

$alert = new App\Libraries\Alert();

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROTOTIPE LOT ASSURANCE CUTTING</title>
    <link href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">
    <?= $alert->get(); ?>

    <?= $this->renderSection('content'); ?>
    <script src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <script src="<?= base_url(); ?>assets/jquery.min.js"></script>

    <?= $alert->init('jquery'); ?>
</body>

</html>