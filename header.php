<!DOCTYPE html>
<html> 
    <head>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>> 

    
    <header class="sticky-top">
        <div class="container">
        <?php 
            wp_nav_menu(( array(
                'theme_location'  => 'Primary Menu',
                'menu'   => '', 
                'container'  => 'div',  
                'container_class' => 'nav-menu-header',
                'container_id'  => 'nav-menu-header',  
                'menu_class'   => 'menu',
                'menu_id'   => '',  
                'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                'depth' => 0,   
                'walker' => ''  
              ) ));
        ?> 
        </div>
    </header>
    