
$(document).ready(function () {


  //var menu_opened = false;
  $("#open-menu").click(function () {
    $('body').addClass('menu-mobile-opened');
  });
  $("#close-menu-mobile").click(function () {
    $('body').removeClass('menu-mobile-opened');
  });

  $(".with-submenus > a").click(function (e) {
    if ($(".with-submenus > ul").hasClass('d-none')) {
      $(".with-submenus > ul").removeClass('d-none').addClass('d-block');
      $(this).find('img').css('transform', 'rotate(180deg)');
      $(this).find('img.top').css('transform', 'translateX(0) rotate(180deg) translateY(0px)');
    } else {
      $(".with-submenus > ul").removeClass('d-block').addClass('d-none');
      $(this).find('img').css('transform', 'rotate(0)');
      $(this).find('img.top').css('transform', 'translateX(0) rotate(0deg) translateY(0px)');
    }
  });

  $(".menu-items-secondary-icons a").on('hover', function () {
    $(this).addClass('active');
  });


  $(".menu-items-secondary-icons a").hover(
    function () {
      $(".menu-items-secondary-icons a").removeClass('active');
      $(this).addClass("active");
    }, function () {
      $(".menu-items-secondary-icons a").removeClass('active');
      $(".menu-items-secondary-icons a").first().addClass('active');
    }
  );

  $('.w-target').on('click', function (e) {
    e.preventDefault()

    $('html, body').animate(
      {
        scrollTop: $($(this).attr('href')).offset().top - 98,
      },
      500,
      'linear'
    )
  });


  // var $item = $('.open-close-panel-actions'); row - action - bar

  // customScroller = function () {
  //   $('thead').css("left", -$("tbody").scrollLeft()); //if not using IE11, fix the thead element
  // };

  // $('tbody').scroll(function (e) { //detect a scroll event on the tbody
  //   /*
  //   Setting the thead left value to the negative valule of tbody.scrollLeft will make it track the movement
  //   of the tbody element. Setting an elements left value to that of the tbody.scrollLeft left makes it maintain             it's relative position at the left of the table.    
  //   */
  //   customScroller(); //fix the thead relative to the body scrolling
  //   $('thead th:nth-child(1)').css("left", $("tbody").scrollLeft());
  //   //fix the first cell of the header
  //   $('tbody td:nth-child(1)').css("left", $("tbody").scrollLeft()); //fix the first column of tdbody
  // });


});


// $('.row-flex-container').scroll(function (e) {
//   var $target = $(this).find('.open-close-panel-actions');
//   var $teste = $('.teste');
  
//   if ($(this).scrollLeft() < 264.21875) {
//     //{top: 0, left: 262} 264.171875
//     console.log( $target.position(), $(this).scrollLeft());
//   } else {
//     //{top: 0, left: 262} 264.171875
//     $target.css('right', '10px');
//     console.log('passou: '+$(this).scrollLeft());
//   }

// });




// // wrap.on("scrollLeft", function (e) {

// //   console.log('ts');

// //   if (this.scrollLeft() > 147) {
// //     wrap.addClass("fix-search");
// //     console.log('ts');
// //   } else {
// //     wrap.removeClass("fix-search");
// //   }

// });

