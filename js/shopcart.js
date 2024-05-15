//購物車側邊欄開啟
let faShop = document.querySelector(".fa-shopping-basket");
let order = document.querySelector(".order");
faShop.addEventListener("click", (e) => {
  e.preventDefault();
  order.style.display = "block";
});

//購物車側邊欄關閉

let fawin = document.querySelector(".fa-window-close");
fawin.addEventListener("click", () => {
  order.style.display = "none";
});

// // 側邊欄
// var app9 = new Vue({
//   el: "#app8",
//   data: {
//     counter: 0,
//   },
// });
// var app9 = new Vue({
//   el: "#app9",
//   data: {
//     counter: 0,
//   },
// });

$(document).ready(function () {
  關閉側邊欄位;
  $(".fa-times").click(function () {
    // console.log('hide me');
    $(".order").hide();
  });
  // 確定購買
  $(".checkbuy").click(function () {
    // console.log('hide me');
    $(".order").hide();
    $(".order_center").show();
  });
});

// //計數器的部分
// Vue.component("counter-component", {
//   data: function () {
//     return {
//       counter: 0,
//     };
//   },
//   template: `
//     <div>
//     <p >{{ counter }}</p>
//     </div>
//    `,
// });

// var app = new Vue({
//   el: "#app",
//   data: {
//     counter: 0,
//   },
// });
// var app = new Vue({
//   el: "#app2",
//   data: {
//     counter: 0,
//   },
// });
// var app = new Vue({
//   el: "#app3",
//   data: {
//     counter: 0,
//   },
// });
// 繼續購物、下一步、上一步、訂單送出
$(document).ready(function () {
  $(".next").click(function () {
    $(".container2").slideDown("slow");
    $(".the_order1").hide();
    $(".reci_title").show();
    $(".the_order2").show();
  });
  $(".pre").click(function () {
    $(".container2").hide();
    $(".reci_title").hide();
    $(".the_order2").hide();
    $(".the_order1").show();
  });
  $(".cofirm").click(function () {
    $(".container2").hide();
    $(".container1").hide();
    $(".reci_title").hide();
    $(".the_order2").hide();
    $(".order_center h2").hide();
    $(".the_order1").hide();
    $(".orderForm").show();
  });
});
