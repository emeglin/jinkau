<?php
get_header();
?>

<div class="container">
<?php
if ( have_posts() ):
    while (have_posts()):
        the_post();
?>
    <article>
        <div class="row">
                
        </div>
        <div class="row">
            <div class="col-sm article-illustration">

            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div><?php the_content(); ?></div>
            </div>
        </div>
    </article>
<?php
    endwhile;
endif;
?>
</div>

<?php
get_footer();

