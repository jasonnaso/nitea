<div class="resp-menu-full">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php dynamic_sidebar( 'Resp Top Menu' ); ?>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">		
		<div class="col-xs-6 col-sm-6 col-md-3 logo-container">
			<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo@2x.svg" alt="ABC Ställningar"></a>
		</div>
		<div class="col-md-9 visible-md visible-lg top-menu-container">
			<?php get_template_part('partials/top-menu'); ?>
			<a class="login" href="http://213.115.74.170/fmi/webd#" target="_blank">Logga in</a>
			<?php get_template_part('partials/search-form'); ?>
		</div>
		<div class="col-xs-6 col-sm-6 visible-sm visible-xs">
			<button class="resp-menu-button">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
	</div>
</div>
