

<?php wp_footer(); ?>

<script type="text/javascript">

(function($) {     

    $("a[data-toggle]").on("click", function(e) {
        e.preventDefault();  // prevent navigating
        var selector = $(this).data("toggle");  // get corresponding element
        $(selector).toggle(500);
    });

    $('.igniter').tooltip({
         html: true,
        animation: true,
        placement: 'top'
    });

    $("li.page_item_has_children").append("<span>+</span>");

    $('ul#sidebar-menu > li').click(function () {
        selfActive = $(this).hasClass("show")?true:false;
        $(".show").removeClass("show").find("ul").slideUp();
        if (!selfActive){
            $(this).addClass("show").find("ul").slideDown();
        }    
    });

    $("button.resp-menu-button").click(function(){
		$("div.resp-menu-full").toggle();
	});

    $("button.sub-menu-btn").click(function(){
        $("div.sidebar-menu-container").toggle();
    });

    $("button.sub-menu-btn").click(function(){
        $("aside.widget_nav_menu").toggle();
    });

})(jQuery);
  
</script>



<!-- <img src="<?php bloginfo('template_directory'); ?>/img/arrow-up.svg" alt="">
<img src="<?php bloginfo('template_directory'); ?>/img/arrow-down.svg" alt=""> -->

</body>
</html>