<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en-us" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CodeIgniter Shopping Cart</title>
 
<link href="<?= base_url(); ?>assets/css/core.css" media="screen" rel="stylesheet" type="text/css" />
 
<script type="text/javascript" src="<?= base_url("assets/js/jquery-1.3.2.min.js"); ?>"></script>
<script type="text/javascript" src="<?= base_url("assets/js/core.js") ?>"></script>
</head>
<body>
 
<div id="wrap">
 
    <?php $this->view($content); ?>
     
    <div class="cart_list">
        <h3>Your shopping cart</h3>
        <div id="cart_content">
        <?php $this->view('cart/cart'); ?>
        </div>
    </div>
</div>
 
</body>
</html>