<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package ultrapress
*/
$current_post_id = get_the_ID();
$post_order = get_theme_mod( 'ultrapress_archive_content_reorder', 'featured_image,title,meta_tag,content,button,social_share');
$post_explodes = explode(',', $post_order);
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card list">
		<?php
		if(has_post_thumbnail() && in_array('featured_image',$post_explodes)){
			
		$post_image_url= get_the_post_thumbnail_url($current_post_id , 'ultrapress_archive_thumbnail');
		?>
		<figure>
			<a href="<?php the_permalink();?>">
			<?php the_post_thumbnail('medium_large',array( 'alt' => get_the_title(),'class'=> 'card-img-top')); ?>			
			</a>
		</figure>
		<?php 
		}
		?>
		<div class="list-content-wrap">
			<?php
			
			foreach ($post_explodes as $post_explode): 
				if ('title' === $post_explode) {
						?>
						<h4 class="card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
						<?php
				}elseif ('meta_tag' === $post_explode) {
					ultrapress_post_meta();
				}elseif ('content' === $post_explode) {
					?>
					<div class="card-text">
						<?php 
						the_excerpt();
						?>
					</div>
					<?php	
				}elseif ('social_share' === $post_explode) {
					if(function_exists('ultrapress_social_share')){
						ultrapress_social_share();
					}
				}elseif ('button' === $post_explode) {
					$read_more = get_theme_mod('ultrapress_archive_button_text',__('Read More','ultrapress'));
					$btype = get_theme_mod('ultrapress_archive_button_type','button');
					if (!empty($read_more)): ?>
						<a href="<?php the_permalink();?>" class="blog-btn <?php echo esc_attr($btype);?>">
							<?php echo esc_html($read_more); ?>
						</a>
					<?php endif;
				}
			endforeach; 
			?>
		</div>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->
