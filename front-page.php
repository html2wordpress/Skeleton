<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
  * Template Post Type: documents
 *
 * Template Name: Front Page
 *
 * @package skeleton
 */

get_header();
?>

<?php
$loop = new WP_Query(
    array(
        'post_type' => 'documents', // This is the name of your post type - change this as required,
        'posts_per_page' => 1 // This is the amount of posts per page you want to show
    )
);
while ( $loop->have_posts() ) : $loop->the_post(); //This is the Loop

?>
  
  <section id="home" class="text-center">
      <div class="text-center home-banner">
		<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive home-thumbnail']); ?>
		<div class="overlay opacity-banner">
        <h1 class="fw-light display-3"><?php the_title(); ?></h1>
        <?php the_excerpt(); ?>
        <p class="lead">
          <a href="<?php the_permalink(); ?>" class="btn btn-primary my-2">Read More</a>
        </p>
		</div>
      </div>
  </section>

<?php endwhile;
wp_reset_postdata();
?>

<div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
		<?php
		$loop = new WP_Query(
			array(
				'post_type' => 'post',
				'posts_per_page' => 3
			)
		);
		while ( $loop->have_posts() ) : $loop->the_post();

		?>	  
        <div class="col">
          <div class="card shadow-sm">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']); ?>			
            <div class="card-body">
			  <h5 class="card-title"><?php the_title(); ?></h5>
			  <p class="card-text"><?= wp_strip_all_tags( get_the_excerpt(), true ) ?></p>
              <div class="d-flex justify-content-between align-items-center">
                  <a href="<?php the_permalink(); ?>" type="button" class="btn btn-primary">Read More</a>
                <small class="text-muted">By <?php echo get_the_author_meta('display_name'); ?> on <?php echo get_the_date(); ?></small>
              </div>
            </div>			
          </div>	  
        </div>
		<?php endwhile;
		wp_reset_postdata();
		?> 		
      </div>
	</div>	
  </div>
         
  <div class="p-5 mb-2 bg-primary text-white text-center">
	<div class="container">
        <h3 class="text-white mb-3">Request an Estimate</h3>
		<?php echo do_shortcode('[wpforms id="55" title="false"]'); ?>
	</div>
  </div>
  
 		<?php
		$loop = new WP_Query(
			array(
				'post_type' => 'articles',
				'posts_per_page' => 1
			)
		);
		while ( $loop->have_posts() ) : $loop->the_post();

		?> 
  <div class="container mt-5">
    <div class="h-100 p-5 bg-light border rounded-3">
	   <div class="col-md-6 float-start">
          <h2><?php the_title(); ?></h2>
              <?php echo wp_trim_words( get_the_content(), 150, '...'); ?>
	    </div>
	          <?php the_post_thumbnail('post-thumbnail', ['class' => 'w-50 float-end img-thumbnail']); ?>
	    <div class="clearfix" />
	          <a href="<?php the_permalink(); ?>" class="btn btn-primary mt-5" type="button">Read More</a>
    </div>
  </div>
  
  
  
	<?php endwhile;
	wp_reset_postdata();
	?>
	
<?php
get_footer();