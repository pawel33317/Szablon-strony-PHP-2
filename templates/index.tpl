{include file="header.tpl" title=foo}
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
				{section name=id loop=$gdzie.tytul}
				<a href="{$gdzielnk.link[id]}">{$gdzie.tytul[id]}</a>{if not $smarty.section.id.last} --> {/if}
				{/section}
			</section>
			{section name=idarticle loop=$article.tytul}
			<header>
				<div class="ahead1">
					<img src="img/tytad.png" alt=""/>
				</div>
				<div class="ahead2">
					<div class="tytulart"><a href="{$article.link[idarticle]}">{$article.tytul[idarticle]}</a></div>
				</div>
				<div class="titledetails">
					data:{$article.data[idarticle]} | autor: 
					<a href="{$article.autorl[idarticle]}">{$article.autor[idarticle]}</a> | kategoria: 
					<a href="{$article.kategl[idarticle]}">{$article.kateg[idarticle]}</a>
				</div>
			</header>
			<section class="article-content">
				<p>{$article.tresc[idarticle]}<a href="{$article.link[idarticle]}"> Czytaj więcej</a></p>
			</section>
			<footer class="fart">
				<img src="img/livejournal.png" alt=""/>
				<a href="{$article.komentl[idarticle]}">{$article.koment[idarticle]}</a>
				<img src="img/wykop.png" alt=""/>
				<a href="{$article.ocenal[idarticle]}">ocena: {$article.ocena[idarticle]}</a>
			</footer>
			<div class="clear"></div>
			{/section}
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
				{section name=id loop=$pop.tytul}
				<a href="{$pop.link[id]}">{$pop.tytul[id]}</a><br>
				{/section}
			</div>
		</aside>
		<aside class="main logowanie">
			<h1>LOGOWANIE</h1>
			<img src="img/icons/Profile.png" alt="" />
			<br>Zalogowany:
				<a href="{$logowanie["userl"]}">{$logowanie["user"]}</a>
			<br>Ranga:
				<a href="{$logowanie["rangal"]}">{$logowanie["ranga"]}</a>
			<div id="log">
				<a href="{$logowanie["wyloguj"]}">Wyloguj</a> | 
				<a href="{$logowanie["panel"]}">Panel</a>
			</div>
		</aside>
		<aside class="main">
			<h1>NOWE</h1>
			<div class="lista">
				{section name=id loop=$pop.tytul}
				<a href="{$pop.link[id]}">{$pop.tytul[id]}</a><br>
				{/section}
			</div>
		</aside>
		<div class="clear"></div>
	</div>
{include file="footer.tpl"}
