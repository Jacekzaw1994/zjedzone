<!-- Features -->
				<div id="features-wrapper">
					<section id="features" class="container">
						<header>
							<h2>Nazwa przepisu: <?php echo $this->fullRecipe['name']; ?></h2>
                            <p>Dodany przez:  <img class="avatar-image" src="http://www.gravatar.com/avatar/<?php echo md5($this->fullRecipe['email']);?>?s=30&d=retro"><span><strong><?php echo $this->fullRecipe['username'];?></strong></span></p>
						</header>
						<div class="row">
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="<?php if($this->fullRecipe['image_path'] == null){ echo SITE_ROOT . 'public/images/recipes_images/nophoto.jpg';}else{ echo $this->fullRecipe['image_path'];} ?>" alt="" /></a>
										<header>
											<h3>Składniki:</h3>

										</header>
                                        <ul>
                                            <?php foreach($this->fullRecipe['ingredients'] as $value){ ?>
                                            <li><i class="fa fa-check"></i> <?php echo $value['name'] . ':  ' . $value['quantity'] . ' ' . $value['type'];?></li>
                                            <?php } ?>
                                        </ul>
									</section>

							</div>
                            <div class="8u 12u(mobile)">
                                <div class="row 50%">
                                    <div class="6u 12u(mobile)">

                                        <!-- Feature -->
                                            <section>
                                                <header>
                                                    <h3>Czas przygotowania: <?php echo $this->fullRecipe['time']; ?></h3>
                                                </header>

                                            </section>

                                    </div>
                                    <div class="6u 12u(mobile)">

                                        <!-- Feature -->
                                            <section>
                                                <header>
                                                    <h3>Poziom trudnośći: <?php echo $this->fullRecipe['level']; ?></h3>
                                                </header>

                                            </section>
                                    </div>
                                </div>
                                <div class="row 50%">
                                    <div class="recipe-prescrition">
                                        <p><?php echo $this->fullRecipe['description']; ?></p>
                                    </div>
                                </div>
                            </div>
						</div>
					</section>
				</div>