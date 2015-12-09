/**
 * Created by Jacek on 2015-12-01.
 */
$(function(){

    $.get('dashboard/xhrGetListings', function (o) {

        for (var i = 0; i < o.length; i++)
        {
            $('#listInserts').append('<div>' + o[i].text + '<a href="#">X</a></div>');
        }

    }, 'json');

    $('#listInserts');

    $('#randomInsert').submit(function() {
        var url = $(this).attr('action');
        var data = $(this).serialize();

        $.post(url, data, function(o) {
            $('#listInserts').append('<div>' + o + '<a href="#">X</a></div>');
        });

        return false;
    });
});