$(document).ready(function() {
    "use strict";

    /*------------- preloader js --------------*/
    // $(window).on('load', function() {
    //     setTimeout(function() {
    //         $('.loader-wraper').fadeOut();
    //     }, 3000);
    // });




    /*------------ showing price using jQuery    options ------------*/
    $('.show-price').click(function(e) {
        e.preventDefault();

        var product = $(this).data('id');
        $('#'+product).find('#exchanges').hide();
        $('#'+product).find('.price-loader').show();
        $.ajax({
            url: "/ticker/"+product,
            type: "get", //send it through get method

            success: function(response) {
                console.log(response);
                var resObj =  JSON.parse(response);
                var MaxVal = Object.keys(resObj).reduce(function(a, b){ return resObj[a] > resObj[b] ? a : b });
                var MinVal = Object.keys(resObj).reduce(function(a, b){ return resObj[a] < resObj[b] ? a : b });

                for (var k in resObj){
                    if (resObj.hasOwnProperty(k)) {
                        $('#'+k+'-'+product).text(resObj[k]);
                    }
                }
                $('#'+MaxVal+'-'+product).css("color", "green");
                $('#'+MinVal+'-'+product).css("color", "red");
                $('#'+product).find('.price-loader').hide();
                $('#'+product).find('#exchanges').show();
            },
            error: function(xhr) {
                //Do Something to handle error
            }
        });
        $('.filter-options').addClass('filter-show');
        $('.filter-options').addClass('filter-show');
    });




});