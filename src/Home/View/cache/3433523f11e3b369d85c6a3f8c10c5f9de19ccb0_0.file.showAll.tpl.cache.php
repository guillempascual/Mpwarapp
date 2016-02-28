<?php
/* Smarty version 3.1.30-dev/50, created on 2016-02-28 12:55:54
  from "/var/www/framework16/Mpwarapp/src/Home/View/showAll.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/50',
  'unifunc' => 'content_56d2e04a5832c5_29682563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3433523f11e3b369d85c6a3f8c10c5f9de19ccb0' => 
    array (
      0 => '/var/www/framework16/Mpwarapp/src/Home/View/showAll.tpl',
      1 => 1456660558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d2e04a5832c5_29682563 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '141905233856d2e04a3dc939_97480774';
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
