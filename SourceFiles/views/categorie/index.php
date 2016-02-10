<!-- Features -->
<div id="features-wrapper">
    <section id="features" class="container">
        <header>
            <h2>Wybierz kategorie</h2>
        </header>
        <div class="row">
                    <?php foreach($this->categories as $value){ ?>
                            <div class="4u 12u(mobile)">
                                <a href="<?php echo SITE_ROOT . 'category?id=' . $value['id']; ?>">
                                    <img src="<?php echo SITE_ROOT . 'public/images/categorie_icons/' . $value['id'] . '.png'; ?>" class="avatar-image image" alt="<?php echo $value['name'] . ' image'; ?>">
                                </a>
                                <h3 class="recipes-categories-names"><?php echo $value['name']; ?></h3>
                            </div>
                    <?php } ?>
        </div>
    </section>
</div>