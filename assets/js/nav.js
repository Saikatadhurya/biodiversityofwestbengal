/*$('.navbar .dropdown').hover(function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideToggle(300);
    }, function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideToggle(400);
    });*/

	
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});
