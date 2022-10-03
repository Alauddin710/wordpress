<?php get_header(); ?>
  <div id="posts">
    <?php if(have_posts()):
        while(have_posts()):
            the_post();
           
          
        ?>
    <div class="post">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> (<?php the_ID() ?>)</a></h2>
      <p class="date"> <?php the_time('F j, Y'); ?> by <?php the_author(); ?></p>
      <div class="entry">
        <p><img src="images/money.jpg" alt="" height="104" width="512" /></p>
        <?php the_content(); ?>
        <?php //the_excerpt(); ?>
      </div>
      <div class="postmetadata"><span class="tags"></span>
        Category:<?php the_category(); ?>
        <br>
        Tags: <?php the_tags(); ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comments-no"><a href="#">1 Comment</a></span> <br />
      </div>
      <?php comments_template(); ?>
    </div>
    <?php 
    endwhile;
endif;
    ?>
  </div>
 <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
</body>
</html>
