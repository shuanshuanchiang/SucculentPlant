$(document).ready(function() {
  $('.mem_open').click(function() {
    $('.order_list_wrapper').slideToggle(1000);
  });

  //選單點擊
  $('.mem_btn li').click(function() {
    $('.mem_btn li').not(this).removeClass('-mem_this');
    $(this).addClass('-mem_this');
  });

  $('.mem_btn li:nth-child(1)').click(function() {
    $('.mem_main .center_wrapper').not(this).removeClass('-mem_show');
    $('.mem_main .center_wrapper:nth-child(1)').addClass('-mem_show');
  });

  $('.mem_btn li:nth-child(2)').click(function() {
    $('.mem_main .center_wrapper').not(this).removeClass('-mem_show');
    $('.mem_main .center_wrapper:nth-child(2)').addClass('-mem_show');
  });

  $('.mem_btn li:nth-child(3)').click(function() {
    $('.mem_main .center_wrapper').not(this).removeClass('-mem_show');
    $('.mem_main .center_wrapper:nth-child(3)').addClass('-mem_show');
  });

  $('.mem_btn li:nth-child(4)').click(function() {
    $('.mem_main .center_wrapper').not(this).removeClass('-mem_show');
    $('.mem_main .center_wrapper:nth-child(4)').addClass('-mem_show');
  });


  $('.mem_btn li').click(function() {
    $('.mem_btn li').not(this).removeClass('-mem_this');
    $(this).addClass('-mem_this');
  });

  //點擊評價出現評價視窗
  $('.pro_list span i').click(function() {
    $('.lightbox_wrapper').show();
  });

  //評價星星變色
  $('.mem_star i').click(function() {
    $(this).toggleClass('-this_star');
  });

  //點x關閉評價視窗
  $('.mem_star_wrapper>i').click(function() {
    $('.lightbox_wrapper').hide();
  });

  //點擊修改會員資料與儲存
  ChangeDisabled = (value) => {
    if (value == '1') {
      document.querySelectorAll('.TetstText')[0].disabled = false;
      document.querySelectorAll('.TetstText')[0].style.background = "#F5F5F5"
    } else {
      document.querySelectorAll('.TetstText')[0].disabled = true;
      document.querySelectorAll('.TetstText')[0].style.background = "white"
      document.querySelectorAll('.TetstText')[0].style.color = " #2f4f4f"
    }
    let txt1 = document.querySelectorAll('.TetstText')[0];
    txt1.addEventListener('keydown', (e) => {
      if (e.keyCode == 13) {
        document.querySelectorAll('.TetstText')[0].disabled = true;
        document.querySelectorAll('.TetstText')[0].style.background = "white"
        document.querySelectorAll('.TetstText')[0].style.color = " #2f4f4f";
        var pass = document.querySelector('.pass').value.trim();
        var reg = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,10}$/;
        //  正規表示式驗證密碼包含數字字母6到10位
        if (!reg.test(pass)) {
          // alert('手機號碼輸入有誤！');
          judge.classList.remove('correct');
          error.innerHTML = "密碼輸入格式有誤！";
        } else {
          // alert('手機號碼輸入正確！');
          judge.classList.add('correct');
          correct.innerHTML = "密碼輸入格式正確！";
        }
      }
    })
  }
  ChangeDisabledPhone = (value) => {
    if (value == '1') {
      document.querySelectorAll('.TetstText')[1].disabled = false;
      document.querySelectorAll('.TetstText')[1].style.background = "#F5F5F5"
    } else {
      document.querySelectorAll('.TetstText')[1].disabled = true;
      document.querySelectorAll('.TetstText')[1].style.background = "white"
      document.querySelectorAll('.TetstText')[1].style.color = " #2f4f4f"
    }
    let txt2 = document.querySelectorAll('.TetstText')[1];
    txt2.addEventListener('keydown', (e) => {
      if (e.keyCode == 13) {
        document.querySelectorAll('.TetstText')[1].disabled = true;
        document.querySelectorAll('.TetstText')[1].style.background = "white"
        document.querySelectorAll('.TetstText')[1].style.color = " #2f4f4f"
          // 手機驗證
        var reg = /^09\d{2}-?\d{3}-?\d{3}$/;
        var phone = document.querySelector('#phone').value.trim();
        console.log(phone);
        if (!reg.test(phone)) {
          // alert('手機號碼輸入有誤！');
          judge.classList.remove('correct');
          error.innerHTML = "手機號碼輸入有誤！";
        } else {
          // alert('手機號碼輸入正確！');
          judge.classList.add('correct');
          correct.innerHTML = "手機號碼輸入正確！";
        }
      }
    })
  }
  ChangeDisabledAdd = (value) => {
      if (value == '1') {
        document.querySelectorAll('.TetstText')[2].disabled = false;
        document.querySelectorAll('.TetstText')[2].style.background = "#F5F5F5"
      } else {
        document.querySelectorAll('.TetstText')[2].disabled = true;
        document.querySelectorAll('.TetstText')[2].style.background = "white"
        document.querySelectorAll('.TetstText')[2].style.color = " #2f4f4f"
      }
      let txt3 = document.querySelectorAll('.TetstText')[2];
      txt3.addEventListener('keydown', (e) => {
        if (e.which == 13) {
          document.querySelectorAll('.TetstText')[2].disabled = true;
          document.querySelectorAll('.TetstText')[2].style.background = "white"
          document.querySelectorAll('.TetstText')[2].style.color = " #2f4f4f";

        }
      })
    }
    // 會員資料再度更新表單驗證

  // $('#formCheck').submit(function (e) {
  //     let errorMessage = '';
  //     e.preventDefault();
  //     let pass = $('.pass').val();
  //     let phone = $('.phone').val();
  //     let address = $('.address').val();

  // })

  //訂單提交頁-驗證手機號 
  let save = document.querySelector('.save');
  let error = document.querySelector('.error');
  let correct = document.querySelector('.correct');
  let judge = document.querySelector('.judge')
    //== 點擊 ==
  save.addEventListener('click', () => {
    var reg = /^09\d{2}-?\d{3}-?\d{3}$/;
    var phone = document.querySelector('#phone').value.trim();
    // console.log(phone);
    if (!reg.test(phone)) {
      // alert('手機號碼輸入有誤！');
      judge.classList.remove('correct');
      error.innerHTML = "手機號碼輸入有誤！";
    } else {
      // alert('手機號碼輸入正確！');
      judge.classList.add('correct');
      correct.innerHTML = "手機號碼輸入正確！";
    }
  })

  //訂單提交頁-驗證密碼
  save.addEventListener('click', () => {
    var pass = document.querySelector('.pass').value.trim();
    var reg = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,10}$/;
    //  正規表示式驗證密碼包含數字字母6到10位
    if (!reg.test(pass)) {
      // alert('手機號碼輸入有誤！');
      judge.classList.remove('correct');
      error.innerHTML = "密碼輸入格式有誤！";
    } else {
      // alert('手機號碼輸入正確！');
      judge.classList.add('correct');
      correct.innerHTML = "密碼輸入格式正確！";
    }
  })

  //submit表單驗證

  let memSubmit = document.querySelector('.mem_submit');
  memSubmit.addEventListener('click', (e) => {
      var reg = /^09\d{2}-?\d{3}-?\d{3}$/;
      var reg2 = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,10}$/;
      var phone = document.querySelector('#phone').value.trim();
      // alert(phone);
      var pass = document.querySelector('.pass').value.trim();
      console.log(reg.test(phone));
      if (!reg.test(phone)) {
        // alert('aaaa');
        // alert('手機號碼輸入有誤！');
        // phoneTxt.style.color = "red";
        error.innerHTML = "電話輸入格式有誤！";
        e.preventDefault();
      } else if (!reg2.test(pass)) {
        // alert('手機號碼輸入有誤！');
        // phoneTxt.style.color = "red";
        error.innerHTML = "密碼輸入格式有誤！";
        e.preventDefault();
      }

    })
    // memSubmit.addEventListener('click', (e) => {
    //     // var reg = /^09\d{2}-?\d{3}-?\d{3}$/;
    //     var reg2 = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,10}$/;
    //     // var phone = document.querySelector('#phone').value;
    //     var pass = document.querySelector('.pass').value;
    //     if (!reg2.test(pass)) {
    //         // alert('手機號碼輸入有誤！');
    //         // phoneTxt.style.color = "red";
    //         error.innerHTML = "密碼輸入格式有誤！";
    //         e.preventDefault();
    //     }

  // })




  //處理訂單總金額
  function onload() {
    let orderMoney = document.querySelector('.orderMoney');
    //   alert(orderMoney);
    let handClassPrice = document.querySelector('.handClassPrice').innerHTML;
    let productPrice = document.querySelector('.productPrice').innerHTML;
    // console.log(handClassPrice);
    // console.log(productPrice);
    let handClassPrice_num = parseInt(handClassPrice);
    let productPrice_num = parseInt(productPrice);
    let total = handClassPrice_num + productPrice_num;
    orderMoney.innerHTML = total;
  }
  onload();



});