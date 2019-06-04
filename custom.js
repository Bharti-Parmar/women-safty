$(document).ready(function(){
    $("#dropdown_shop,#dropdown_up").click(function(){
        $("#submenu").slideToggle("fast");
		$("#slide_icon").toggleClass("fa-caret-down");
		$("#slide_icon").toggleClass("fa-caret-up");

    });
});
