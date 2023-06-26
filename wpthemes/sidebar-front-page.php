<?php 
    if ( !  is_active_sidebar( "front-page" )){
        return;
    }

?>



<aside id='secondary' class="widgets area">

 

    <?php dynamic_sidebar( 'front-page' ) ?>

</aside>