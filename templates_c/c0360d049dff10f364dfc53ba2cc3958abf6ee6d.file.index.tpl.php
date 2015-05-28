<?php /* Smarty version Smarty-3.1.13, created on 2013-04-09 19:24:32
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60610391351644ed040f672-72408711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1365528272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60610391351644ed040f672-72408711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gdzie' => 0,
    'gdzielnk' => 0,
    'article' => 0,
    'pop' => 0,
    'logowanie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51644ed05a9f82_01409680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51644ed05a9f82_01409680')) {function content_51644ed05a9f82_01409680($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

	<!--<div id="uwaga1">Uwaga</div>-->
	<div id="artasi">
			<div style="width:165px; float:left;padding-left:0px;">
			<aside class="main"> 
		<div class="side-nav">
			<a href="#" class="green">Napisz Artykuł</a>
			<a href="#" class="green" style="font-weight:bold;">Skrypty</a>
				<a href="#" class="orange">HTML 5</a>
				<a href="#" class="orange">CSS3</a>
				<a href="#" class="orange">PHP</a>
				<a href="#" class="orange">C, C++</a>
				<a href="#" class="orange">Python</a>
				<a href="#" class="orange">MySQL</a>
				<a href="#" class="orange">Inne</a>
			<a href="#" class="green"style="font-weight:bold;">Kursy</a>
				<a href="#" class="orange">C, C++</a>
				<a href="#" class="orange">Python</a>
				<a href="#" class="orange">MySQL</a>
			<a href="#" class="green" style="border-color:#66CC00; font-weight:bold;">WWW</a>				
				<a href="#" class="orange" style="border-color:#FF6600; font-weight:bold;">HTML 5</a>
				<a href="#" class="orange">CSS3</a>
				<a href="#" class="orange">PHP</a>
				<a href="#" class="orange">SMARTY</a>
			<a href="#" class="green">Artykuły</a>
			<a href="#" class="green">Kontakt</a>
			<a href="#" class="green">Sitemap</a>
		</div>
			</aside>
		</div>
		<article class="main">
			<section id="adres">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['gdzie']->value['tytul']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['gdzielnk']->value['link'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['gdzie']->value['tytul'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['id']['last']){?> --> <?php }?>
				<?php endfor; endif; ?>
			</section>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['name'] = 'idarticle';
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['article']->value['tytul']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total']);
?>
			<header>
				<div class="ahead1">
					<img src="img/tytad.png" alt=""/>
				</div>
				<div class="ahead2">
					<div class="tytulart"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['tytul'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a></div>
				</div>
				<div class="titledetails">
					data:<?php echo $_smarty_tpl->tpl_vars['article']->value['data'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
 | autor: 
					<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['autorl'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['autor'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a> | kategoria: 
					<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['kategl'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['kateg'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a>
				</div>
			</header>
			<section class="article-content">
				<p><?php echo $_smarty_tpl->tpl_vars['article']->value['tresc'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
"> Czytaj więcej</a></p>
			</section>
			<footer class="fart">
				<img src="img/livejournal.png" alt=""/>
				<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['komentl'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['koment'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a>
				<img src="img/wykop.png" alt=""/>
				<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['ocenal'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
">ocena: <?php echo $_smarty_tpl->tpl_vars['article']->value['ocena'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a>
			</footer>
			<div class="clear"></div>
			<?php endfor; endif; ?>
		</article>
		<aside class="main" "> 
			<form action="index.html" method="get" class="searchform">
				<input type="text" name="s" value="Szukaj..." onblur="if(this.value.length == 0) this.value='Szukaj...';" onclick="if(this.value == 'Szukaj...') this.value='';" id="search-text" class="search" />
				<button id="search-button" tabindex="2" type="submit" class="search-btn">GO</button>
			</form>
		</aside>
		<aside class="main">
			<h1>POPULARNE</h1>
			<div class="lista">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pop']->value['tytul']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['pop']->value['link'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['pop']->value['tytul'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a><br>
				<?php endfor; endif; ?>
			</div>
		</aside>
		<aside class="main logowanie">
			<h1>LOGOWANIE</h1>
			<img src="img/icons/Profile.png" alt="" />
			<br>Zalogowany:
				<a href="<?php echo $_smarty_tpl->tpl_vars['logowanie']->value["userl"];?>
"><?php echo $_smarty_tpl->tpl_vars['logowanie']->value["user"];?>
</a>
			<br>Ranga:
				<a href="<?php echo $_smarty_tpl->tpl_vars['logowanie']->value["rangal"];?>
"><?php echo $_smarty_tpl->tpl_vars['logowanie']->value["ranga"];?>
</a>
			<div id="log">
				<a href="<?php echo $_smarty_tpl->tpl_vars['logowanie']->value["wyloguj"];?>
">Wyloguj</a> | 
				<a href="<?php echo $_smarty_tpl->tpl_vars['logowanie']->value["panel"];?>
">Panel</a>
			</div>
		</aside>
		<aside class="main">
			<h1>NOWE</h1>
			<div class="lista">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pop']->value['tytul']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['pop']->value['link'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['pop']->value['tytul'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a><br>
				<?php endfor; endif; ?>
			</div>
		</aside>
		<div class="clear"></div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>