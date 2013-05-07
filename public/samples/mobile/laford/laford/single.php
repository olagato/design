<?php get_header(); ?>

<!-- Intro -->
		
<div class="intro">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="padd">
          <p class="biggy">Morbi tincidunt posuere turpis eu laoreet. Nulla facilisi. Aenean at massa leo. Vestibulum in varius arcu. Ut commodo ullamcorper risus nec mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis tortor, et placerat quam posuere posuere.</p>
        </div>
      </div>
    </div>
  </div>
</div>
		
<!-- Intro ends -->
		
<!-- Blog -->
		
<div class="blog">
  <div class="container">
    <div class="row">
      <div class="span8">
        <div class="padd">
          <div class="posts">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <div class="entry">
              <h2><?php the_title(); ?></h2>
                <p class="meta"><i class="icon-calendar"></i> <?php the_time('j F Y'); ?> - <i class="icon-folder-open"></i> <?php the_category(', ') ?> - <i class="icon-user"></i> <?php  the_author(); ?> - <i class="icon-comment"></i> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
                <?php the_content(); ?>
 <p class="meta"><?php the_tags('Tags: ', ', ', '<br />'); ?> </p>
            </div>
            <div id="commentsy" class="comments">
              <?php comments_template(); ?>
            </div>
            <?php endwhile; ?>
            <div class="navigation">  
              <div class="pull-left"><?php previous_post_link() ?></div>
              <div class="pull-right"><?php next_post_link() ?></div>
              <div class="clearfix"></div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
 

<?php get_sidebar(); ?>

<?php get_footer(); ?>