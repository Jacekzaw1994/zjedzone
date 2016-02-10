<!-- Features -->
				<div id="features-wrapper">
					<section id="features" class="container">
                        <h2><?php echo $this->fullRecipe['name']; ?></h2>
                        <div class="row user-rate-recipe">
                            <p>Dodany przez:  <img class="avatar-image user-avatar recipe-page-avatar" src="http://www.gravatar.com/avatar/<?php echo md5($this->fullRecipe['email']);?>?s=30&d=retro"><span><strong><?php echo $this->fullRecipe['username'];?></strong></span></p>
                            <ul class="list-inline recipe-rate" >
                                <a href="#"><i class="first-star fa fa-star"></i></a>
                                <a href="#"><i class="second-star fa fa-star"></i></a>
                                <a href="#"><i class="third-star fa fa-star"></i></a>
                                <a href="#"><i class="fourth-star fa fa-star"></i></a>
                                <a href="#"><i class="fifth-star fa fa-star"></i></a>
                            </ul>
                            <?php if($this->isFavorite){ ?>
                                <p>Ten przepis jest polubiony przez Ciebie.</p>
                            <?php }else{ ?>
                                <a class="favorites-btn" href="recipe/addToFavorites?id=<?php echo $this->recipeId; ?>" >Dodaj do ulubionych</a>
                            <?php } ?>
                        </div>

						<div class="row">
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a href="#" class="image avatar-image"><img src="<?php if($this->fullRecipe['image_path'] == null){ echo SITE_ROOT . 'public/images/recipes_images/nophoto.jpg';}else{ echo $this->fullRecipe['image_path'];} ?>" alt="" /></a>
									</section>

							</div>
                            <div class="5u 12u(mobile)">

                                    <header>
                                        <h3><i class="fa fa-clock-o"></i> <?php echo ' ' . $this->fullRecipe['time'] . ' '; ?> <i class="fa fa-puzzle-piece"></i> <?php echo ' ' . $this->fullRecipe['level']; ?></h3>
                                    </header>
                                <div class="recipe-prescrition">
                                    <p><?php echo $this->fullRecipe['description']; ?></p>
                                </div>
                            </div>
                            <div class="3u 12u(mobile)">
                                <header>
                                    <h3>Składniki:</h3>
                                </header>
                                <ul class="list-of-ingredients">
                                    <?php foreach($this->fullRecipe['ingredients'] as $value){ ?>
                                        <li><i class="fa fa-check"></i> <?php echo $value['name'] . ':  ' . $value['quantity'] . ' ' . $value['type'];?></li>
                                    <?php } ?>
                                </ul>
                            </div>
						</div>
					</section>
				</div>