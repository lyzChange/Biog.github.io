//=================================轮播右边  tab切换
$('.tab-switch-title').on('mouseover','span',function(){
    $(this).addClass('tab-switch-active').siblings().removeClass('tab-switch-active');
    var index=$(this).index();
    $('.tab-switch-content').children().eq(index).css({"display":"block"}).siblings().css({"display":"none"});
})
//==================================输入容器 左右移动按钮
var dream=function (){
    function indexBanner(ele,prev,next){
        //获取三个元素
        var box=$(ele);
        var prev=$(prev);
        var next=$(next);
        //获取ul
        var ul=box.children('ul');
        //克隆第一个li标签  并添加到最后一位
        var li_close=ul.children();
        var cLi=ul.children('li').eq(0).clone();
        ul.append(cLi);
        //再获取li的数量
        var LI_LENGTH=ul.find('li').size();
        //获取li的宽度
        var LI_WIDTH=ul.children().eq(0).width();
        var UL_WIDTH=LI_LENGTH * LI_WIDTH;
        ul.width(UL_WIDTH);
        //设置一个索引  和  一个变量来储存定时器
        var index=0;
        var timer;
    
        //===============================轮播动画
        function move(){
            if(index == LI_LENGTH){
                ul.css({left:0})
                index=1;
            }
            if(index==-1){
                ul.css({left:-(LI_LENGTH-1)*LI_WIDTH});
                index=LI_LENGTH-2;
            }
            ul.stop().animate({
                left:-LI_WIDTH * index
            },500);
            pageBtn();
        }
        //=============================设置定时器
        function setTimer() {
            timer = setInterval(function() {
                index++;
                move();
            }, 3000);
        }
        setTimer();
        //===========================鼠标放上去轮播停止   否则执行
        ul.mouseover(function(){
            clearInterval(timer);
        })
        ul.mouseleave(function(){
            setTimer();
        })
        prev.mouseover(function(){
            clearInterval(timer);
        })
        prev.mouseleave(function(){
            setTimer();
        })
        next.mouseover(function(){
            clearInterval(timer);
        })
        next.mouseleave(function(){
            setTimer();
        })
        //==================================上一页 下一页按钮
        prev.click(function(){
            index--;
            move()
            pageBtn();
        })
        next.click(function(){
            index++;
            move();
            pageBtn();
        })
        //==================================分页按钮  图上的小圆圈
        var div=$("<div class='banner-nav'></div>");
        div.css({
            "height":20,
            "position":"absolute",
            "opacity": 0.5,
            "bottom":"10%",
            "left":"50%",
        })
        box.append(div);
        var left=0;
        li_close.each(function(){
            var span=$("<span></span>");
            span.css({
                "display":"inline-block",
                "width":0,
                "height":10,
                "border-radius":"50%",
                "border":"1px solid #666",
                "background":"#fff",
                "top":"50%",
                "margin-top":-5,
                "margin-left":left+=15,
            })
            div.append(span);
        })
        div.width(left+15);
        div.css({
            "margin-left":-(left+15)/2,
        })
    
        //======================================给分页按钮添加功能
        var btnLi=div.children();
        btnLi.eq(0).css({"backgroundColor":"red"})
        function pageBtn(){
            var cur=index;
            if(cur == LI_LENGTH-1){
                cur=0;
            }
            btnLi.eq(cur).css({"backgroundColor":"red"}).siblings().css({'backgroundColor':''});
            //console.log(btnLi.eq(cur));
        }
        //==========================================给按钮加上触摸事件
        btnLi.mouseover(function() {
            index = $(this).index();
            move();
          });
    }
    return {
        indexBanner:indexBanner
    }
}();
dream.indexBanner('.banner-img','.banner-img-prev','.banner-img-next');
//===================================================轮播II
$(function(){
    var banner = $(".con-top").children(".banner");
    $.each(banner,function(index,val){
        var banNumber = banner.eq(index);
        var ban = banNumber.children(".img");
        var LEN = ban.children("li").size();
        var WIDTH = ban.children("li").width();
        var cur = 0;
        var timer;
        function init() {
          ban.width((LEN + 1) * WIDTH);
          var newLi = ban.children("li").eq(0).clone();
          ban.append(newLi);
        }
        init();

        // ======================自动轮播动画
        function move() {
          if (cur == LEN + 1) {
            ban.css({ left: 0 });
            cur = 1;
          }
          if (cur == -1) {
            ban.css({ left: -LEN * WIDTH });
            cur = LEN - 1;
          }
          ban.stop().animate({ left: -WIDTH * cur }, 1000);
          pageBtn();
        }

        function setTimer() {
          timer = setInterval(function() {
            cur++;
            move();
          }, 2000);
        }
        // =====================鼠标放上，自动轮播停止
        banNumber.mouseover(function() {
          clearInterval(timer);
          prev.show();
          next.show();
        });
        // ======================鼠标拿下，自动轮播继续
        banNumber.mouseleave(function() {
         setTimer();
         prev.hide();
         next.hide();
       });

        // =========================分页按钮
        var btn = banNumber.children(".btn");
        var btnLi = btn.children();

        function pageBtn() {
          var index = cur;
          if (index == LEN) {
            index = 0;
          }
          btnLi.eq(index).addClass("active").siblings().removeClass("active");
        }

        btnLi.click(function() {
          cur = $(this).index();
          move();
        });

        // ===================上一页 下一页按钮
        var prev = banNumber.children(".prev");
        var next = banNumber.children(".next");
        prev.click(function() {
          cur--;
          move();
          pageBtn();
        });
        next.click(function() {
          cur++;
          move();
          pageBtn();
        });

    })
})
//=================================================城市二级联动
$(function(){
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
    $('.City').click(function(){
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
})

//================================================电梯导航
$(function(){
    $(document).scroll(function(){
        if($(document).scrollTop()>2000){
            $('.elevator-nav').show();
        }if($(document).scrollTop()<2000){
            $('.elevator-nav').hide();
        }else if(($(document).scrollTop()>8320)){
          $('.elevator-nav').hide();
        }
    })
    // $(document).scroll(function(){
    //     if(8000> $(document).scrollTop() >8000){
    //         $('.elevator-nav').fadeIn(500);
    //     }else{
    //         $('.elevator-nav').fadeOut(500);
    //     }
    // })
})
//=======================================下拉页面顶部出现搜索框
$(function(){
    $(document).scroll(function(){
        if($(document).scrollTop()>880){
            $('.top-search').slideDown(200);
        }else{
            $('.top-search').slideUp(200);
        }
    })
})
$(window).scroll(function(){
    //这是页面卷去的高度
    var scrolltop=$(document).scrollTop();
    //获得元素的高度
    var HEIGHT=540;
    var num=(scrolltop-2000)/HEIGHT;
    var cur=Math.floor(num);
    $('.elevator-nav').children().eq(cur).css({"background-color":"#a1c0f5"}).siblings().css({"background-color":"#fff"})
})
$(function(){
    var HEIGHT=540;
    $('.elevator-nav').on('click','span',function(e){
        var target=$(e.target);
        var index=target.index();
        $(document).scrollTop(HEIGHT*index+2000);
    })
})
//======================================点击购物车展开购物车页面
$(function(){
    var sss=true;
    $('.Shopping-Cart-Right').click(function(){
        Total('.commodity');
        if(sss){
            $('.right-sidebar').animate({
                "right":"276px",
            })
            $('.cart-html').animate({
                "right":"0",
            })
            sss=false;
        }else{
            $('.cart-html').animate({
                "right":"-276px",
            })
            $('.right-sidebar').animate({
                "right":"0px",
            })
            sss=true;
        }
    })
    //==================================点击X 闭合购物车页面
    $('.cart-html>h2>em').click(function(){
        $('.cart-html').animate({
            "right":"-276px",
        })
        $('.right-sidebar').animate({
            "right":"0px",
        })
    })
})

//========================================主页搜索框JSONP
$('.searchi-Ipt').keyup(function(){
    $('.search-data').fadeIn(500);
    console.log($('.search-data')[0]);
    var html=$('.search-data');
    var value=$(this).val();
    $.ajax({
        type: "get",
        url: "http://www.58pic.com/index.php",
        dataType: "jsonp",
        data: {
            m: 'ajaxSearch',
            a: "searchNew",
            kw: value,
        },
        success: function(data){
            var pp=""
/*             console.log(data)
            console.log(data.length); */
            for(var i= 0;i<data.length;i++){
                pp+="<p><a href='javascript:;'>"+data[i].keyword+"</a></p>";
              }
            html.html(pp);
        },
    });
})
$(document).click(function(){
    $('.search-data').fadeOut(500);
})

//=============================================每日劲爆品 轮播
$(function(){
    //获取容器
    var box=$('.verticabox');
    var WIDTH=box.width();
    //ul
    var ul=$('.verticabox>ul');
    //获取左右按钮
    var prev=$('.verticabox>.left-btn');
    var next=$('.verticabox>.right-btn');
    next.click(function(){
        ul.animate({
            "left":"-968px",
        })
        if(ul.css('left')==="-968px"){
            next.hide(500);
            prev.show(500)
        }
    })
    prev.click(function(){
        ul.animate({
            "left":"0px",
        })
        if(ul.css('left')==="0px"){
            prev.hide(500);
            next.show(500);
        }
    })
})

//===================================================我买推荐轮播
$(function(){
    //获取容器
    var box=$('.vt-img');
    var WIDTH=box.width();
    //ul
    var ul=$('.vt-img>ul');
    //获取左右按钮
    var prev=$('.vt-shift_left');
    var next=$('.vt-shift_right');
    next.click(function(){
        ul.animate({
            "left":"-1210px",
        })
        if(ul.css('left')==="-1210px"){
            next.hide(500);
            prev.show(500)
        }
    })
    prev.click(function(){
        ul.animate({
            "left":"0px",
        })
        if(ul.css('left')==="0px"){
            prev.hide(500);
            next.show(500);
        }
    })
})
//===========================================封装tab切换
function Tab(ele,ele2,event){
  var title=$(ele);
  var con=$(ele2);
  title.on(event,'div',function(){
    var cur=$(this).index();
    title.children().eq(cur).css({"border-bottom-color":"#a0bdf9"}).siblings().css({"border-bottom-color":"transparent"});
    con.children().eq(cur).slideDown(300).siblings().slideUp(300);
  })  
}
//1F---11F  tab切换
for(let i=1;i<12;i++){
  Tab("."+i+"f","."+i+"fcon",'mouseover')
}
//============================================tab切换结束

$('.add-info').on('click',function(){
    //父元素
    var parent=$(this).parent();
    //祖先元素
    var Ance=parent.parent();
    //获取img路径
    var url=Ance.children('div').children().attr("src");
    //简介
    var name=Ance.children('.description').text();
    //价格
    var data=Ance.children('.price').text();
    var price=data.match(/\d+.\d+|\d+/);
    text=url+","+price[0];
    var cc= getCookie(name);
    if(cc){ //如果存在该商品
        alert("已添加到购物车");
    }else{   //如果没有该商品
        setCookie(name,text)
        openGetCookie('.cart-wrap');
        Total('.commodity');

        //这里是元素 刚创建出来的时候  就给他们绑定事件 
        //点击商品的+号  增加商品数量
        $('.add-com').on('click',function(){
            var dom=$(this);
            var num=dom.prev();
            addNum(dom,num);
            Total('.commodity');
        })
        //点击商品的-号   减少商品数量
        $('.drop-com').on('click',function(){
            var dom=$(this);
            var num=dom.next();
            dropNum(dom,num);
        })
        //点击删除  删除dom 元素  和 cookie
        $('.del-com').on('click',function(){
            var del=$(this);
            var name=del.parent().prev();
            //删除Jq对象
            var Lin=name.parent().parent();
            Lin.remove();
            var cookieName=name.text();
            delCookie(cookieName);
            Total('.commodity');
        })
    }
})

//打开页面就执行的查询Cookie 操作
function openGetCookie(ele){
    var div=$(ele);
    var cartArr=document.cookie.split(";").map(a=>a.split('='));
    console.log(cartArr)
    if(cartArr.length>1){
      $('.Shopping-Cart-num').text(cartArr.length);
      var cartCon = "";
      for (let i = 0; i < cartArr.length; i++) {
        var title = cartArr[i][0];
        var imgUrl = cartArr[i][1].match(/.+jpg/);
        var Pirce = cartArr[i][1].match(/\d+.\d+|\d+$/);
        cartCon += "<div class='commodity'><img src=' " + imgUrl[0] + " '><div><p>" + title + "</p><span><span><i class='fa fa-cny' style='font-size:14px'></i></span><span class='commodity-price'>" + Pirce[0] + "</span><span class='drop-com'>-</span><span class='com_num'>1</span><span class='add-com'>+</span><button class='del-com'>删除</button></span></div></div>";
      }
      div.html("").append(cartCon);
      Total('.commodity');
    }else{
      div.html("买点东西吧");
    }
}
window.onload=openGetCookie('.cart-wrap');

//点击加减号来操作物品数量
$(function(){
    $('.add-com').on('click',function(){
        var dom=$(this);
        var num=dom.prev();
        addNum(dom,num);
        Total('.commodity');
    })
    $('.drop-com').on('click',function(){
        var dom=$(this);
        var num=dom.next();
        dropNum(dom,num);
        Total('.commodity');
    })
})
//封装加减运算
function addNum(ele,Numb){ //ele  为点击的加号   Numb为数量
    var num=Numb.text();
    num++
    Numb.text(num)
    Total('.commodity');
}
function dropNum(ele,Numb){ 
    var num=Numb.text();
    num--;
    if(num ==0){
        return false;
    }else{
        Numb.text(num);
    }
    Total('.commodity');
}
//点击删除  删除Cookie 和dom元素
$(function(){
    $('.del-com').on('click',function(){
        var del=$(this);
        var name=del.parent().prev();
        //删除Jq对象
        var Lin=name.parent().parent();
        Lin.remove();
        var cookieName=name.text();
        delCookie(cookieName);
        Total('.commodity');
        openGetCookie('.cart-wrap')
    })
})
//设置Cookie
function setCookie(name,text){
    var d = new Date();
    d.setTime(d.getTime()+(24*60*60*1000));
    var expires = "expires="+d.toGMTString();
    document.cookie =name+"="+text+"; "+expires;
}
//删除Cookie
function delCookie(name) { 
    var exp = new Date(); 
    exp.setTime(exp.getTime() - 1); 
    var cval=getCookie(name); 
    if(cval!=null) 
        document.cookie= name + "="+cval+";expires="+exp.toGMTString(); 
} 
//读取Cookie
function getCookie(cname){
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i=0; i<ca.length; i++) {
    var c = ca[i].trim();
    if (c.indexOf(name)==0) return c.substring(name.length,c.length);
  }
  return "";
}
//计算总价
function Total(ele){
    var big=$(ele);
    var total=0;
    var whole=0;
    for(var i=0;i<big.size();i++){
        var price=$(big[i]).find('.commodity-price').text();
        var nums=$(big[i]).find('.com_num').text();
        total += parseFloat(price)* parseInt(nums);
        whole +=(+nums);
    }
    $('.nnnnum').text(whole);
  $('.total-Price').text(parseFloat(total.toFixed(2)));
}

