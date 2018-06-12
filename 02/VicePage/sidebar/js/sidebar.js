// 电梯导航
$(function(){
  //页面在初始化的时候不显示
  var fBox = $('.fBox');
  var ul=fBox.children();
  var etitle = $('.etitle');
  var li =$('.fBox').find('li');
  var span = li.eq(0);
  // console.log(li);
  etitle.hide();
  fBox.hide();


  var topArr = [];
  $(".floor").each(function (index) {
      topArr.push($(this).offset().top);
  });
  // console.log(topArr);

  //当页面滚动到500的时候电梯导航出现
  $(window).scroll(function(){
    var scrollTop=$(this).scrollTop();
    // console.log(scrollTop);
    if(scrollTop>=700){
      fBox.show();
    }
    if(scrollTop<700||scrollTop>6500){
      fBox.hide();
    }
    //当页面滚动相应的高度的时候导航到相应的地方
    $.each(topArr,function(index,value){
      if(scrollTop>value){
        li.eq(index).addClass("active ").siblings().removeClass('active'); 
      }
    });
  });

  //单击导航页面滚动到指定楼层
   li.click(function(){
     console.log(1);
     var cur = $(this).index();
     var top = $('.floor').eq(cur).offset().top;
     $(this).addClass('laddhover').siblings().removeClass("laddhover");
     $("html,body").animate({
       scrollTop:top
     },1000)
   });

   //移入li的时候加入laddhover样式
   ul.on('mouseover','li',function(){
    var index=$(this).index();
    ul.children().eq(index).addClass('laddhover').siblings().removeClass('laddhover');
  });
  // 移出的时候laddhove样式消失
  ul.on('mouseout','li',function(){
    var index=$(this).index();
    ul.children().eq(index).removeClass('laddhover');
  });
})


// 设置点击回到顶部
var rightsidebar =$('.right-sidebar');
var ul = rightsidebar.children('ul');
var li = rightsidebar.find('li');
$(function(){
  li.click(function(){
    $('html,body').animate({
      scrollTop :0
    },'slow')
  })
})
