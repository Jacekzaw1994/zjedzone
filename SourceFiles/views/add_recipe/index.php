<div class="container">
    <div class="row">
        <div class="content">
            <div class="col-md-12">
                <h1>Dodaj przepis</h1>
            </div>
            <form action="" method="post">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="sel1"><h3><i class="glyphicon glyphicon-cutlery"></i> Kategoria:</h3></label>
                        <select class="form-control" id="sel1">
                            <option>Zupy</option>
                            <option>Desery</option>
                            <option>Dania rybne</option>
                            <option>Przystawki</option>
                        </select>
                    </div>
                    <div class="dish-name">
                        <h3>Nazwa dania:</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nazwa">
                        </div>
                    </div>
                    <div class="dish-time-prepare">
                        <h3><i class="fa fa-clock-o"></i>Czas przygotowania:</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Minuty">
                        </div>
                    </div>
                    <div class="dish-level">
                        <label for="sel1"><h3><i class="fa fa-thumbs-up"></i>Poziom trudności:</h3></label>
                        <select class="form-control" id="sel1">
                            <option>Łatwe</option>
                            <option>Średnie</option>
                            <option>Dasz radę</option>
                        </select>
                    </div>
                </div>
                    <div class="col-md-4">
                        <h3>Składniki:</h3>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Składnik">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Dodaj</button>
                          </span>
                        </div>
                        <div class="list-of-ingredients">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3>Zdjecie</h3>
                    </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <h3>Sposób przygotowania:</h3>
                            <textarea class="form-control" rows="5" id="recipe"></textarea>
                        </div>
                    </div>
                </div>
                <div class="input-group-btn center-block">
                    <button type="submit" class="btn btn-default">Dodaj</button>
                </div>
            </div>
        </div>
    </div>
</div>