jQuery(function($) {
  $('.app-header-menu__toggle').on('click', function() {
    $('.app-header-menu').toggleClass('active')
  })

  $('.app-header-menu-nav-more').on('click', function() {
    $(this).parent().next().toggleClass('active')
  })
})