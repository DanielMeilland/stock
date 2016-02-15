<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= htmlspecialchars($template['title']); ?></title>
    <?= htmlspecialchars($template['metadata']); ?>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?= base_url('assets/metisMenu/dist/metisMenu.min.css'); ?>" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?= base_url('assets/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css'); ?>"
          rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?= base_url('assets/datatables-responsive/css/dataTables.responsive.scss'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url('assets/app/css/sb-admin-2.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
    <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?= $this->session->flashdata('message') ?>
        </div>
    <?php endif; ?>