$(document).ready(function(){
    var ingredients = new Array();
    $('#ingredient-search').keyup(function(){
        var name = $('#ingredient-search').val();
        var ingredientString;
        $.ajax({
            type: "POST",
            url: "search/searchByIngredients",
            data: { ingredient: name },
            success: function(res){
                $('#found-ingredient-list').html(res);
                $('#found-ingredient-list').find('div').click(function(){
                    var name = $(this).text();
                    if(ingredients.indexOf(name) < 0){
                        ingredients.push(name);
                        ingredientString = ingredients.join('|');
                        $('#ingredient-tags').append('<strong class="ingr-tag">' + name + '</strong>');
                        $('#find-ingredient').val(ingredientString);
                    }
                });
            }
        });

    });

    $("#search-button").click(function(){
        $.ajax({
            type: "POST",
            url: "search/run",
            data: {ingredients: ingredients.join('|')},
            success: function(res) {
                console.dir(res);
                for(var value in res){
                    $('#search-result').append('<div class="3u 12u(mobile)">' +
                                                    '<a href="#" class="avatar-image image"><img class="img" src="' +  res[value].image_path + '"></a>' +
                                                    '<p>' + res[value].name + res[value].level + res[value].time + res[value].user_id +'</p>' +
                                                '</div>');
                }
            }
        });
        return false;
    });
});