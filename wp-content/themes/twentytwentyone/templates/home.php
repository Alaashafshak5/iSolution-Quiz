<?php
//Template name: Home 

get_header();
?>

<style> 
</style>

<section>
    <div class="container ">
        <h1 class="center">All Projects</h1>
        <div class="flex">
            <?php
            echo do_shortcode('[projects]');
            ?>
        </div>
    </div>
</section>