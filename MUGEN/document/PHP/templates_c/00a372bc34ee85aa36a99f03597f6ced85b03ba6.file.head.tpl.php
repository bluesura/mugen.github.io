<?php /* Smarty version Smarty-3.1.12, created on 2017-05-30 14:08:56
         compiled from "F:\bluesura\Dropbox\Public\www\mugen.github.io\MUGEN\document\Template\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30842592163db1806c5-17580956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00a372bc34ee85aa36a99f03597f6ced85b03ba6' => 
    array (
      0 => 'F:\\bluesura\\Dropbox\\Public\\www\\mugen.github.io\\MUGEN\\document\\Template\\head.tpl',
      1 => 1496153311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30842592163db1806c5-17580956',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_592163db314ce5_61140669',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592163db314ce5_61140669')) {function content_592163db314ce5_61140669($_smarty_tpl) {?>  <!-- （*´ω｀*）＜ソースコードを見るなんてえっちぃ人ですね！ -->

  <meta charset="UTF-8">
  <meta http-equiv="Content-Language" content="ja">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="referrer" content="unsafe-url" />
  <meta name="robots" content="INDEX,FOLLOW">
  <meta name="viewport" content="width=device-width">


  <title itemprop="headline">
<?php if ($_smarty_tpl->tpl_vars['content']->value['page_subtitle']){?><?php echo $_smarty_tpl->tpl_vars['content']->value['page_subtitle'];?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['content']->value['page']['category'][1]){?>【<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['page']['category'][1], ENT_QUOTES, 'ISO-8859-1', true);?>
】 | <?php }?>
<?php if ($_smarty_tpl->tpl_vars['content']->value['page_title']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['page_title'], ENT_QUOTES, 'ISO-8859-1', true);?>
 - <?php }?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['site_name'], ENT_QUOTES, 'ISO-8859-1', true);?>

  </title>

  <!---->
  <meta name="apple-mobile-web-app-title" content="MUGEN Document" />
  <link rel="fluid-icon" href="/media/img/icon-512x512.png" title="MUGEN Document">
  <link rel="icon" type="image/x-icon" href="/media/img/favicon.png">
  <link rel="shortcut icon" href="/media/img/favicon.png" type="image/png">
  <link rel="icon" sizes="128x128" href="/media/img/icon-128x128.png">
  <link rel="apple-touch-icon" sizes="128x128" href="/media/img/icon-128x128.png">
  <link rel="apple-touch-icon-precomposed" sizes="128x128" href="/media/img/icon-128x128.png">
  <link rel="icon" sizes="192x192" href="/media/img/icon-192x192.png">
  <meta name="msapplication-TileImage" content="/media/img/icon-512x512.png">

  <link rel="mask-icon" href="/media/img/infinite-M.svg" color="#1E88E5">
  <meta name="theme-color" content="#1E88E5">
  <meta name="msapplication-TileColor" content="#1E88E5">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="manifest" href="/manifest.json">
  <!---->

  <!-- 「チェス盤を引っくり返す！」 -->
  <meta name="author" content="sura">
  <meta name="copyright" content="Copyright© SURA(すら) All rights reserved." />
  <link rel="author" title="sura" href="https://twitter.com/bluesura">
  
  <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['content']->value['url'];?>
">
  <link href="https://github.com/bluesura/bluesura.github.io/commits/master.atom" rel="alternate" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['site_name'], ENT_QUOTES, 'ISO-8859-1', true);?>
の更新履歴" type="application/atom+xml">
  <meta name="generator" content="Smarty">
  <!-- 「駄目ね、全然駄目だわ」 -->
<meta name="yandex-verification" content="1899f07145a7d36d" />
<meta name="p:domain_verify" content="78fabf8c78c7428693f52f595b7dd476"/>
  <!-- ジョインジョイン OGP -->
  <meta name="description" content="MUGENのステートコントローラー・トリガー・ライフバーの記述について、ちょっとだけまとめてます。">

  <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['content']->value['url'];?>
">
  <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['content']->value['page_subtitle'];?>
 | <?php echo $_smarty_tpl->tpl_vars['content']->value['page_title'];?>
">
  <meta property="og:description" content="MUGENのステートコントローラー・トリガー・ライフバーの記述について、ちょっとだけまとめてます。">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:site_name" content="Name = sura">
  <meta name="twitter:site" content="@bluesura">
  <meta name="twitter:creator" content="@bluesura">
  <meta name="twitter:url" content="<?php echo $_smarty_tpl->tpl_vars['content']->value['url'];?>
">
  <meta name="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['content']->value['page_subtitle'];?>
 | <?php echo $_smarty_tpl->tpl_vars['content']->value['page_title'];?>
">
  <meta name="twitter:description" content="MUGENのステートコントローラー・トリガー・ライフバーの記述について、ちょっとだけまとめてます。">
  <meta name="twitter:card" content="summary_large_image">
<?php if ($_smarty_tpl->tpl_vars['content']->value['images'][0]['src']!=''){?>  <meta property="og:image" content="https://bluesura.github.io/MUGEN/document/State/media/img/<?php echo $_smarty_tpl->tpl_vars['content']->value['images'][0]['src'];?>
"><?php }?>
<?php if ($_smarty_tpl->tpl_vars['content']->value['images'][0]['src']!=''){?>  <meta name="twitter:image" content="https://bluesura.github.io/MUGEN/document/State/media/img/<?php echo $_smarty_tpl->tpl_vars['content']->value['images'][0]['src'];?>
" /><?php }?>

<?php if ($_smarty_tpl->tpl_vars['content']->value['images'][0]['src']!=''){?>  <link rel="image_src" href="https://bluesura.github.io/MUGEN/document/State/media/img/<?php echo $_smarty_tpl->tpl_vars['content']->value['images'][0]['src'];?>
" /><?php }?>

<?php if ($_smarty_tpl->tpl_vars['content']->value['images'][0]['src']!=''){?>  <meta property="pin:media" content="https://bluesura.github.io/MUGEN/document/State/media/img/<?php echo $_smarty_tpl->tpl_vars['content']->value['images'][0]['src'];?>
" />
<meta property="pin:description" content="<?php echo $_smarty_tpl->tpl_vars['content']->value['images'][0]['alt'];?>
" /><?php }?>
  <!-- もういい、ここまでだっ・・・ -->


  <!---->
  <link rel="stylesheet" href="/lib/css/material.css?version=20161230">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

  <script type="text/javascript" src="//code.jquery.com/jquery-2.2.0.min.js"></script>
  <script async type="text/javascript" src="//feed.mikle.com/js/rssmikle.js"></script>
  <script async type="text/javascript" src="/lib/js/code.js?version=20161230"></script>

  <!---->

<?php }} ?>