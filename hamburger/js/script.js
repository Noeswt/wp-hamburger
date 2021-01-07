let breakpoint = 960;

jQuery(function($){
    $(function() { 
        $(".p-header__menu").on("click", function() {
            $(".l-sidebar").toggleClass("menu-open");
            $(".l-container").toggleClass("bg-fixed");
            $(".p-bodyFilter").toggleClass("bfilter");
        });
    });

    $(function() { 
        $(".p-sidebar__btn").on("click", function() {
            $(".l-sidebar").toggleClass("menu-open");
            $(".l-container").toggleClass("bg-fixed");
            $(".p-bodyFilter").toggleClass("bfilter");
        });
    });

    $(function() {
        // 画面サイズ変更時、呼ばれる
        $(window).resize(function() {
            let w = $(window).width();  //画面のwidthを取得
            // 画面サイズがタブレット以上になった場合を判定
            if(w > breakpoint) {
                if($(".l-sidebar").hasClass("menu-open")) {
                    $(".l-sidebar").removeClass("menu-open");
                    $(".l-container").removeClass("bg-fixed");
                }
            }
        });
    });
});
