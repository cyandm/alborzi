<?php
$langs = pll_the_languages( [ 
	'raw' => true
] );

$current_lang = pll_current_language( \OBJECT );

?>


<div class="lang-switcher z-[29]">
	<div class="lang-switcher__current border bottom-1 rounded-full border-slate-100 p-6 w-[44px] h-[44px]">
		<?= $current_lang->slug ?>
		<?= $current_lang->custom_flag ?>


	</div>
	<div class="lang-switcher__list p-2 rounded-b-md z-50 bg-slate-50">
		<?php
		foreach ( $langs as $lang ) {

			if ( $lang['current_lang'] )
				continue;

			printf( '<a href="%s" class="lang-switcher__item ">%s <img src="%s" /></a>',
				$lang['url'],
				$lang['slug'],
				$lang['flag']
			);
		}
		?>
	</div>

</div>