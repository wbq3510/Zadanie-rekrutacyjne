<?php
/*
Template name: Home
*/
get_header(); ?>
<div class="vue-app">
    <index id="<?php echo get_option('page_on_front');?>"></index>
</div>

<?php get_footer();