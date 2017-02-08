//Конструктор

$(function(){
    var k = 780/660;

    $(".constructor-main").height($(".constructor-main").width() / k);

    $(window).resize(function(){
        $(".constructor-main").height($(".constructor-main").width() / k);
    });

    associateShapeSize();

    $(".constructor-shape-rounded-rectangle").click(function(e){
        e.preventDefault();
        showShapesWindow();
        $(".constructor-carpet").css({"border-radius": 25, "width" : "80%"});
        $(".constructor-shape").removeClass("active");
        $(this).addClass("active");
        associateShapeSize();
    })

    $(".constructor-shape-rectangle").click(function(e){
        e.preventDefault();
        showShapesWindow();
        $(".constructor-carpet").css({"border-radius": 0, "width" : "80%"});
        $(".constructor-shape").removeClass("active");
        $(this).addClass("active");
        associateShapeSize();
    })

    $(".constructor-shape-rounded-square").click(function(e){
        var height = $(".constructor-carpet").height();
        e.preventDefault();
        showShapesWindow();
        $(".constructor-carpet").css({"border-radius": 25, "width" : height});
        $(".constructor-shape").removeClass("active");
        $(this).addClass("active");
        associateShapeSize();
    })

    $(".constructor-shape-square").click(function(e){
        var height = $(".constructor-carpet").height();
        e.preventDefault();
        showShapesWindow();
        $(".constructor-carpet").css({"border-radius": 0, "width" : height});
        $(".constructor-shape").removeClass("active");
        $(this).addClass("active");
        associateShapeSize();
    })

    $(".constructor-shape-circle").click(function(e){
        var height = $(".constructor-carpet").height();
        e.preventDefault();
        showShapesWindow();
        $(".constructor-carpet").css({"border-radius": "50%", "width" : height});
        $(".constructor-shape").removeClass("active");
        $(this).addClass("active");
        associateShapeSize();
    })

    $(".constructor-shape-more").click(function(e){
        e.preventDefault();
        $(".constructor-window").hide();
        $(".constructor-carpet-shapes").fadeIn(300);
    })

    $(".constructor-carpet-shapes-close").click(function(e){
        e.preventDefault();
        $(".constructor-carpet-shapes").hide();
        $(".constructor-carpet-wrapper").fadeIn(300);
    })

    $(".constructor-option-design-choose").click(function(e){
        e.preventDefault();
        $(".constructor-window").hide();
        $(".constructor-carpet-design").fadeIn(300);
        $(".constructor-option-design-choose").hide();
        $(".constructor-option-design-change").show();
    })

    $(".constructor-carpet-design-close").click(function(e){
        e.preventDefault();
        $(".constructor-carpet-design").hide();
        $(".constructor-carpet-wrapper").fadeIn(300);
        $(".constructor-option-design-change").hide();
        $(".constructor-option-design-choose").show();
    })

    function showShapesWindow(){
        if($(".constructor-carpet-wrapper").is(":hidden")){
            $(".constructor-window").hide();
            $(".constructor-carpet-wrapper").show();
        }
    }

    function associateShapeSize(){
        if ($(".constructor-shape-rectangle").hasClass("active") || $(".constructor-shape-rounded-rectangle").hasClass("active")){
            $("option.constructor-size-rectangle").prop("disabled", false);
            $("option.constructor-size-square").prop("disabled", true);
            $("#ui-id-3-menu li").removeClass("ui-state-disabled");
            $("#ui-id-3 option:disabled").each(function(){
                $("#ui-id-3-menu li").eq($(this).index()).addClass("ui-state-disabled");
            });
        }
        else {
            $("option.constructor-size-rectangle").prop("disabled", true);
            $("option.constructor-size-square").prop("disabled", false);
            $("#ui-id-3-menu li").removeClass("ui-state-disabled");
            $("#ui-id-3 option:disabled").each(function(){
                $("#ui-id-3-menu li").eq($(this).index()).addClass("ui-state-disabled");
            });
        }
    }
});

/* Плагин - выбор цвета ковра*/

$(function(){
    $(".constructor-option-color-choose-color").spectrum({
        allowEmpty: true,
        showInitial: true,
        showButtons: false,
        appendTo: $(".constructor-color"),
        move: function(color) {
            if ($(".sp-preview-inner").hasClass("sp-clear-display")) {
                $(".constructor-option-color-choose-color-text").text("Прозрачный");
                $(".constructor-carpet").css("background", "#f5f5f5");
            }
            else{
                var text_color = color.toHexString();
                text_color_changed = text_color.substr(1);
                $(".constructor-option-color-choose-color-text").text(text_color_changed);
                $(".constructor-carpet").css("background", text_color);
            }
        }
    });

    $(".constructor-option-color-choose").click(function() {
        $(".constructor-option-color-choose-color").spectrum("toggle");
        return false;
    });
});