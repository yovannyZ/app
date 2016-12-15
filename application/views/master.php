<!DOCTYPE html>
<html>
<head>
    <title><?php echo $titulo ?></title>
    <link href="<?=base_url('public/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <script src="<?=base_url('public/js/jquery.min.js') ?>"></script>
    <script src="<?=base_url('public/js/bootstrap.min.js') ?>"></script>
</head>
<body>
    <?php $this->load->view($vista) ?>
</body>
</html>