<?php /* Smarty version Smarty-3.1.6, created on 2013-10-13 22:07:58
         compiled from "../Tpl\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:22821525aa630eee639-41993122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8d74f20dd30b1470f36d8ab7d69cfd6025dacdc' => 
    array (
      0 => '../Tpl\\Index\\index.html',
      1 => 1381673278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22821525aa630eee639-41993122',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_525aa630f2aa9',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525aa630f2aa9')) {function content_525aa630f2aa9($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

<h2>Blog:<a href="http://blog.keepangry.com">blog.keepangry.com</a></h2>
<h2>QQ:215007356</h2>
<?php echo $_smarty_tpl->getSubTemplate ('../Public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>