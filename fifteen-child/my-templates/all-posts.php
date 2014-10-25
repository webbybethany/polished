<?php
/*
Template Name: Display All Posts
*/

get_header('single');
?>

	<h1 class="container single-entry-title"><?php
the_title();
?></h1>
	<div id="content" class="site-content container row clearfix clear">
	<div class="container col-md-12">
	
	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">
			 <?php
$myposts = get_posts('');
foreach ($myposts as $post):
    setup_postdata($post);
?>
  <div class="post-item">
    <div class="post-info">
      <h2 class="post-title">
      <a href="<?php
    the_permalink();
?>" title="<?php
    the_title_attribute();
?>">
      <?php
    the_title();
?>
      </a>
      </h2>
    </div>
    <div class="post-content">
    <?php
    the_content();
?>
    </div>
  </div>
  <br>
<?php
endforeach;
wp_reset_postdata();
?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>