<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_the_title(); ?></title>

<?php if(isset($styles)) { ?>
    <!-- Linked Style Sheets -->
    <?php for($i = 0; $i < count($styles); $i++) { ?>
<link rel="stylesheet" href='<?= $styles[$i]; ?>'> 
    <?php } ?>
<?php } ?>
    
<?php if(isset($custom_css_cdn)) { ?>
    <!-- Custom CSS CDN -->
    <?php for($i = 0; $i < count($custom_css_cdn); $i++) { ?>
<link rel="stylesheet" href='<?= $custom_css_cdn[$i]; ?>'> 
    <?php } ?>
<?php } ?>

<?php if(isset($custom_js_cdn)) { ?>
    <!-- Custom Javascript CDN -->
<?php   for($i = 0; $i < count($custom_js_cdn); $i++) { ?>
    <script src="<?= $custom_js_cdn[$i]; ?>"></script>
<?php   } ?>
<?php } ?>

</head>
<body>
 