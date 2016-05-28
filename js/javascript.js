$(document).ready(function(){
    $(function() {
        $('.arrow a').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    $(function() {
        //Simple filter controls
        $('.simplefilter li').click(function() {
            $('.simplefilter li').removeClass('active');
            $(this).addClass('active');
        });
        //Multifilter controls
        $('.multifilter li').click(function() {
            $(this).toggleClass('active');
        });
        //Shuffle control
        $('.shuffle-btn').click(function() {
            $('.sort-btn').removeClass('active');
        });
        //Sort controls
        $('.sort-btn').click(function() {
            $('.sort-btn').removeClass('active');
            $(this).addClass('active');
        });
    });

    //FORMATIONS

    $("#losange-ind_graph").click(function(){
        $("#li-ind_graph").trigger("click");
    });

    $("#a-ind").click(function(){
        $("#li-ind_graph").trigger("click");
        $("#a-ind-2").trigger("click");
    });

    $("#a-prod-impr").click(function(){
        $("#li-ind_graph").trigger("click");
        $("#a-prod-impr-2").trigger("click");
    });

    $("#a-prod-graph").click(function(){
        $("#li-ind_graph").trigger("click");
        $("#a-prod-graph-2").trigger("click");
    });

    $("#losange-com_graph").click(function(){
        $("#li-com_graph").trigger("click");
    });

    $("#a-e-impr").click(function(){
        $("#li-com_graph").trigger("click");
        $("#a-e-impr-2").trigger("click");
    });

    $("#a-e-graph").click(function(){
        $("#li-com_graph").trigger("click");
        $("#a-e-graph-2").trigger("click");
    });

    $(".a-artisanat").click(function(){
        $("#li-artisanat").trigger("click");
    });

    $(".a-design").click(function(){
        $("#li-design").trigger("click");
    });


});






