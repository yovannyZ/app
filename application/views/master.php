<!DOCTYPE html>
<html>
<head>
    <title><?php echo $titulo ?></title>
    <link href="<?php echo base_url('public/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <script src="<?php echo base_url('public/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('public/js/bootstrap.min.js') ?>"></script>
</head>
<body>
    <?php $this->load->view($vista) ?>
</body>
</html>