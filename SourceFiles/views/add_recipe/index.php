<!-- Features -->
<div id="features-wrapper">
    <section id="features" class="container">
        <header>
            <h2> <strong>Dodaj własny przepis</strong></h2>
        </header>
        <section>
            <form method="post" action="add_recipe/run">
                <div class="row">
                        <div class="4u 12u(mobile)">
                            <div class="row 50%">
                                <div class="12u 12u(mobile)">
                                    <p>Kategoria</p>
                                    <select id="sel1" name="category" class="category-add-recipe">
                                        <option>Zupy</option>
                                        <option>Desery</option>
                                        <option>Dania rybne</option>
                                        <option>Przystawki</option>
                                        <option>Ciasta</option>
                                        <option>Drinki</option>
                                    </select>
                                </div>
                                <div class="12u 12u(mobile)">
                                    <p>Nazwa dania</p>
                                    <input class="recipe-name" name="name" required placeholder="Nazwa" type="text">
                                </div>
                                <div class="12u 12u(mobile)">
                                    <p>Czas przygotowania</p>
                                    <select id="sel1" name="time" class="category-add-recipe" required="required">
                                        <option>do 15 min.</option>
                                        <option>15 do 30 min.</option>
                                        <option>30 do 45 min.</option>
                                        <option>45 do 60 min.</option>
                                        <option>1 do 1,5 godz.</option>
                                        <option>1,5 do 2 godz.</option>
                                        <option>powyżej 2 godz.</option>
                                    </select>
                                </div>
                                <div class="12u 12u(mobile)">
                                    <p>Poziom trudności</p>
                                    <select id="sel1" name="level" class="category-add-recipe" required="required">
                                        <option>łatwy</option>
                                        <option>średni</option>
                                        <option>dasz radę</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="8u 12u(mobile)">
                            <!-- Feature -->
                                    <div class="row 50%">
                                        <div class="6u 12u(mobile)">
                                            <p>Składniki</p>
                                            <input class="ingredient-add-recipe" id="ingredient" name="ingredient" placeholder="Składnik" type="text" />
                                        </div>
                                        <div class="6u 12u(mobile)">
                                            <p>Zdjecie</p>
                                            <input class="picture-add-recipe" name="password" placeholder="Hasło" type="password" />
                                        </div>
                                    </div>
                                    <div class="row 50%">
                                        <div class="12u">
                                            <p>Opis przygotowania</p>
                                            <textarea name="recipe" required placeholder="Opis przygotowania"></textarea>
                                        </div>
                                    </div>
                                    <div class="row 50%">
                                        <div class="12u">
                                            <button type="submit" href="#" class="form-button-submit button ">Dodaj przepis</button>
                                        </div>
                                    </div>
                        </div>
                </div>
            </form>
        </section>
    </section>
</div>