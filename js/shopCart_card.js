document.addEventListener("DOMContentLoaded", function () {
  //[card], [card], [card], [card]
  var shopCart_card = document.getElementsByClassName("shopCart_card");
  //   console.log(shopCart_card);
  for (let i = 0; i < shopCart_card.length; i++) {
    //keyup按下鍵盤那剎那
    shopCart_card[i].addEventListener("keydown", function (e) {
      // console.log(e.which);
      if ((e.which >= 48 && e.which <= 57) || e.which == 8) {
        // console.log(e.target.value.length);

        //這格空了會往前刪
        if (e.target.value.length == 0 && e.which == 8) {
          let previous_el = this.previousElementSibling;
          previous_el.focus();
        }
      } else {
        e.preventDefault(); //停掉預設行為
      }
    });

    //keyup放開鍵盤那剎那
    shopCart_card[i].addEventListener("keyup", function (e) {
      // console.log(e.target.value);
      //一格輸入完跳下一格
      // let str = e.target.value;//這樣輸入格子可以打中文
      let str = e.target.value.replace(/\D/g, ""); //replace(/\D/g,"")除了數字不能打,g是只全部
      e.target.value = str;
      if (str.length == 4) {
        let next_el = this.nextElementSibling;
        // console.log(next_el);
        if (next_el != null) {
          next_el.focus();
        }
      }
    });
  }
  $("input.shopCart_date").on("keyup", function (e) {
    // console.log('ee');
    if (e.which && this.value.length === 2 && e.which !== 8) {
      this.value += "/";
    }
  });

  // let shop_cart_confirm = document.getElementsByClassName("cofirm")[0];
  // let shopcart_card = document.getElementsByClassName("shopCart_card");

  // shop_cart_confirm.addEventListener("click", function (e) {
  //   for (let i = 0; i <= shopcart_card.length; i++) {
  //     if (shopcart_card[i].value == "") {
  //       alert("信用卡號不能為空值");
  //       this.shopCart_card[i].focus();
  //       e.preventDefault();
  //     }
  //   }

  // });
});
