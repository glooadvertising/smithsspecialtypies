<?php get_header(); ?>
<main>
    <section class="home-hero">
        <div class="container">
            <div class="content-wrapper">
                <h2>
                    <?php bloginfo('description'); ?>
                </h2>
                <?php the_content(); ?>
            </div>
            <div class="mascot">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/lil_smithy_pie.svg" alt="">
            </div>
            <span class="box-row">
            </span>
        </div>
    </section>
    <?php get_template_part( 'partials/stamp' ); ?>
    <?php get_template_part( 'partials/contact' ); ?>
</main>
<?php get_footer(); ?>