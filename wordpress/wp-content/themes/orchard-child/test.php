<?php // Template Name: test file
get_header(); ?>
<style>
  .owl-carousel.mobile-category-carousel .item {
    display: flex;
    flex-wrap: wrap;
}

.owl-carousel.mobile-category-carousel .post {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    margin-bottom: 20px;
}

.mobile-category-carousel .post-left {
    flex-shrink: 0;
    margin-right: 20px;
}

.mobile-category-carousel .post-left img {
    max-width: 100px;
    height: auto;
}

.mobile-category-carousel .post-right {
    flex: 1;
}

.mobile-category-carousel .post-right h3 {
    margin: 0;
}

.mobile-category-carousel .post-date {
    color: #888;
    font-size: 0.9em;
}
.mobile-category-carousel h3 {
    font-size: 14px;
}
.mobile-category-carousel span {
    font-size: 3rem;
    color: #B69E60;
}
.mobile-category-carousel .owl-nav {
    position: relative;
}
.mobile-category-carousel button.owl-next {
    position: absolute;
    right: 0;
}
.mobile-category-carousel  button.owl-prev , .mobile-category-carousel button.owl-next{
    background :transparent;
    margin:0;
    padding:0;
}
/* Hide mobile view on desktop */
.mobile-view {
    display: none !important;
}

/* Show mobile view and hide desktop view on mobile devices */
@media (max-width: 767px) {
    .desktop-view {
        display: none;
    }
    .mobile-view {
        display: block;
    }
}
</style>
<div class="container">
<h5>Articles Under <br /><?php the_category(', '); ?></h5>
<?php
$terms = get_the_category(get_the_id());
$term_ids = array();
foreach ($terms as $term) {
    $term_ids[] = $term->term_id;
}
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 15,
    'category__in'   => $term_ids
);
$catarticles = new WP_Query($args);
?>

<!-- Desktop List View -->
<?php if ($catarticles->have_posts()) : ?>
    <ul id="blogs-category" class="desktop-view">
        <?php while ($catarticles->have_posts()) : $catarticles->the_post(); ?>
            <li style="display: flex; align-items: flex-start; margin-bottom: 10px;">
                <?php if (has_post_thumbnail()) : ?>
                    <div style="margin-right: 10px;" class="category-thumbs">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('custom-thumb'); ?>
                        </a>
                    </div>
                <?php endif; ?>
                <div class="category-content">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <span class="date"><?php echo get_the_date(); ?></span>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>

<!-- Mobile Carousel View -->
<div class="owl-carousel mobile-category-carousel mobile-view">
    <?php
    if ($catarticles->have_posts()) :
        $post_counter = 0;

        while ($catarticles->have_posts()) : $catarticles->the_post();
            if ($post_counter % 4 == 0) {
                if ($post_counter > 0) {
                    echo '</div>'; // Close previous item div
                }
                echo '<div class="item">'; // Open new item div
            }
            ?>
            <div class="post">
                <div class="post-left">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('thumbnail'); ?>
                    <?php endif; ?>
                </div>
                <div class="post-right">
                    <h3><?php the_title(); ?></h3>
                    <div class="post-date"><?php echo get_the_date(); ?></div>
                </div>
            </div>
            <?php
            $post_counter++;
        endwhile;

        echo '</div>'; // Close last item div
    endif;
    wp_reset_postdata();
    ?>
</div>


</div>



<script>
    var $ = jQuery;
    $(document).ready(function(){
  $(".mobile-category-carousel").owlCarousel({
    items: 1, // Number of items to display per page
    loop: true,
    margin: 10,
    dots: true,
    nav: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  });
});

</script>

<?php get_footer(); ?>
