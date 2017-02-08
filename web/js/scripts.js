//Кнопки

$(function(){
  $(".main-header-items-menu-floor").hover(function(){
    $(".main-header-items-menu-drop-down").hide();
    $(".main-header-items-menu-drop-down-floor").slideDown(300);
  }, function(){
    $(".main-header-items-menu-drop-down-floor").mouseleave(function(){
      $(".main-header-items-menu-drop-down-floor").slideUp(300);
    })    
  })

  $(".main-header-items-menu-table").hover(function(){
    $(".main-header-items-menu-drop-down").hide();
    $(".main-header-items-menu-drop-down-table").slideDown(300);
  }, function(){
    $(".main-header-items-menu-drop-down-table").mouseleave(function(){
      $(".main-header-items-menu-drop-down-table").slideUp(300);
    })    
  })

  $(".main-header-items-menu-custom").hover(function(){
    $(".main-header-items-menu-drop-down").hide();
    $(".main-header-items-menu-drop-down-custom").slideDown(300);
  }, function(){
    $(".main-header-items-menu-drop-down-custom").mouseleave(function(){
      $(".main-header-items-menu-drop-down-custom").slideUp(300);
    })    
  })

  $(".main-header-login-entry").click(function(){
    $(".main-header-login-form").toggle();
  })

  $(".catalog-menu-title").click(function(){
    $(".catalog-menu-submenu").slideToggle(300);
  })

  $(".lk-order-title").click(function(){
    $(this).parent().parent().next().slideToggle(300);
    $(this).parent().parent().parent().toggleClass("lk-order-full");
  })
});

// Формы

$(function(){
  $(".make-order-radio input").change(function(){
      if($("#cart-self-delivery").is(":checked")) {
        $(".make-order .make-order-address").hide();
              }
      else {
         $(".make-order .make-order-address").css("display", "table");
      }
  });
});

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


/* Плагин - ввод текста*/

$(function(){
  CKEDITOR.replace( "constructor-option-elements-text", {
    on: 
        {change: function() {
          var element = this.getData();
          $(".constructor-carpet-text").html(element);
          $(".constructor-carpet-text span").each(function(){
            if($(this).children().length == 0) {
              var size = $(this).css("font-size"),
              old_size = parseInt(size, 10),
              new_size = old_size + 40 + "px";
              $(this).css("font-size", new_size);
              $(this).parents("p").css("font-size", new_size);
            }
          });
          $(".constructor-window").hide();
          $(".constructor-carpet-wrapper").show();
          $(".constructor-carpet-rotatable").draggable({
            cursor: "move",
            containment: "parent"
          });
        }
    }
});

  $(".constructor-option-element-text-add").click(function(e){ 
    e.preventDefault();
    $("#cke_constructor-option-elements-text").toggle();
  });


  $(document).click(function(e){
    var editor = $("#cke_constructor-option-elements-text"),
    carpet = $(".constructor-carpet-wrapper"),
    dialog = $(".cke_editor_constructor-option-elements-text_dialog");
    if (!$(e.target).is( $(".constructor-option-element-text-add")) && $(e.target).closest(editor).length == 0 && $(e.target).closest(carpet).length == 0 && $(e.target).closest(dialog).length == 0) {
    $("#cke_constructor-option-elements-text").hide();
    e.stopPropagation();
  }
  });

  $(".constructor-carpet-rotatable").resizable().rotatable();

});

// Карточка товара

$(function(){
    $(".item-cart-description-title").click(function(){
      $(".item-cart-details-window").hide();
      $(".item-cart-description").fadeIn(300);
    })

    $(".item-cart-reviews-title").click(function(){
      $(".item-cart-details-window").hide();
      $(".item-cart-reviews").fadeIn(300);
    })

        $(".item-cart-more-goods-title").click(function(){
      $(".item-cart-details-window").hide();
      $(".item-cart-more-goods").fadeIn(300);
    })

});



//Модальное окно

$(function() {
  $(".cart-go-1-step").click(function () {
    $(".overlay").fadeIn(400,
      function(){
        $(".modal-form-cart") 
          .css("display", "block")
          .animate({opacity: 1}, 300);
    });
  });

  $(".modal-form-cart-close, .overlay").click( function(){
    $(".modal-form-cart")
      .animate({opacity: 0}, 300,
        function(){
          $(this).css("display", "none");
          $(".overlay").fadeOut(400);
        }
      );
  });

});


// Селекты и тултипы

$(function() {
  $('.constructor-menu select').selectmenu({
    width: null,
    position: {my : "left top-29"},
    icons: { button: "ui-icon-caret-1-s"}
  });

  $('.constructor-size select').selectmenu({
    width: 100
  });

  $('.user-contacts select').selectmenu({
    width: 350,
    icons: { button: "ui-icon-caret-1-s"},
    change: function(){
      if($('#individual-or-corporation').val() == "individual") {
        $(".user-contacts-corporation").fadeOut(300);
        $(".user-contacts-individual").fadeIn(300);
      }

      else {
        $(".user-contacts-corporation").fadeIn(300);
        $(".user-contacts-individual").fadeOut(300);
      }
    }
  });

  $('#cart-messenger-time').selectmenu({
    width: 170,
    position: {my : "left top-32"},
    icons: { button: "ui-icon-caret-1-s"}
  });

  $('.cart-messenger-datapicker-icon').click(function(){
    $('#cart-messenger-date')[0].focus();
  });   

  $('#cart-messenger-date').datepicker({
    dayNames: [ "Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота" ],
    dayNamesMin: [ "Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб" ],
    firstDay: 1,
    monthNames: [ "Январь", "Февраль", "Март", "Четверг", "Пятница", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь" ],
    defaultDate: new Date(),

  });

  $('.constructor-menu-help').tooltip({
      position: { my: "right-8 center+12"}
  });
});


// Cлайдеры

$(document).ready(function(){
  $(".main-banner-slider").owlCarousel({
    margin: 0,
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    smartSpeed: 1000,
    slideBy: 2,
    nav: true,
    navText: "",
        responsive:{
        0: {
            items: 2
        },
        580:{
            items:3
        },
        992:{
            items:4
        }
      }
  });

  $(".item-slider").owlCarousel({
    margin: 40,
    loop: true,
    dots: false,
    nav: true,
    navText: "",
    responsive:{
        0: {
            items: 1
        },
        580:{
            items:2
        },
        992:{
            items:3
        }
      }
    });

  $(".article-articles-slider").owlCarousel({
    margin: 55,
    loop: true,
    dots: false,
    nav: true,
    navText: "",
    responsive:{
        0: {
            items: 1
        },
        580:{
            items:2
        },
        992:{
            items:3
        }
      }
    });

    $(".item-slider-more-goods").owlCarousel({
    margin: 30,
    loop: true,
    dots: false,
    nav: true,
    navText: "",
    responsive:{
        0: {
            items: 1
        },
        580:{
            items:2
        },
        860:{
            items:3
        },
        1200:{
            items:4
        }
      }
    });
  });
