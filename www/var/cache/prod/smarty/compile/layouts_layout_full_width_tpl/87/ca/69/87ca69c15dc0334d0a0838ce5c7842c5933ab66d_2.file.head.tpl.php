<?php
/* Smarty version 3.1.33, created on 2019-06-18 01:15:46
  from '/var/www/html/themes/classic/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d089db234e898_68815278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87ca69c15dc0334d0a0838ce5c7842c5933ab66d' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/head.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5d089db234e898_68815278 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8946647305d089db232caf8_16200071', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19606330565d089db232dfc0_98611753', 'head_ie_compatibility');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2729450715d089db232f375_74557399', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_921886935d089db2340098_81325431', 'head_viewport');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14961103685d089db23414e9_81706230', 'head_icons');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7869199665d089db2346386_11356350', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20110290105d089db2348b05_43892526', 'javascript_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_373804115d089db234bbf5_16356715', 'hook_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4127615035d089db234db07_89106932', 'hook_extra');
?>

<?php }
/* {block 'head_charset'} */
class Block_8946647305d089db232caf8_16200071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_8946647305d089db232caf8_16200071',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta charset="utf-8">
<?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_19606330565d089db232dfc0_98611753 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_19606330565d089db232dfc0_98611753',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta http-equiv="x-ua-compatible" content="ie=edge">
<?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_seo_title'} */
class Block_6003905925d089db232ff02_87863802 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_20832132145d089db23322c8_31605125 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_8408134955d089db2334562_15699134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_13998537545d089db233b4b4_31022674 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls']->value['alternative_langs'], 'pageUrl', false, 'code');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['pageUrl']->value) {
?>
            <link rel="alternate" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageUrl']->value, ENT_QUOTES, 'UTF-8');?>
" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
">
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php
}
}
/* {/block 'head_hreflang'} */
/* {block 'head_seo'} */
class Block_2729450715d089db232f375_74557399 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_2729450715d089db232f375_74557399',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_6003905925d089db232ff02_87863802',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_20832132145d089db23322c8_31605125',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_8408134955d089db2334562_15699134',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_13998537545d089db233b4b4_31022674',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6003905925d089db232ff02_87863802', 'head_seo_title', $this->tplIndex);
?>
</title>
  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20832132145d089db23322c8_31605125', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8408134955d089db2334562_15699134', 'head_seo_keywords', $this->tplIndex);
?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13998537545d089db233b4b4_31022674', 'head_hreflang', $this->tplIndex);
?>

<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_921886935d089db2340098_81325431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_921886935d089db2340098_81325431',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_14961103685d089db23414e9_81706230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_14961103685d089db23414e9_81706230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_7869199665d089db2346386_11356350 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_7869199665d089db2346386_11356350',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_20110290105d089db2348b05_43892526 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_20110290105d089db2348b05_43892526',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_373804115d089db234bbf5_16356715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_373804115d089db234bbf5_16356715',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

<?php
}
}
/* {/block 'hook_header'} */
/* {block 'hook_extra'} */
class Block_4127615035d089db234db07_89106932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_4127615035d089db234db07_89106932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
