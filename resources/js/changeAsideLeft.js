$(document).ready(function(){
    $("#aside-left__leagues-id").hide();
    $("#aside-left__country-list__country__button-id").click(function(){
        $("#aside-left__countries-id").hide();
        $("#aside-left__leagues-id").show();
    });
    $(".aside-left__back").click(function(){
        $("#aside-left__leagues-id").hide();
        $("#aside-left__countries-id").show();
    });
});
