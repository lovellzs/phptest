<?php /* Smarty version Smarty-3.1.16, created on 2018-05-18 16:21:26
         compiled from "../templates/test1.html" */ ?>
<?php /*%%SmartyHeaderCode:19099670335afe8205876a20-24125999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f4d5edab156fe59a9c9509e48e4ec3e58347451' => 
    array (
      0 => '../templates/test1.html',
      1 => 1526631682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19099670335afe8205876a20-24125999',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5afe82058a34d2_62745510',
  'variables' => 
  array (
    'name' => 0,
    'user' => 0,
    'age1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afe82058a34d2_62745510')) {function content_5afe82058a34d2_62745510($_smarty_tpl) {?><!DOCTYPE html>
<?php $_smarty_tpl->tpl_vars['age1'] = new Smarty_variable(20, null, 0);?>
<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable('zhangsan', null, 0);?>
<html>
<head>
    <meta charset="utf-8">
    <title>smarty test1</title>
</head>
<body>
它的名字叫<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

<br>

我是当前用户：<br>
我是<?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
<br>

我的年龄不是<?php echo $_smarty_tpl->tpl_vars['user']->value->age;?>
,而是<?php echo $_smarty_tpl->tpl_vars['age1']->value;?>

</body>
</html><?php }} ?>
