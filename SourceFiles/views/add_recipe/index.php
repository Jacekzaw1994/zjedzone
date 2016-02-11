<!-- Main -->
<div id="main-wrapper">
    <div id="main" class="container">
        <div class="row">

            <!-- Content -->
            <div id="content" class="7u 12u(mobile)">

                <!-- Post -->
                <article class="box post">
                    <header>
                        <h2><a href="#">Dodaj Własny <strong>Przepis.</strong></a></h2>
                    </header>
                    <form id="recipe-form"  method="post" action="add_recipe/run" enctype="multipart/form-data">
                        <ul>
                            <li>Nazwa: <input class="recipe-name" name="name" required placeholder="Nazwa" type="text"></li>
                            <li>Kategoria:
                                <select id="sel1" name="category" class="category-add-recipe">
                                    <option value="1">Dania główne</option>
                                    <option value="3">Zupy</option>
                                    <option value="4">Desery</option>
                                    <option value="5">Przystawki</option>
                                    <option value="6">Dania rybne</option>
                                    <option value="7">Ciast</option>
                                </select>
                            </li>
                            <li>Czas przygotowania:
                                <select id="sel1" name="time" class="category-add-recipe" required="required">
                                    <option>do 15 min.</option>
                                    <option>15 do 30 min.</option>
                                    <option>30 do 45 min.</option>
                                    <option>45 do 60 min.</option>
                                    <option>1 do 1,5 godz.</option>
                                    <option>1,5 do 2 godz.</option>
                                    <option>powyżej 2 godz.</option>
                                </select>
                            </li>
                            <li>Poziom trudnośći:
                                <select name="level" class="category-add-recipe" required="required">
                                    <option>łatwy</option>
                                    <option>średni</option>
                                    <option>dasz radę</option>
                                </select>
                            </li>
                            <li>Zdjecie:
                                <input type="file" class="image-add-recipe" name="image">
                            </li>
                            <li>Opis przygotowania:
                                <textarea name="recipe" required placeholder="Opis przygotowania"></textarea>
                            </li>
                            <li><button type="submit" href="#" class="add-recipe-btn form-button-submit button">Dodaj Przepis</button></li>
                        </ul>
                    </form>
                    <header>
                        <h2><a href="#"><strong>Składniki </strong></a></h2>
                    </header>
                    <form action="#" method="post" id="ingredient-form">
                        <div class="row">
                            <div class="3u 12u(mobile)">
                                <input id="ingredient-name" class="ingredient-add-recipe" required name="ingredient" placeholder="Składnik" type="text" />
                            </div>
                            <div class="3u 12u(mobile)">
                                <select id="ingredient-category" name="category" class="category-add-recipe" required="required">
                                    <option value="1">nabiał i jaja</option>
                                    <option value="2">mięso i ryby</option>
                                    <option value="3">tłuszcze</option>
                                    <option value="4">produkty zbożowe</option>
                                    <option value="5">warzywa i owoce</option>
                                    <option value="6">orzechy i nasiona</option>
                                    <option value="7">dania gotowe</option>
                                    <option value="8">napoje i słodycze</option>
                                    <option value="9">fast food</option>
                                    <option value="11">przyprawy</option>
                                    <option value="10">inne</option>
                                </select>
                            </div>
                            <div class="2u 12u(mobile)">
                                <input id="ingredient-quantity" class="ingredient-add-recipe" required name="ingredient" placeholder="ilość" type="text" />
                            </div>
                            <div class="2u 12u(mobile)">
                                <select id="ingredient-type" name="type" class="category-add-recipe">
                                    <option>g.</option>
                                    <option>ml.</option>
                                    <option>szt.</option>
                                    <option>szczypta</option>
                                </select>
                            </div>
                            <div class="hidden-inputs">

                            </div>
                            <div  class="1u 12(mobile)">
                                <button type="submit" href="#" class="form-button-submit button add-ingredient-button">Dodaj</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div>
                            <p>Lista składników:</p>
                            <ul id="list-ingredients">

                            </ul>
                        </div>
                    </div>
                </article>

            </div>

            <div class="1u 12u(mobile)">

            </div>

            <!-- Sidebar -->
            <div id="sidebar" class="4u 12u(mobile)">

                <!-- Excerpts -->
                <section>
                    <ul class="divided">
                        <li>

                            <!-- Excerpt -->
                            <article class="box excerpt">
                                <header>
                                    <h3><a href="#">Jak dodać przepis</a></h3>
                                </header>
                                <ul class="instruction">
                                    <li><i class="fa fa-check"></i><strong>Nazwa:</strong> jest to pole na wpisanie tytułu przepisu, np. Kurczak z cynamonem.</li>
                                    <li><i class="fa fa-check"></i><strong>Kategoria:</strong> wybierz z listy kategorię najlepiej pasującą do dodawanego przepisu.</li>
                                    <li><i class="fa fa-check"></i><strong>Czas przygotowania:</strong> podaj łączny czas niezbędny do przygotowania potrawy, uwzględnij czynności przygotowawcze, ale również czas "leżakowania", np. marynowania, namaczania, etc.</li>
                                    <li><i class="fa fa-check"></i><strong>Poziom trudnośći:</strong> podaj poziom zaawansowania podczas przygotowania przepisu</li>
                                    <li><i class="fa fa-check"></i><strong>Zdjęcie:</strong> dodaj jedno lub więcej zdjęć gotowej potrawy. Pierwsze zdjęcie zostanie ustawione jako główny obrazek przepisu</li>
                                    <li><i class="fa fa-check"></i><strong>Opis przygotowania:</strong>opisz jak przygotować danie z podanych składników, opis wykonania możesz podzielić na kroki co pomoże w wykonaniu dania w dobrej kolejności</li>
                                    <li><i class="fa fa-check"></i><strong>Składniki: </strong>podaj składniki, do każdego składniku należy podać nazwę, kategorie produktu,ilość oraz skalę</li>
                                </ul>
                            </article>

                        </li>
                    </ul>
                </section>

            </div>

        </div>
    </div>
</div>