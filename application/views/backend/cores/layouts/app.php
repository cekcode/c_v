<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="id" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="For Backend Development Rumah Sakit Brayat Minulya">
    <meta name="keywords" content="rumah sakit solo, rumah sakit swasta,rumah sakit modern">
    <meta name="author" content="STIMIK SINUS SURAKARTA">
    <title><?php echo $title ?></title>
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>src/assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>src/assets/images/ico/favicon.ico">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
    rel="stylesheet">
    <link href="<?php echo base_url(); ?>src/assets/fonts/line-awesome/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/assets/vendors/css/animate/animate.min.css">    <!-- END VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/assets/css/style.css">
    <!-- END CSS-->

    <script src="<?php echo base_url(); ?>src/assets/vendors/js/animation/wow.min.js" type="text/javascript"></script>
</head>
<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">

<div id="app"></div>

<script src="<?php echo site_url() ?>src/dist/build.js"></script>

<script>
wow = new WOW({}).init();
</script>


<script src="<?php echo base_url(); ?>src/assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>src/assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>src/assets/js/core/app.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>src/assets/js/scripts/customizer.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>src/assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>

</body>
</html>