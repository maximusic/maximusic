<h3>Categories</h3>
<ul class="slide">
    <?php foreach ($category as $category): ?>
        <li><a href="#" title="<?php echo $category->title; ?>"><?php echo $category->title; ?></a></li>
    <?php endforeach; ?>
</ul>