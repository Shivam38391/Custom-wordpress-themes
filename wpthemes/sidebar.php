<?php 
    if ( !  is_active_sidebar( "custom-sidebar" )){
        return;
    }

?>



<aside id='secondary' class="widgets area">

    <h1>side bar header</h1>
    <p>place side bar things</p>

    <?php dynamic_sidebar( 'custom-sidebar' ) ?>

</aside>