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


