<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-08 10:37:59
         compiled from "app/views/test/test.php" */ ?>
<?php /*%%SmartyHeaderCode:89527337854ae4ff75b6200-09077793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b5f54e48a04495372c67030f9aecc549c93b13f' => 
    array (
      0 => 'app/views/test/test.php',
      1 => 1420709652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89527337854ae4ff75b6200-09077793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'age' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ae4ff78a4877_75527651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ae4ff78a4877_75527651')) {function content_54ae4ff78a4877_75527651($_smarty_tpl) {?><h3>hello <?php echo Config::get('app.url');?>
  <?php echo $_smarty_tpl->tpl_vars['age']->value;?>
</h3>





 <?php if ($_smarty_tpl->tpl_vars['age']->value>10&&$_smarty_tpl->tpl_vars['age']->value<20) {?>
medium
<?php } elseif ($_smarty_tpl->tpl_vars['age']->value>=20) {?>
upper
<?php } else { ?>
lower
<?php }?> 
<br>
<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
    <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
<br>
<?php }} ?>

<?php }} ?>
