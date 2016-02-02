$(document).ready(function(){
    var countId = 0;
    $("#ingredient-form").submit(function() {
        var name = $("#ingredient-name").val();
        var quantity = $("#ingredient-quantity").val();
        var category = $("#ingredient-category").find(':selected').text();
        var category_id = $("#ingredient-category").find(':selected').val();
        var type = $("#ingredient-type").find(':selected').text();
        $('#list-ingredients').append('<li id="ingredient-' + countId + '" > ' + name + ' ' + quantity + ' ' + type + ' ' + '<a class="fa fa-times" href="#ingredient-' + countId + '"></a></li>');
        $('#recipe-form').append('<div id="ingredient-' + countId + '-input"><input type="hidden" name="ingredients[' + countId + '][name]" value="' + name +'">' +
        '<input type="hidden" name="ingredients[' + countId + '][category]" value="' + category_id +'">' +
        '<input type="hidden" name="ingredients[' + countId + '][quantity]" value="' + quantity +'">' +
        '<input type="hidden" name="ingredients[' + countId + '][type]" value="' + type +'"></div>');

        countId++;
        return false;
    });
});