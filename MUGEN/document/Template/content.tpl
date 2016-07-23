<div id="main-inner"><article class="entry hentry js-entry-article date-first autopagerize_page_element chars-200 words-100 mode-hatena entry-odd">
	<header class="entry-header"{foreach $content.images as $array} style="background: url(./media/img/{$array["src"]}) no-repeat; background-size: cover;"{/foreach}><div{foreach $content.images as $array} style="height:{$array["height"]}px; background-color:rgba(255,255,255,0.4);display: -webkit-flex;"{/foreach}>

	<div class="entry-title"><div>
	<h1 id="{$content.state}">Type = {$content.state|escape}</h1>
	{if $content.page.category != NULL}<div class="category">{$content.page.category[0]|escape} > {$content.page.category[1]|escape} | {if $content.page.version != NULL}実装されたバージョン: {$content.page.version}{/if} | {if $content.page.target != NULL}対象: {$content.page.target}{/if}</div>
{/if}
</div></div>

</div></header>

	<div class="entry-content">

{include file="./content/Description.tpl"}

{include file="./content/Version.tpl"}

{include file="./content/Parameter.tpl"}

{include file="./content/DefaultParameter.tpl"}

{include file="./content/LoadParameter.tpl"}

{include file="./content/QandA.tpl"}

{include file="./content/CodeSample.tpl"}

{include file="./content/Quote.tpl"}

	</div>
</article></div>
