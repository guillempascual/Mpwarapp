<?php
/* Smarty version 3.1.30-dev/50, created on 2016-06-20 21:52:04
  from "/var/www/framework16/Mpwarapp/src/home/view/smarty/showAllCustomers.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/50',
  'unifunc' => 'content_576849644bd057_75407234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59807683f87723e3f73b31abe4434c441f4c9f76' => 
    array (
      0 => '/var/www/framework16/Mpwarapp/src/home/view/smarty/showAllCustomers.tpl',
      1 => 1456660558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576849644bd057_75407234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '695150211576849643e6ac1_78386628';
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
