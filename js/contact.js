/*********************************
	toggle
*********************************/


$('#toggle').on('click',function(){
	$('body').toggleClass('open');
});
$('.gnav li a').on('click',function(){
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
