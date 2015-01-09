<?php /* Smarty version 3.1.22-dev/6, created on 2015-01-07 00:44:22
         compiled from "C:/wamp/www/fiesta/app/views/test/test.php" */ ?>
<?php
/*%%SmartyHeaderCode:1475954ac73563e7451_68364680%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '628c57886fd5730ec55121b03c5d01425e1e2c02' => 
    array (
      0 => 'C:/wamp/www/fiesta/app/views/test/test.php',
      1 => 1420538245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1475954ac73563e7451_68364680',
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
  'unifunc' => 'content_54ac7356aede62_85752515',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54ac7356aede62_85752515')) {function content_54ac7356aede62_85752515 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1475954ac73563e7451_68364680';
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