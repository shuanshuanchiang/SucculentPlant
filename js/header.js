$(document).ready(function() {
  //header動態增加白底
  lastScrollY = 0;
  window.addEventListener('scroll', function() {
    var st = this.scrollY;
    if (st < lastScrollY) {
      $('.header_bg').removeClass('hideUp');
      $('.header_bg').addClass('addbg');
    } else {
      $('.header_bg').addClass('hideUp');
      $('.header_bg').removeClass('addbg');
    }
    if (st == 0) $('.header_bg').removeClass('addbg');
    lastScrollY = st;

  });

  // header 手機版選單出現 
  $('.ham').click(function() {
    $(this).toggleClass('-hamclose');
    $('.header_bg ul').toggleClass('-showmenu');
  });

  $(`section`).on("click", ".fa-sign-out-alt", (e) => {
    // console.log(1);
    alert(1);

  });



  // function getMemberID(){
  //     if(!isset($_SESSION)){
  //         session_start(); 
  //     }
  //     return isset($_SESSION["memberNO"]) ? $_SESSION["memberNO"] : ""; 
  // };


});