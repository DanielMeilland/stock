<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= base_url('assets/app/img/logo.png'); ?>" type="image/x-icon; charset=binary">
    <link rel="icon" href="<?= base_url('assets/app/img/logo.png'); ?>" type="image/x-icon; charset=binary">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= htmlspecialchars($template['title']); ?></title>
    <?= htmlspecialchars($template['metadata']); ?>
    <link href="<?= base_url('assets/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/app/css/form.css'); ?>" rel="stylesheet">
</head>
<body>
<section id="logo">
    <a href="<?php echo site_url(); ?>">
        <img src="<?= base_url('assets/app/img/logo.png'); ?>" alt=""/>
    </a>
</section>