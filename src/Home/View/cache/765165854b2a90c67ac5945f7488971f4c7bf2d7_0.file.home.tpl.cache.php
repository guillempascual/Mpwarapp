<?php
/* Smarty version 3.1.30-dev/50, created on 2016-06-20 22:24:51
  from "/var/www/framework16/Mpwarapp/src/home/view/smarty/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/50',
  'unifunc' => 'content_57685113a566c8_28092495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '765165854b2a90c67ac5945f7488971f4c7bf2d7' => 
    array (
      0 => '/var/www/framework16/Mpwarapp/src/home/view/smarty/home.tpl',
      1 => 1466454289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57685113a566c8_28092495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1209576803576851139cf169_02999173';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mpwarapp</title>
</head>
<body>
<main style="text-align: center; width: 700px; height: 100%; font-family: 'Trebuchet MS', Helvetica, sans-serif; margin: auto">
    <h1>Mpwarapp</h1>
    <h3>Example routes</h3>
    <ol>
        <li><a href="">Home</a></li>
        <li><a href="randomroute">Not Found Route</a></li>
        <li><a href="customer-show/1">Show customer with id = 1 in Twig (HTTP Response)</a></li>
        <li><a href="customer-list-smarty">List all customers in Smarty (HTTP Response)</a></li>
        <li><a href="customer-list-twig">List all customers in Twig(HTTP Response)</a></li>
        <li><a href="customer-list-json">List all customers (JSON Response)</a></li>
        <li><a href="translate/es">Translate to <b>es</b></a></li>
        <li><a href="translate/fr">Translate to <b>fr</b></a></li>
    </ol>
</main>
</body>
</html><?php }
}
