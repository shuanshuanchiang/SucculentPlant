// 商品篩選
$(document).ready(function () {
  $(`.shop_mainfilter>li>a`).click(function (e) {
    e.preventDefault();
    $(`.shop_mainfilter>li>a`).removeClass("-shop-click");
    $(`.shop_childfilter>li>a`).removeClass("-shop-click");

    // $(`.shop_childfilter`).removeClass(`-show-flex`);
    $(`.shop_childfilter`).addClass("-off");

    $(this).addClass("-shop-click");
  });

  $(`.shop_succulents`).click(function (e) {
    $(`.shop_childfilter`).removeClass("-off");
  });

  $(`.shop_childfilter>li>a`).click(function (e) {
    e.preventDefault();

    $(`.shop_childfilter>li>a`).removeClass("-shop-click");
    $(this).addClass("-shop-click");
  });

  // 愛心收藏
  // $(`.shop_card_heart`).on("click", function (e) {
  $(`section`).on("click", ".shop_card_heart", function (e) {
    // e.preventDefault();
    if ($(this).hasClass("-heart")) {
      $(this).removeClass("-heart");
    } else {
      $(this).addClass("-heart");
    }
  });
  // document.body.addEventListener("click", (e) => {
  //   const target = e.target;
  //   // console.log(target);
  //   if (target.matches(`.fa-heart`)) {
  //     target.classList.add("-heart");
  //   } else {
  //     return;
  //   }
  // });

  // 已成功加入購物車
  document.body.addEventListener("click", (e) => {
    const target = e.target;
    // console.log(target);
    if (e.target.matches(`.shop_btn`)) {
      // if (e.target.classList.contains("shop_btn")) {
      e.preventDefault();
      // target.preventDefault();
      // console.log(e.target);
      alert("已成功加入購物車");
    }
  });

  //  購物車抓localStorage
  // let ss = JSON.parse(localStorage.getItem("itemStorage"));
  // console.log(ss.length);
  // $(".shop_btn").on("click", function (e) {
  // e.preventDefault();
  // alert("已成功加入購物車");

  // let shopbtn = document.getElementsByClassName("shop_btn")

  // console.log("123");
  // });

  // 照顧難易度
  // function take_lev() {
  // $(".shop_card_take").on(load, function () {
  // let take_ol = document.getElementsByClassName("shop_card_take");
  // for (let i = 0; i < take_ol.length; i++) {
  //   let take_li = take_ol[i].children;
  //   if (take_ol[i].getAttribute("data-take") == 1) {
  //     // console.log("1", take_li);
  //     take_li[2].classList.add("-shop-take");
  //     take_li[1].classList.add("-shop-take");
  //   } else if (take_ol[i].getAttribute("data-take") == 2) {
  //     // console.log("2", take_li);
  //     take_li[2].classList.add("-shop-take");
  //   } else if (take_ol[i].getAttribute("data-take") == 3) {
  //     // console.log("3", take_li);
  //   } else if (take_ol[i].getAttribute("data-take") == "") {
  //     console.log(take_ol[i]);
  //     // take_ol[i].classList.add("-off");
  //     take_li[0].classList.add("-off");
  //     take_li[1].classList.add("-off");
  //     take_li[2].classList.add("-off");
  //   }
  // }
  // });

  // let takelv = $(".shop_card_take").data("take");
  // console.log(takelv);
  // if (takelv == 1) {
  //   $(".shop_card_take>li:nth-child(2)").css({ opacity: 0.2 });
  //   $(".shop_card_take>li:last-child").css({ opacity: 0.2 });
  // } else if (takelv == 2) {
  //   $(".shop_card_take>li:last-child").css({ opacity: 0.2 });
  // } else if (takelv == 3) {
  //   $(".shop_card_take>li").css({ display: "block" });
  // } else $(".shop_card_take").css({ display: "none" });
  // });
  // take_lev();

  // sessionStorage
  // let storage = sessionStorage;
  // function doFirst() {
  //   if (storage["addItemList"] == null) {
  //     storage["addItemList"] = ""; //storage.setItem('addItemList','');
  //   }
  //   //幫每個Add Cart建立事件聆聽功能
  //   let list = document.querySelectorAll(".addButton");
  //   // console.log(list); //list是陣列
  //   for (let i = 0; i < list.length; i++) {
  //     list[i].addEventListener("click", function () {
  //       let teddyInfo = document.querySelector(`#${this.id} input`).value;
  //       console.log(this);
  //       addItem(this.id, teddyInfo);
  //     });
  //   }
  // }
  // window.addEventListener("load", doFirst);
});
