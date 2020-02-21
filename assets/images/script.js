// JavaScript Document
function numberFormat(num, ext) {
    ext = (!ext) ? '  VNĐ' : ext;
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ext;
}

function textboxChange(tb, f, sb) {
    if (!f) {
        if (tb.value == "") {
            tb.value = sb;
        }
    } else {
        if (tb.value == sb) {
            tb.value = "";
        }
    }
}

function change_alias(alias) {
    var str = alias;
    str = str.toLowerCase();
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ  |ặ|ẳ|ẵ/g, "a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ  |ợ|ở|ỡ/g, "o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
    str = str.replace(/đ/g, "d");
    str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g, "-");
    /* tìm và thay thế các kí tự đặc biệt trong chuỗi sang kí tự - */
    str = str.replace(/-+-/g, "-"); //thay thế 2- thành 1-
    str = str.replace(/^\-+|\-+$/g, "");
    //cắt bỏ ký tự - ở đầu và cuối chuỗi 
    return str;
}

function smoothScrolling() { /*-------------------------------------------------*/
    /* =  smooth scroll in chrome
    	/*-------------------------------------------------*/
    try {
        $.browserSelector();
        // Adds window smooth scroll on chrome.
        if ($("html").hasClass("chrome")) {
            $.smoothScroll();
        }
    } catch (err) {

    }

}

function doEnter(evt) {
    // IE					// Netscape/Firefox/Opera
    var key;
    if (evt.keyCode == 13 || evt.which == 13) {
        onSearch(evt);
    }
}

function onSearch(evt) {

    var keyword = document.getElementById("keyword").value;
    location.href = "tim-kiem.html/keyword=" + change_alias(keyword);
    loadPage(document.location);
}
$(document).ready(function() {

    $("#cssmenu").menumaker({
        title: "Menu",
        format: "multitoggle"
    });
    $(".small-screen").find("ul li").each(function() {
        if ($(this).hasClass("line")) {
            $(this).remove();
        }
        if ($(this).find('a transitionAll').hasClass("icon_menu")) {
            $(this).remove();
        }
    });
})
$(document).ready(function(e) {
    $("#cssmenu > ul > li > a").click(function() {
        $rel = $(this).attr("rel");
        if ($rel != '') {
            $offset = $("#" + $rel).offset().top - $("header").height(); //Loi Undefined TOP : bo them the span vao the a la xong
            $('html, body').animate({ scrollTop: $offset }, 800);
            return false;
        }
    })
    $('.icon_search').click(function() {
        if ($('.box_search').hasClass("abc")) {
            $('.box_search').removeClass("abc");
            $('.box_search').hide();
        } else {
            $('.box_search').addClass("abc");
            $('.box_search').fadeIn();
        }

    })
    $('a.xem_video').click(function() {
        var link_viveo = $(this).attr('href');
        $('body').append('<div class="login-popup"><div class="close-popup"></div><iframe width="700px" height="400px" src="https://www.youtube.com/embed/' + link_viveo + '?rel=0" frameborder="0" allowfullscreen></iframe></div>');
        $('.login-popup').fadeIn(300);

        var chieucao = $('.login-popup').height() / 2;
        var chieurong = $('.login-popup').width() / 2;
        $('.login-popup').css({ 'margin-top': -chieucao, 'margin-left': -chieurong });
        $('body').append('<div id="baophu"></div>');
        $('#baophu').fadeIn(300);

        $('#baophu, .close-popup').click(function() {
            $('#baophu, .login-popup').fadeOut(300, function() {
                $('#baophu').remove();
                $('.login-popup').remove();
            });
        });
        return false;

    });
    /* $(".addtocart").click(function(){
    	$id=$(this).data("id");
    	addtocart1($id,1);
    }) */
    $(".box_carts .close").click(function() {
        $(".box_carts").fadeOut();
    })
});

function addtocart(id, $sl) {
    $.ajax({
        type: 'post',
        url: "gio-hang",
        data: { id: id, sl: $sl, act: 'add' },
        //dataType:'json',
        success: function(data) {
            var kh = $.parseJSON(data);
            $("#cart-number").html(kh.num);
            $(".box_carts").find(".load").html(kh.mes);
            $(".box_carts").fadeIn();
        }



    })
    return false;
}

