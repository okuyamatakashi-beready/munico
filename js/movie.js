/*********************************
	sidebar active
*********************************/

$(function () {
    var set = 200;//ウインドウ上部からどれぐらいの位置で変化させるか
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
          $('#promotion_link').addClass('link-current');
          // 現在地がsection1の場合の処理
        } else if (current == 1) {
          $('#interview_link').addClass('link-current');
          // 現在地がsection2の場合の処理
        } else if (current == 2) {
          // 現在地がsection3の場合の処理
          $('#seminar_link').addClass('link-current');
        }
        else if (current == 3) {
          // 現在地がsection4の場合の処理
          $('#crosstalk_link').addClass('link-current');
        }
        else if (current == 4) {
          // 現在地がsection4の場合の処理
          $('#recruit_link').addClass('link-current');
        }
        else if (current == 5) {
          // 現在地がsection4の場合の処理
          $('#reel_link').addClass('link-current');
        }
        else if (current == 6) {
          // 現在地がsection4の場合の処理
          $('#youtube_link').addClass('link-current');
        }
        else if (current == 7) {
          // 現在地がsection4の場合の処理
          $('#wedding_link').addClass('link-current');
        }
        else if (current == 8) {
          // 現在地がsection4の場合の処理
          $('#closecoverage_link').addClass('link-current');
        }
        else if (current == 1) {
          // 現在地がsection4の場合の処理
          $('#look_link').addClass('link-current');
        }
        else if (current == 2) {
          // 現在地がsection4の場合の処理
          $('#salon-model_link').addClass('link-current');
        }
        else if (current == 3) {
          // 現在地がsection4の場合の処理
          $('#product_link').addClass('link-current');
        }
        else if (current == 4) {
          // 現在地がsection4の場合の処理
          $('#wedding_link').addClass('link-current');
        }
        else if (current == 5) {
          // 現在地がsection4の場合の処理
          $('#creative_link').addClass('link-current');
        }
        else if (current == 6) {
          // 現在地がsection4の場合の処理
          $('#staff_link').addClass('link-current');
        }
        else if (current == 7) {
          // 現在地がsection4の場合の処理
          $('#salon_link').addClass('link-current');
        }
  
  
      }
    };
  });