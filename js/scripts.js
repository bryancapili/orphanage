jQuery(function($) {

    $("a#topopUp").click(function() {
            loading(); // loading
            setTimeout(function(){ // then show popup, deley in .5 second
                loadPopup(); // function show popup
            }, 200); // .5 second
    return false;
    });

    $("a#topopUpSearch").click(function() {
        setTimeout(function() {
            loadPopUpSearch();
        }, 200);
        return false;
    });
     
    /* event for close the popup */
    $("div.close").hover(
                    function() {
                        $('span.ecs_tooltip').show();
                    },
                    function () {
                        $('span.ecs_tooltip').hide();
                      }
                );

    $("div.close").click(function() {

        disablePopup();  // function close pop up

    });

    $("a#closeSearch").click(function () {
        disablePopUpSearch();
    });

    $(this).keyup(function(event) {
        if (event.which == 27) { // 27 is 'Ecs' in the keyboard
            disablePopup();  // function close pop up

        }      
    });

    $("div#backgroundPopup").click(function() {
        disablePopup();  // function close pop up
    });

    $('a.livebox').click(function() {
        alert('Hello World!');
    return false;
    });
     /************** start: functions. **************/
    function loading() {
        $("div.loader").show();  
    }
    function closeloading() {
        $("div.loader").fadeOut('normal');  
    }

    var popupStatus = 0; // set value
     
    function loadPopup() {
        if(popupStatus == 0) { // if value is 0, show popup
            closeloading(); // fadeout loading
            $("#popUp").fadeIn(0500); // fadein popup div
            $("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
            $("#backgroundPopup").fadeIn(0001);
            popupStatus = 1; // and set value to 1
        }    
    }

    function loadPopUpSearch() {
        if(popupStatus == 0) {
            $("#popUpSearch").fadeIn(0500);
            popupStatus = 1;
        }
    }

    function disablePopup() {
        if(popupStatus == 1) { // if value is 1, close popup
            $("#popUp").fadeOut("normal");  
            $("#backgroundPopup").fadeOut("normal");  
            popupStatus = 0;  // and set value to 0
        }
    }

    function disablePopUpSearch() {
        if (popupStatus == 1) {
            $("#popUpSearch").fadeOut("normal");
            popupStatus = 0;
        }
    }

    $("#searchQuery").keyup(function() {
        var search = $(this).val();

        $.ajax({
            url: "search.php",
            data:{search:search},
            method: 'GET',
            dataType: "HTML",
            success: function (r) {
                $('#SearchResult').html(r);
            }
        });
    });

    $('#imageHover').click(function() {
        $('#displayHoverImage').show();
    });

    /************** end: functions. **************/
}); // jQuery End
