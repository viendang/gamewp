<?php get_header(); ?>
    <div class="<?php if ( of_get_option('fullwidth') ) {  }else{ ?>container<?php } ?> normal-page">
            <div class="span12">
               <div class="four0four">
                    <p class="huge"> OOPS! 404 <i class="icon-file"></i></p>
                    <?php _e("Page not found, sorry", 'addict') ?> :(
               </div>
            </div>
       </div>
<?php get_footer(); ?>