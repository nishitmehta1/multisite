<?php
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
			<?php if(have_posts()): 
				while(have_posts()):
					the_post();
				?>
				<h2><?php the_title(); ?></h2> 
			<?php endwhile;?>
				
			<?php endif; ?>

		</div>
		<!-- #main -->
	</div> <!-- #primary-->

<?php
get_footer();
