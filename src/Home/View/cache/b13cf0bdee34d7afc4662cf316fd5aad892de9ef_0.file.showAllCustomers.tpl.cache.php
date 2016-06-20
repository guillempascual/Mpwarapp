<?php
/* Smarty version 3.1.30-dev/50, created on 2016-06-20 10:12:46
  from "/var/www/framework16/Mpwarapp/src/home/view/showAllCustomers.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/50',
  'unifunc' => 'content_5767a57e486c36_60070998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b13cf0bdee34d7afc4662cf316fd5aad892de9ef' => 
    array (
      0 => '/var/www/framework16/Mpwarapp/src/home/view/showAllCustomers.tpl',
      1 => 1456660558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5767a57e486c36_60070998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9707824355767a57e3a6bf0_68944669';
?>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>

<div class="col-lg-12 " >
    <h1>VIP Customers</h1>
    <ul>
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_customers']->value, 'customer');
foreach ($_from as $_smarty_tpl->tpl_vars['customer']->value) {
$_smarty_tpl->tpl_vars['customer']->_loop = true;
$__foreach_customer_0_saved = $_smarty_tpl->tpl_vars['customer'];
?>
            <li>
                <p><h2><?php echo $_smarty_tpl->tpl_vars['customer']->value['name'];?>
</h2></p>
                <p>email: <?php echo $_smarty_tpl->tpl_vars['customer']->value['email'];?>
</p>
                <p>phone: <?php echo $_smarty_tpl->tpl_vars['customer']->value['phone'];?>
 </p>
            </li>
        <?php
$_smarty_tpl->tpl_vars['customer'] = $__foreach_customer_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    </ul>
</div>

</body>
</html><?php }
}
