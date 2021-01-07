<div class="l-sidebar"> <!-- menu-open付ける -->
    <div class="p-sidebar">
        <a href="#" class="p-sidebar__btn">×</a>
        <div class="p-sidebar__ttl">
            <a href="#">Menu</a>
        </div>
        
        <nav>
            <?php wp_nav_menu( array("menu" => "categorymenu")); ?>
        </nav>
    </div>
</div>