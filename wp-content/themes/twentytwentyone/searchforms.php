<form method="get" id="searchforms" action="#" role="search">
	<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'tbazar' ); ?></label>
	<div class="input-group">
		<input class="field" id="searchInput" name="s" type="text" onkeyup="fetchResults()"
			placeholder="<?php esc_attr_e( 'Search &hellip;', 'tbazar' ); ?>" value="<?php the_search_query(); ?>">
		<span class="input-group-append">
			<button class="submit" id="searchsubmit" name="submit" type="submit"><i class="fa fa-search"></i></button>
		</span>
	</div>
	<div id="datafetch"></div>
</form>