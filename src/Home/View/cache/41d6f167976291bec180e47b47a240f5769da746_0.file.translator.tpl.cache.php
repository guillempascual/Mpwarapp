<?php
/* Smarty version 3.1.30-dev/50, created on 2016-06-20 21:14:14
  from "/var/www/framework16/Mpwarapp/src/home/view/translator.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/50',
  'unifunc' => 'content_576840864439e7_44166534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41d6f167976291bec180e47b47a240f5769da746' => 
    array (
      0 => '/var/www/framework16/Mpwarapp/src/home/view/translator.tpl',
      1 => 1466450052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576840864439e7_44166534 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11675121645768408633fb70_48584926';
?>
<!DOCTYPE html>
<head>
    <title>Translation to <?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
</title>
</head>
<html>
<div style="text-align: center; width: 100%; height: 100%; font-family: 'Trebuchet MS', Helvetica, sans-serif;">
    <?php if (!isset($_smarty_tpl->tpl_vars['translations']->value)) {?>
        <h4>Language [<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
] requested not in translation system, should be one of [<?php echo implode(', ',$_smarty_tpl->tpl_vars['validLangs']->value);?>
]</h4>
    <?php } else { ?>
        <table id="translations" style="display: inline-table;">
            <thead>
            <tr style="background-color: darkgrey;">
                <th colspan="1">Welcome to the translation system</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['translations']->value, 'translation', false, 'original');
foreach ($_from as $_smarty_tpl->tpl_vars['original']->value => $_smarty_tpl->tpl_vars['translation']->value) {
$_smarty_tpl->tpl_vars['translation']->_loop = true;
$__foreach_translation_0_saved = $_smarty_tpl->tpl_vars['translation'];
?>
                <tr>
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['original']->value;?>
</strong> translates to <strong><?php echo $_smarty_tpl->tpl_vars['translation']->value;?>
</strong> in language: <strong><?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
</strong> </td>
                </tr>
            <?php
$_smarty_tpl->tpl_vars['translation'] = $__foreach_translation_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
            </tbody>
        </table>
    <?php }?>
</div>
</html>
</html><?php }
}
