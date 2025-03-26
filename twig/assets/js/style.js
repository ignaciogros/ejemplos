var myTheme = {
    init : function(){
        // Box togglers
        $('.box-head').css("cursor","pointer").on('click', function(e){
            $(this).parents(".box").toggleClass("minimized");
        });
        if (!$("body").hasClass("exe-web-site")) return;
        // Menu toggler
        $('#sidebarTogger').on('click', function () {
            if (myTheme.isLowRes()) {
                $("#exe-client-search").hide();
                if ($('body').hasClass('sidebar-off')) {
                    $('body').removeClass('sidebar-off');
                } else {
                    if ($("#sidebar").isInViewport()) {
                        $('body').addClass('sidebar-off');
                    }
                }
                window.scroll(0, 0);
            } else {
                $('body').toggleClass('sidebar-off');
            }
        });
        // Search bar toggler
        $("#searchBarTogger").on("click",function(){
            var bar = $("#exe-client-search");
            if (bar.is(":visible")) {
                bar.hide();
            } else {
                if (myTheme.isLowRes()) {
                    $('body').addClass('sidebar-off');
                }
                bar.show();
                $("#exe-client-search-text").focus();
                window.scroll(0, 0);
            }
        });
        // Nav min-height
        $(window).on("resize scroll click",function(){
            $('#sidebar').css('min-height', $(document).height()+"px");
        });
        $('#sidebar').css('min-height', $(document).height()+"px");
        // Fixed navigation
        myTheme.checkNav();
        $(window).bind('scroll resize', function () {
            myTheme.checkNav();
        });
        // To review (special links)
        $("#sidebar a").each(function(i){
            var t = $(this).text().trim();
            if (t.indexOf("- ")==0 && t.indexOf(" -")==(t.length-2) && $("li",this).length==0) {
                t = t.substring(2);
                t = t.substring(0,t.length-2);
                $(this).text(t).addClass("package-link");
            }
        });
    },
    isLowRes : function(){
        return $("#sidebar").css("float")=="none";
    },
    checkNav : function(){
        // To do now
        // return false;
        var nav = $("#sidebar-nav");
        var navH = nav.height();
        navH = navH + 50;
        if (navH < $(window).height()) nav.addClass("fixed");
        else nav.removeClass("fixed");
    }
}
$(function(){
    myTheme.init();
});
$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};