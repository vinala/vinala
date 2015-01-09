<?php /* Smarty version 3.1.22-dev/6, created on 2015-01-06 12:13:37
         compiled from "C:/wamp2/www/fiesta/app/views/test/test.php" */ ?>
<?php
/*%%SmartyHeaderCode:851254abc361a4a544_07759729%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7077f7feee3964bd6a8b633ebc56e46b213679d6' => 
    array (
      0 => 'C:/wamp2/www/fiesta/app/views/test/test.php',
      1 => 1420538245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '851254abc361a4a544_07759729',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'age' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/6',
  'unifunc' => 'content_54abc361c807e2_38633916',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54abc361c807e2_38633916')) {function content_54abc361c807e2_38633916 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '851254abc361a4a544_07759729';
?>
<h3>hello <?php echo Config::get('app.url');?>
  <?php echo $_smarty_tpl->tpl_vars['age']->value;?>
</h3>





 
<br>
<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
    <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
<br>
<?php }} ?>

<?php }
}
?>