function addtocart1(id, $sl) {
    $.ajax({
        type: 'post',
        url: "gio-hang",
        data: { id: id, sl: $sl, act: 'add' },
        //dataType:'json',
        success: function(data) {
            $(".source-cart").html(data.num);
            updateCartNum();
            location.href = "gio-hang.html";
        }



    })
    return false;
}

function updateCartNum() {
    $.get("index.php", { ajax: "number" }, function(data) {

        $("#cart-number").html(data);
    })


}


function initAjax(options) {
    var defaults = {
        url: '',
        type: 'post',
        data: null,
        dataType: 'html',
        error: function(e) { console.log(e) },
        success: function() { return false; },
        beforeSend: function() {},
    };

    // Overwrite default options 
    // with user provided ones 
    // and merge them into "options". 
    var options = $.extend({}, defaults, options);
    $.ajax({
        url: options.url,
        data: options.data,
        success: options.success,
        error: options.error,
        type: options.type,
        dataType: options.dataType,

    })


}
$(document).ready(function() {

    $(".owl-spk").owlCarousel({
        loop: true,
        margin: 0,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            800: {
                items: 3,
            },
            1000: {
                items: 4,
            },
            1200: {
                items: 4,
            }
        },
        nav: true,
        autoplay: false,
        navText: true,
        dots: false,
        scrollPerPage: 1,
        slideSpeed: 500
    });
    $(".owltin-left").owlCarousel({
        loop: true,
        margin: 0,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            800: {
                items: 1,
            },
            1000: {
                items: 1,
            },
            1200: {
                items: 1,
            }
        },
        nav: false,
        autoplay: false,
        navText: true,
        dots: true,
        scrollPerPage: 1,
        slideSpeed: 500
    });
    $(".owl-slide").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        nav: true,
        autoplay: false,
        navText: true,
        dots: false,
        scrollPerPage: 1,
        slideSpeed: 500
    });
    $(".owl-tsmb").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        nav: false,
        autoplay: false,
        navText: false,
        dots: true,
        scrollPerPage: 1,
        slideSpeed: 500
    });
    $(".owl-duan").owlCarousel({
        loop: true,
        margin: 0,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            800: {
                items: 3,
            },
            1000: {
                items: 4,
            },
            1200: {
                items: 4,
            }
        },
        nav: false,
        autoplay: false,
        navText: true,
        dots: false,
        scrollPerPage: 1,
        slideSpeed: 500
    });
    $(".video_lq").change(function() {
        var a = "https://www.youtube.com/embed/" + $(this).val();
        return $(".viewvideo iframe").attr("src", a), !1
    });
    $(".item_question").click(function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(".item_question").find(".cont").slideUp();
        } else {
            $(".item_question").removeClass("active");
            $(this).addClass("active");
            $(".item_question").find(".cont").slideUp();
            $(this).find(".cont").slideDown();
        }
    })
    $("#buy-now").click(function() {
        $id = $(this).data("id");
        addtocart1($id, 1);
    })
    $('.giatricl .tab_name').click(function() {
        $rel = $(this).attr("rel");
        $('.giatricl .tab_name').removeClass("active");
        $('.gtcl').removeClass("active");
        $(this).parents("li").addClass("active");
        $($rel).addClass("active");
    })
    $('#select_tab').change(function() {
        $rel = $(this).val();
        $('#info_deals #tab_content li').removeClass("selected");
        $('#info_deals .content_tab').removeClass("selected");
        $(this).parents("li").addClass("selected");
        $($rel).addClass("selected");
    })
    $(".danhmuc li").hover(function() {
        $(this).find("ul").slideDown(500);
    }, function() {
        $(this).find("ul").slideUp(500);
    })
    $(window).scroll(function() {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > 35) {
                $('header').addClass('fixed');
                $("#main").css({ "margin-top": $("header").height() })
            } else {
                $('header').removeClass('fixed');
                $("#main").css({ "margin-top": "0px" })
            }
        })
        /* $('.content_product img,.container_mid .content img').css({"max-width":"100%","height":"auto"}); //responsive img cho bai viet chi tiet */
})