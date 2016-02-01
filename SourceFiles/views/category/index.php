
<!-- Features -->
<div id="features-wrapper">
    <section id="features" class="container">
        <header>
            <h2>Kategoria</h2>
        </header>
        <div class="row">
            <div class="2u 12u(mobile)">

            </div>

            <div class="8u 12u(mobile)">
                <ul class="recipe-list">
                    <?php foreach($this->recipesByCategory as $value){ ?>
                    <li>
                        <div class="row one-recipe">
                            <div class="2u 12u(mobile)">
                                <a href="<?php echo SITE_ROOT . '/recipe?id=' . $value['id']; ?>">
                                    <img src="<?php if($value['image_path'] == null){ echo SITE_ROOT . 'public/images/recipes_images/nophoto.jpg';}else{ echo $value['image_path'];} ?>">
                                </a>
                            </div>
                            <div class="10u 12u(mobile)">
                                <div class="row">
                                    <div class="3u 12u(mobile)">
                                        <h3><?php echo $value['name']; ?></h3>
                                    </div>
                                    <div class="9u 12u(mobile)">
                                        <p><i class="fa fa-puzzle-piece"></i> <?php echo $value['level']; ?> Czas przygotowania: <?php echo $value['time'];  ?></p>
                                    </div>
                                </div>
                                <p><?php echo $value['short_description']; ?></p>
                            </div>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="2u 12u(mobile)">

            </div>
        </div>
    </section>
</div>