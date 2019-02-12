/*
* archive - change count position
*/

$(function() {
    $('li.widget_archive > ul > li').each(function() {
        var count = $(this).text().match(/\((\d+)\)/i)[1];
        $(this).html().replace(/\(\d+\)/i,"")
    });
});
