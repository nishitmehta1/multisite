<?php /*Template Name: News*/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package skarma
 */
?>
<?php 
get_header(); ?>

	<div id="body" class="content-area">
		
		<div class="rectangle col-md-12 col-sm-12">
			<span class="news text-center">NEWS</span>
		</div>

		<div id="latestnews" class="latest-news-div offset-md-2 col-md-8">
			<span class="latest-news">LATEST NEWS</span>	 
		</div>
		
		<div id="search-area" class="form offset-md-2 col-sm-12 col-md-8" style="padding-right: 0;">
			<label id="search-news-for" class="offset-md-2 offset-sm-2 col-md-3" for="search">Search news for</label>
			<input type="text" class="offset-sm-1 offset-md-0 col-md-3" id="search" name="search" placeholder="Player, match, etc..">
			<select name="year" class="offset-md-0 col-md-3" id="year">
				<option value="2017">2017</option>
				<option value="2016">2016</option>
				<option value="2015">2015</option>
			</select>
			<button type="button" class="go-button col-md-1"><span class="go-button-text">GO</span></button>
		</div>

		<div id="content" class="newsfeed offset-sm-0 col-sm-12 offset-md-2 col-md-10 row">
			<?php 
			$args = array(
				'posts_per_page'   => 10,
				'offset'           => 0,
				'category'         => '',
				'category_name'    => 'News',
				'orderby'          => 'date',
				'order'            => 'ASC',
				'include'          => '',
				'exclude'          => '',
				'meta_key'         => '',
				'meta_value'       => '',
				'post_type'        => 'post',
				'post_mime_type'   => '',
				'post_parent'      => '',
				'author'	       => '',
				'author_name'	   => '',
				'post_status'      => 'publish',
				'suppress_filters' => true 
			);
			query_posts($args);

			while(have_posts()): the_post();
			?> 
			<div class="news-content-div">
				<div class="area">
					<a href="<?php the_permalink(); ?>"><img class="col-md-12 offset-md-0 offset-sm-2 col-sm-12" src="https://placehold.it/378x222" alt="Image Goes Here"></a>
					<span id="news_date" class="col-md-12 col-sm-10"><?php echo get_the_date();?><br></span>
					<span class="news_title col-md-12 offset-md-0"><a href="<?php the_permalink(); ?>"> <?php the_title();?> </a></span> 
					<span class="news-content col-md-12 offset-sm-2 offset-md-0 col-sm-10"><?php the_content(); ?></span>
				</div>
			</div>
			<?php endwhile;?>
		
		</div>

	</div>
	

<?php
get_footer(); ?>
