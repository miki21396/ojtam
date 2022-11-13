<?php get_header(); ?>

<p class="maintitle">Latest Articles</p>
<div class="contentss">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>
            <div class="content-hover">
                <div class="content">
                    <img src="<?php the_post_thumbnail_url(); ?>">
                    <div class="texts">
                        <p class="day"><?php the_date(); ?></p>
                        <p class="title"><?php the_title(); ?></p>
                        <p class="more"><a href="" class="line"><span class="readmore" href="http://">READ MORE</p>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
    else :
        ?>

<!-- コメントアウトするとページ上にー－＞が表示される -->

        <div class="contentss">
            <div class="content-hover">
                <div class="content">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/post_img_1.png">
                    <div class="texts">
                        <p class="day">2018/5/20</p>
                        <p class="title">unknown title</p>
                        <p class="more"><a href="" class="line"><span class="readmore" href="http://">READ MORE</p>
                        </span>
                        </a>
                    </div>
                </div>

            <?php endif; ?>

            </div>

            <?php get_footer(); ?>
