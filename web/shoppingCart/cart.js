$(document).ready(function () {

    $(".largeGrid").click(function () {
        $(this).find('a').addClass('active');
        $('.smallGrid a').removeClass('active');

        $('.product').addClass('large').each(function () {});
        setTimeout(function () {
            $('.info-large').show();
        }, 200);
        setTimeout(function () {

            $('.view_gallery').trigger("click");
        }, 400);

        return false;
    });

    $(".smallGrid").click(function () {
        $(this).find('a').addClass('active');
        $('.largeGrid a').removeClass('active');

        $('div.product').removeClass('large');
        $(".make3D").removeClass('animate');
        $('.info-large').fadeOut("fast");
        setTimeout(function () {
            $('div.flip-back').trigger("click");
        }, 400);
        return false;
    });

    $(".smallGrid").click(function () {
        $('.product').removeClass('large');
        return false;
    });

    $('.colors-large a').click(function () {
        return false;
    });


    $('.product').each(function (i, el) {

        // Lift card and show stats on Mouseover
        $(el).find('.make3D').hover(function () {
            $(this).parent().css('z-index', "20");
            $(this).addClass('animate');
            $(this).find('div.carouselNext, div.carouselPrev').addClass('visible');
        }, function () {
            $(this).removeClass('animate');
            $(this).parent().css('z-index', "1");
            $(this).find('div.carouselNext, div.carouselPrev').removeClass('visible');
        });

        
    });

    

    $('.add_to_cart').click(function () {
        var pQuant = 0;
        var productCard = $(this).parent();
        var position = productCard.offset();
        var productImage = $(productCard).find('img').get(0).src;
        var productName = $(productCard).find('.product_name').get(0).innerHTML;
        var productPrice = $(productCard).find('.product_price').get(0).innerHTML;

        $("body").append('<div class="floating-cart"></div>');

        var cart = $('div.floating-cart');
        productCard.clone().appendTo(cart);
        // $(cart).css({
        //     'top': position.top + 'px',
        //     "left": position.left + 'px'
        // }).fadeIn("slow").addClass('moveToCart');
        // setTimeout(function () {
        //     $("body").addClass("MakeFloatingCart");
        // }, 800);
        
        
        setTimeout(function () {
            $('div.floating-cart').remove();
            $("body").removeClass("MakeFloatingCart");
            
            var cartItem = "<div class='cart-item'><div class='img-wrap'><img src='" + productImage + "' alt='' /></div><span>" + productName + "</span><strong>" + productPrice + "</strong><div class='cart-item-border'></div><div class='delete-item'></div></div>";
        
            $("#cart .empty").hide();
            $("#cart").append(cartItem);
            $("#checkout").fadeIn(500);

            $("#cart .cart-item").last()
                .addClass("flash")
                .find(".delete-item").click(function () {
                    $(this).parent().fadeOut(300, function () {
                        $(this).remove();

                        if ($("#cart .cart-item").size() == 0) {
                            $("#cart .empty").fadeIn(500);
                            $("#checkout").fadeOut(500);
                        }
                    })
                });
            setTimeout(function () {
                $("#cart .cart-item").last().removeClass("flash");
            }, 10);

        }, 1000);
    });
});