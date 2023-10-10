/*********************************
	sidebar active
*********************************/

$(function () {
    var set = 300;//ウインドウ上部からどれぐらいの位置で変化させるか
    var boxTop = new Array;
    var current = -1;
    //各要素の位置
    //position-nowは場所を取得したい対象の要素に付ける
    $('.now').each(function (i) {
      boxTop[i] = $(this).offset().top;
    });
    //最初の要素にclass="positiion-now"をつける
    changeBox(0);
    //スクロールした時の処理
    $(window).scroll(function () {
      scrollPosition = $(window).scrollTop();
      for (var i = boxTop.length - 1; i >= 0; i--) {
        if ($(window).scrollTop() > boxTop[i] - set) {
          changeBox(i);
          break;
        }
      };
    });
    //ナビの処理
    function changeBox(secNum) {
      if (secNum != current) {
        current = secNum;
        secNum2 = secNum + 1;//以下にクラス付与したい要素名と付与したいクラス名
        $('.sidebar ul li a').removeClass('link-current');
  
        //位置によって個別に処理をしたい場合　
        if (current == 0) {
          $('#profile_link').addClass('link-current');
          // 現在地がsection1の場合の処理
        } else if (current == 1) {
          $('#story_link').addClass('link-current');
          // 現在地がsection2の場合の処理
        } else if (current == 2) {
          // 現在地がsection3の場合の処理
          $('#price_link').addClass('link-current');
        }
        else if (current == 3) {
          // 現在地がsection4の場合の処理
          $('#contact_link').addClass('link-current');
        }


  
  
      }
    };
  });