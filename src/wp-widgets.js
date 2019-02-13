/*
* archive - change count position
*/

$(function() {
    $('.widget_archive > ul > li').each(function() {
        // if there is a count of the publications
        if ($(this).text().match(/\((\d+)\)/i) &&
            $(this).text().match(/\((\d+)\)/i).length > 1) {
                // get the count
                var count = $(this).text().match(/\((\d+)\)/i)[1];
                // replace the count with an emty string
                $(this).html($(this).html().replace(/\(\d+\)/i,""));
                // add new child
                $(this).append('<span>'+count+'</span>');
            }
    });
});

/*
* tags cloud - change post count
*/

$(function() {
    $('.tagcloud > a.tag-cloud-link > span.tag-link-count').each(function() {
        $(this).text($(this).text().replace(/[\(\)]/ig, ""));
    });
});

/*
* categories widget - change post count
*/

$(function() {
    /* find all super-categories and mark them */
    $('.widget_categories .cat-item').each(function(){
        if ($(this).children('ul').length > 0) {
            $(this).addClass('with-sub-categories');
        }
    });

    /* wrap post counts with span-tag */
    $('.cat-item').each(function() {
        $(this).html($(this).html().replace(/\((\d+)\)/ig,'<span>$1</span>'));
    });

    /* wrap a-span group with super-category div */
    $('.with-sub-categories').each(function() {
        $(this).children('a, span').wrapAll('<div class="super-category"></div>');
    })
});
