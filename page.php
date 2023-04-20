<?php
get_header();
?>
<div id="main">

<!-- Section -->
  <section class="wrapper">
    <div class="inner">
      <header class="align-center">
        <?php
        if(have_posts()):the_post();
          ?><h1><?php the_title()?></h1><?php
          ?><p><?php the_content()?></p><?php
          
        endif;
        ?>
      </header>
      
    </div>
  </section>

<!-- Section -->
  
  <section class="wrapper style1">
    <div class="inner">
      
    </div>
  </section>

</div>
<?php
get_footer();
?>