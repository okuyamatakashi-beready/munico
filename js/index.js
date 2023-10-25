/*********************************
	toggle
*********************************/


$('#toggle').on('click',function(){
	$('body').toggleClass('open');
});
$('.gnav li a').on('click',function(){
	$('body').removeClass('open');
});
$('#header .sp_nav dl dt a').on('click',function(){
	$('body').removeClass('open');
});



$(function(){
    $('a[href^=#]').click(function() {
    var speed = 500; // スクロール速度(ミリ秒)
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('html').animate({scrollTop:position}, speed, 'swing');
    return false;
    });
    });

    $(document).ready(function() {
      // 初めに<dd>を非表示にします
      $("#header .sp_nav dl.active dd").hide();
  
      $("#header .sp_nav dl.active dt").click(function() {
          // このdtの次のdd要素をトグルします
          var $parentDl = $(this).closest('dl'); // クリックしたdtの親の<dl>を取得
          $parentDl.find('dd').first().slideToggle();
          $parentDl.toggleClass('open');
      });
  });
  

/*********************************
	shuffle
*********************************/
if(!navigator.userAgent.match(/(iPhone|iPod|Android)/)){
window.addEventListener('load', init);
function init() {
  var effectList = [];
  var elementList = document.querySelectorAll('.js_typing');

  for (var i = 0; i < elementList.length; i++) {

    var element = elementList[i];
    element.dataset.index = i;

    // インスタンスを取得する
    effectList[i] = new ShuffleText(element);

    // マウスオーバー時に再生する
    element.addEventListener('mouseenter', function () {
      effectList[+this.dataset.index].start();
    });


  }
}
}

/*********************************
	slider
*********************************/

if(navigator.userAgent.match(/(iPhone|iPod|Android)/)){
  $(function(){    
    $('.other_list .other_list_wrap .other_list_inner .other_slider').slick({
      autoplay:false,
      autoplaySpeed:2000,
      dots:false,
      infinite:true,
      arrows: false, 
      centerMode: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
        {
            breakpoint: 768, // 399px以下のサイズに適用
          settings: {
          slidesToShow: 1,
          },
        },
      ],
    });
  });
}

/*********************************
	sidebar stop
*********************************/

jQuery(window).on("scroll", function() {
	documentHeight = jQuery(document).height();
	scrollPosition = jQuery(this).height() + jQuery(this).scrollTop();
	footerHeight = jQuery("#footer").innerHeight();

	if (documentHeight - scrollPosition - 120 <= footerHeight) {
		jQuery(".sidebar").css({
			position: "absolute",
      top: "auto",
			bottom: 0,
      left: "5.4%"
		});
	} else {
		jQuery(".sidebar").css({
			position: "fixed",
			bottom: "auto",
      top: 190,
      left: "5.4%"
		});
	}
});

$(function() {
  $('.sidebar ul li a').each(function(){
      var $href = $(this).attr('href');
      if(location.href.match($href)) {
          $(this).parent().addClass('current');
      } else {
          $(this).parent().removeClass('current');
      }
  });
});

$(document).ready(function() {
  var activeUrl = location.pathname.split("/")[2];
    navList = $(".sidebar ul li").find("a");

  navList.each(function(){
      if( $(this).attr("href").split("/")[2] == activeUrl ) {
       $(this).addClass("link-current");
     };
});
});







if(!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
  $(function () {
    const headNav = $('.page-header');
    $(window).scroll(function () {
      // スクロール量が200px以上かつクラスfixedが付与されていないとき
      if($(this).scrollTop() > 200 && headNav.hasClass('fixed') == false) {
        //headerの高さ分上に設定（上から下りてくる動きにするため）
        headNav.css({top: '-100px'});
        //クラスfixedを付与
        headNav.addClass('fixed');
        //位置を0に設定し、上から下りてくるスピードを設定
        headNav.animate({top: 0},1000);
      }
      // スクロール量が200px以下かつクラスfixedが付与されているとき
      else if($(this).scrollTop() < 200 && headNav.hasClass('fixed') == true){
        // クラスfixedを外す
        headNav.removeClass('fixed');
      }
    });
  });
}

