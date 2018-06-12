//二级城市联动
$('.province-whole').on('click','span',function(){
    $('.province-whole').css({'display':"none"})
    var index=$(this).index();
    var province=$(this).text();
    $('.cur-province').text(province);
    $('.city-whole').children().eq(index).css({'display':"block"}).siblings().css({'display':'none'});
   /*  console.log($('.city-whole').children().eq(index)[0]); */
    $('.city-whole>div').on('click','span',function(){
        var province=$(this).text();
        $('.cur-city').text(province);
        $('.City').text(province);
    })
})
$('.choose-City').click(function(){
    $('.city-whole>div').css({'display':"none"});
    $('.province-whole').css({'display':"block"});
})
$('.close').click(function(){
    $('.mask').css({'display':'none'});
    $('.masks').css({'display':'none'});
})
$('.City').click(function(){
    $('.mask').css({'display':'block'});
    $('.masks').css({'display':'block'});
})
// 扫一扫下单
$(function(){
  $('.btn').click(function(){
   $('.bar-code').toggle();
  })
})
// 固定
$(window).scroll(function(){
  var tuanConFixed = document.getElementsByClassName('tuan-con-fixed')[0];
  var scrollTop = $(this).scrollTop();
  if (scrollTop >= 1400) {
    tuanConFixed.style.position = "fixed"
    tuanConFixed.style.zIndex = 99;
    tuanConFixed.style.top = 0;
  }else{
    tuanConFixed.style.position = "static";
    tuanConFixed.style.zIndex = 0;
    tuanConFixed.style.top = 0;
  }
})
