
<!-- Features -->
<div id="features-wrapper">
    <section id="features" class="container">
        <header>
            <h2><?php echo $this->categoryDetails[0]['name']; ?></h2>
        </header>
        <div class="row">
            <?php foreach($this->recipesByCategory as $value){ ?>
                <div class="3u 12u(mobile)">
                    <a href="<?php echo SITE_ROOT . 'recipe?id=' . $value['id']; ?>" class="avatar-image image">
                        <img src="<?php if($value['image_path'] == null){ echo SITE_ROOT . 'public/images/recipes_images/nophoto.jpg';}else{ echo $value['image_path'];} ?>">
                    </a>
                    <h3><?php echo $value['name']; ?></h3>
                    <p><i class="recipes-icons fa fa-puzzle-piece"></i> <?php echo ' ' . $value['level'] . ' '; ?> <i class="recipes-icons fa fa-clock-o"></i> <?php echo ' ' . $value['time'];  ?></p>
                </div>
            <?php } ?>
        </div>
        <div class="pagination page-number">
            <?php for($x = 1; $x <= $this->pagesNumber; $x++): ?>
                <a href="?id=<?php echo $this->categoryDetails[0]['id'];?>&page=<?php echo $x; ?>&per-page=<?php echo $this->perPage; ?>" <?php if($this->page === $x){ echo 'class="selected"'; } ?> ><?php echo $x; ?></a>
            <?php endfor;?>
        </div>
    </section>
</div>