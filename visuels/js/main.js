$(function() {

    $('ul.menu li').eq(0).find("li").each(function(index, element){
        var section = $(element).data("section"),
        url = $(element).text();

        $('#'+section).prop("data-url", url);

        if (url == "") {
            $('#'+section).hide();
        }
        else {
            $('#'+section).show();
        }
    });

    var desktop_url = $('#desktop').prop("data-url");
    $('#webframe').prop("src", desktop_url);


    var menu_height = $("#menu").css("top",-$("#menu").height());

    $("#device-screen").on("click", "li" ,function() {

        $("#device-screen li").removeClass("active");
        $(this).addClass("active");

        DeviceID = $(this).attr("id");
        url = $(this).prop("data-url");

        $('html,body').animate({scrollTop: 0},300);
        
        $('#webframe').fadeOut(250, function() {
            $("#device").removeClass().addClass(DeviceID);
            $(this).attr('src', url);

            setTimeout(function() {
                $('#webframe').fadeIn(250);
            }, 400);
        });
        
        if (DeviceID == "desktop") {
            $('body').css("overflow","hidden");
        }
        else {
            $('body').css("overflow","auto");
        }
    });

    $('ul.menu > li').click(function() {
        $('ul.menu > li').removeClass("active");
        $(this).addClass("active").find("li").each(function(index, element){
            var section = $(element).data("section"),
            url = $(element).text();
            
            $('#'+section).prop("data-url", url);

            if (url == "") {
                $('#'+section).fadeOut();
            }
            else {
                $('#'+section).fadeIn();
            }


            $('#webframe').fadeOut(250, function() {
                var activeLink = $("#device-screen li.active").prop("data-url");
                $('#webframe').attr("src", activeLink);
                setTimeout(function() {
                    $('#webframe').fadeIn(250);
                }, 400);
            });
        });
    });


    $('#trigger-menu').click(function(e) {
        e.preventDefault();
        $('#menu').toggleClass("open");
    })
});


$(function() {
    var calcHeight = function() {
        var headerDimensions = 50;
        var selector = '#device';
        if($('#device-screen').hasClass('closed')) {
            $(selector).height($(window).height());
        } else {
            $(selector).height($(window).height() - headerDimensions);
        }
    }
    $(document).ready(function() {
        calcHeight();
    });
    $(window).resize(function() {
        calcHeight();
    }).load(function() {
        calcHeight();
    });

});