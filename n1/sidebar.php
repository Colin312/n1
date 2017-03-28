<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();

            get_template_part( 'content', get_post_format() );

        endwhile; endif;
        ?>
    </div>
</div><!-- /.blog-sidebar -->