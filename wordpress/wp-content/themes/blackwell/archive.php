<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 */
?>
<?php get_header(); ?>  
<div class="page_heading_container">
  <div class="container_24">
   <div class="grid_24">
<div class="page_heading_content">
<h1 class="page_title single-heading">
                                <?php if (is_day()) : ?>
                                    <?php printf(DAILY_ARCHIVES, get_the_date()); ?>
                                <?php elseif (is_month()) : ?>
                                    <?php printf(MONTHLY_ARCHIVES, get_the_date('F Y')); ?>
                                <?php elseif (is_year()) : ?>
                                    <?php printf(YEARLY_ARCHIVES, get_the_date('Y')); ?>
                                <?php else : ?>
                                    <?php echo BLOG_ARCHIVES; ?>
                                <?php endif; ?>
                            </h1>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="page-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="page-content">
                <div class="grid_17 alpha"> 
                <div class="content-bar gallery">
                        <?php if (have_posts()): ?>
                        <?php
                            /* Since we called the_post() above, we need to
                             * rewind the loop back to the beginning that way
                             * we can run the loop properly, in full.
                             */
                            rewind_posts();
                            /* Run the loop for the archives page to output the posts.
                             * If you want to overload this in a child theme then include a file
                             * called loop-archives.php and that will be used instead.
                             */
                            get_template_part('loop', 'archive');
                            ?>
                            <div class="clear"></div>
                            <nav id="nav-single"> <span class="nav-previous">
                                    <?php blackwell_pagination(); ?>
                                </span> </nav>
                        <?php endif; ?>
                    </div>
                </div>
				<div class="grid_7 omega">
		<!--Start Sidebar-->
		<?php get_sidebar(); ?>
		<!--End Sidebar-->
		</div> 
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>