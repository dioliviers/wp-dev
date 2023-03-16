<?php 
    
?>

<form role="search" method="get" id="searchform" class="searchform" action=" <?php echo esc_url(home_url( '/' ) ) ?>"><!-- faz a esc_url
fazer as buscas através da home -->
    <div>
        <label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s"> <!-- get_search_query faz uma query das informações
    disponiveis no site -->
        <input type="submit" id="searchsubmit" value="Search">
        <input type = "hidden" value= "post" name= "post_type" id="post_type" />
    </div>
</form>