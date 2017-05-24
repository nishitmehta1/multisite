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

get_header(); ?>

	<div id="primary" class="content-area">
		
		<div class="rectangle">
			<span class="news">NEWS</span>
		</div>

		<div id="latestnews" class="latest-news-div">
			<span class="latest-news">LATEST NEWS</span>	 
		</div>
		<hr>
		
		<div class="form">
			<label id="search-news-for" for="search">Search news for</label>
			<input type="text" id="search" name="search" placeholder="Player, match, etc..">
			<select name="year" id="year">
				<option value="2017">2017</option>
				<option value="2016">2016</option>
				<option value="2015">2015</option>
			</select>
		</div>


		<hr id="hr2">
		<div id="content" class="newsfeed">
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
				<!--  -->
					<a href="<?php the_permalink(); ?>"><img src="https://placehold.it/378x222" alt="Image Goes Here"></a>
					<span id="news_date"><?php echo get_the_date();?><br></span>
					<span class="news_title"><a href="<?php the_permalink(); ?>"> <?php the_title();?></a></span> 
					<span class="news-content"><?php the_content(); ?></span>
				</div>
			
			<?php endwhile;?>

		</div>
	</div> <!-- #primary-->

<?php
get_footer();
