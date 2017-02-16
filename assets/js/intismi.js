var CURRENT_URL = window.location.href.split("?")[0],
    $BODY = $("body"),
    $MENU_TOGGLE = $("#menu_toggle"),
    $SIDEBAR_MENU = $("#sidebar-menu"),
    $SIDEBAR_FOOTER = $(".sidebar-footer"),
    $LEFT_COL = $(".left_col"),
    $RIGHT_COL = $(".right_col"),
    $NAV_MENU = $(".nav_menu"),
    $FOOTER = $("footer");

  $(document).ready(function() {
      var e = function() {
          $RIGHT_COL.css("min-height", $(window).height());
          var e = $BODY.outerHeight(),
              t = $BODY.hasClass("footer_fixed") ? 0 : $FOOTER.height(),
              n = $LEFT_COL.eq(1).height() + $SIDEBAR_FOOTER.height(),
              i = n > e ? n : e;
          i -= $NAV_MENU.height() + t, $RIGHT_COL.css("min-height", i)
      };
      $SIDEBAR_MENU.find("a").on("click", function(t) {
          var n = $(this).parent();
          n.is(".active") ? (n.removeClass("active active-sm"), $("ul:first", n).slideUp(function() {
              e()
          })) : (n.parent().is(".child_menu") || ($SIDEBAR_MENU.find("li").removeClass("active active-sm"), $SIDEBAR_MENU.find("li ul").slideUp()), n.addClass("active"), $("ul:first", n).slideDown(function() {
              e()
          }))
      }),
      $MENU_TOGGLE.on("click", function() {
          $BODY.hasClass("nav-md") ? ($SIDEBAR_MENU.find("li.active ul").hide(), $SIDEBAR_MENU.find("li.active").addClass("active-sm").removeClass("active")) : ($SIDEBAR_MENU.find("li.active-sm ul").show(), $SIDEBAR_MENU.find("li.active-sm").addClass("active").removeClass("active-sm")), $BODY.toggleClass("nav-md nav-sm"), e()
      }),
      $SIDEBAR_MENU.find('a[href="' + CURRENT_URL + '"]').parent("li").addClass("active"), $SIDEBAR_MENU.find("a").filter(function() {
          return this.href == CURRENT_URL
      }).parent("li").addClass("active").parents("ul").parent().addClass("active");
});
