/* 我的账户的切换 */
$('.mycount').mouseenter(function(){
  $('.mycount').addClass('mycount-curr').children('.detail').show();
  $('.mycount').children('div').children('.white').css({
    color: '#fff',
    textDecoration: 'none',
  });
})
$('.mycount').mouseleave(function(){
  $('.mycount').removeClass('mycount-curr').children('.detail').hide();
  $('.mycount').children('div').children('.white').css({
    color: '',
    textDecoration: '',
  });
})

//给加入购物车这个按钮 绑定点击事件
$(".btn").on("click", function () {
  var index = $(this).attr("index");
  var listId = $(this).attr("data-id"); //可作为id的动态class  
  var listImg = $(this).attr("data-img");// 2 图片名
  var listPrice = $(this).attr("data-price"); //可作为list的动态价格 4
  var illustrate = $('.name a').eq(index).text();
    //  console.log(listId, listPrice, illustrate); 
  var NUM = 1;
  /* $("." + listId).find(".list-edit").css("display", "block");//让list-edit出现 即可编辑的区域
  $("." + listId).find(".num").text(1);//最初点击加入购物车，商品数量为1 */

  /* 让空购物车消失 ，并渲染已加入购物车里的物品*/
  $('.empty-cart').hide();
  $('.have-things').show();

  var html = '<div class="cart-list clearfix '+ listId +'"><div class="ct1 fl"><div class="clearfix" ><input type="checkbox" class="fl" checked><a href="javascript:;" id="goods-img" class="fl"><img src="./img/'+ listImg +'.jpg"></a>'
      html += '<div class="cont-link fl"><a href="javascript:;"><span class="cont-info">'+ illustrate +'</span></a></div></div></div>'
      html += '<div class="danjia fl" >￥' + listPrice + '</div ><div class="counts fl"><div class="sub oper-goods" data-id="'+ listId +'"></div><div class="num fl"><input value="' + NUM + '"></div><div class="add oper-goods" data-id="'+ listId +'"></div></div>'
      html += '<div class="weight fl">1.152</div><div class="subtotal fl">&yen;' + listPrice +'</div><div class="operation fl"><a href="javascript:;" class="collection">收藏</a><p><a href="javascript:;" class="del">删除</a></p></div></div ></div>'
 
  $('.cont1-goods').append(html);

  
  totalPrice();//调用函数计算总价
});

//计算总价
function totalPrice() {
  var copies = 0;//声明变量存储商品数量，并初始化为0
  var total = 0;//声明变量存储商品总价
  $(".cont1-goods .cart-list").each(function () {//遍历购物车中的商品
    copies = copies + parseInt($(this).find(".num input").val());//获取购物车中每个商品数量，并累加计算总数量
    console.log(copies);
    total = total + parseFloat($(this).find(".danjia").text().slice(1));//获取购物车中每个商品单价，并累加计算总价
    console.log(total)
    $('.oar-money-total').text('￥' + total);
    // console.log(total)
  })
}
//加 给 '+' 绑定事件
$(document).on('click', '.add', function (event) {
  var listId = $(this).attr("data-id"); //可作为id的动态class
  var listPrice = parseFloat($('.danjia').text().slice(1));
  
  console.log(listPrice);
  var amount = parseInt($(".num input").val());//获取span中的数量

  amount++;

  $("." + listId).find(".num input").val(amount);//更新对应商品的数量

  var subtotal = amount * listPrice;//设置变量subtotal存储计算的总价
  console.log(subtotal)
  $("." + listId).find(".subtotal").text('￥' + subtotal);

  totalPrice();

})

//减
$(document).on('click', '.sub', function () {
  var listId = $(this).attr("data-id"); //可作为id的动态class
  var listPrice = parseFloat($('.danjia').text().slice(1));
  var amount = parseInt($(".num input").val());//获取该商品数量
  var subtotal;//声明变量存储商品总价
  if (amount > 1) {//如果商品数量大于1，则允许减少商品数量
    amount--;
    $("." + listId).find(".num input").val(amount);//更新商品数量

    subtotal = amount * listPrice;//重新计算商品总价
    console.log(subtotal)
    $("." + listId).find(".subtotal").text('￥' + subtotal);//更新购物车总价

    totalPrice();

  } else {
    //否则将商品数量置为0
    $("." + listId).find(".num input").val(0);

    $("." + listId).find(".oar-money-total").text(0);
    totalPrice();

    $('.cart-list .' + listId).css("display", "none");//让商品消失
    $(".have-things").remove();//将购物车添加的存放商品的盒子移出
    $('.empty-cart').show();
  }
})