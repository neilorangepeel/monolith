<ul class="categoryList">
    <li><a href="#" class="categoryFilter active" data-rel="all-cat">All</a></l1>
    <?php
    $exclude = get_cat_id('blog');
    $args    = array(
                'hide_empty' => 1,
                'exclude' => $exclude
    );
    $categories = get_categories($args);
    foreach($categories as $category) { 
        echo '<li><a href="#" class="categoryFilter" data-rel="'.$category->slug.'-cat'.'">'.$category->slug.'</a></li>';
        } 
    ?>
</ul>