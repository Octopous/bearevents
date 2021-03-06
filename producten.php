<?php /* Template Name: Producten */ ?>
<?php get_header(); ?>

<div class="banner">test</div>
<?php
$params = array('posts_per_page' => 5, 'post_type' => 'product');
$wc_query = new WP_Query($params);
?>
<ul>
     <?php if ($wc_query->have_posts()) : ?>
     <?php while ($wc_query->have_posts()) :
                $wc_query->the_post(); ?>
     <li>
          <h3>
               <a href="<?php the_permalink(); ?>">
               <?php the_title(); ?>
               </a>
          </h3>
          <?php the_post_thumbnail(); ?>
          <?php the_excerpt(); ?>
     </li>
     <?php endwhile; ?>
     <?php wp_reset_postdata(); ?>
     <?php else:  ?>
    <?php echo $product->get_price_html();?>
     <li>
          <?php _e( 'No Products' ); ?>
     </li>
     <?php endif; ?>
</ul>
<?php get_sidebar(); ?>


<?php get_footer(); ?>