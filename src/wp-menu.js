$(function() {
	var dropdownCount = 1;

	$("li.menu-item-has-children > a").each(function() {

		$(this).attr('href',"#");
		$(this).attr('role','button');
		$(this).attr('data-toggle','dropdown');
		$(this).attr('aria-haspopup','true');
		$(this).attr('aria-expanded','false');

		$(this).attr('id','navbarDropdown' + dropdownCount);

		$(this).siblings('ul.sub-menu').addClass('dropdown-menu');

		$(this).siblings('ul.sub-menu').attr('aria-labelledby', $(this).attr('id'));

		dropdownCount++;
	});
});


$(function() {
	var dropdownCount = 1;

	$("li.page_item_has_children > a").each(function() {

		$(this).attr('href',"#");
		$(this).attr('role','button');
		$(this).attr('data-toggle','dropdown');
		$(this).attr('aria-haspopup','true');
		$(this).attr('aria-expanded','false');

		$(this).attr('id','navbarDropdown' + dropdownCount);

		$(this).siblings('ul.children').addClass('dropdown-menu');

		$(this).siblings('ul.children').attr('aria-labelledby', $(this).attr('id'));

		dropdownCount++;
	});
});
