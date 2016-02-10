<!-- Features -->
<div id="features-wrapper">
    <section id="features" class="container">
        <div class="row">
            <?php foreach($this->recipesByUser as $value){ ?>
                <div class="3u 12u(mobile)">
                    <a href="<?php echo SITE_ROOT . 'recipe?id=' . $value['id']; ?>" class="avatar-image image">
                        <img src="<?php if($value['image_path'] == null){ echo SITE_ROOT . 'public/images/recipes_images/nophoto.jpg';}else{ echo $value['image_path'];} ?>">
                    </a>
                    <h3><?php echo $value['name']; ?></h3>
                    <p><i class="fa fa-puzzle-piece"></i> <?php echo $value['level']; ?> Czas przygotowania: <?php echo $value['time'];  ?></p>
                </div>
            <?php } ?>
        </div>
        <div class="pagination">
            <?php for($x = 1; $x <= $this->pagesNumber; $x++): ?>
                <a href="?id=<?php echo $this->user['id'];?>&page=<?php echo $x; ?>&per-page=<?php echo $this->perPage; ?>" <?php if($this->page === $x){ echo 'class="selected"'; } ?> ><?php echo $x; ?></a>
            <?php endfor;?>
        </div>
    </section>
</div>