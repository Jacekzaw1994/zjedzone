<!-- Features -->
<div id="features-wrapper">
    <section id="features" class="container">
        <header>
            <h2>Wybierz kategorie</h2>
        </header>
        <div class="row">
                    <?php $i = 0; ?>
                    <?php foreach($this->categories as $value){ ?>
                        <?php if($i++%3 == 0){ ?>
                            <div class="6u 12u(mobile)">
                                <ul class="category-view-list">
                        <?php } ?>
                                    <li><a href="<?php echo SITE_ROOT . 'category?id=' . $value['id']; ?>"><img src="<?php echo SITE_ROOT . 'public/images/categorie_icons/' . $value['id'] . '.png'; ?>" alt="<?php echo $value['name'] . ' image'; ?>"><strong><?php echo $value['name']; ?></strong></a> </li>
                        <?php if($i%3 == 0){ ?>
                                </ul>
                            </div>
                            <?php } ?>
                    <?php } ?>
        </div>
    </section>
</div>