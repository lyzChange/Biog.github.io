// 轮播
var banner = document.getElementsByClassName('banner')[0];
var section = document.getElementsByClassName('section')[0];
var slide = section.children;

var SLIDE_LENGTH = slide.length;
var SLIDE_WIDTH = parseInt(getStyle(banner).width);
// console.log(SLIDE_LENGTH, SLIDE_WIDTH);
var prev = document.getElementById('prev');
var next = document.getElementById('next');
var pagination = document.getElementsByClassName('show')[0];
// console.log(pagination)
// console.log(prev,next);
// 克隆第一个li
var cSlide = slide[0].cloneNode(true);
section.appendChild(cSlide);
section.style.width = SLIDE_WIDTH * (SLIDE_LENGTH + 1) + "px";
var index = 0;
// 切换指示器
function changePagination(num) {
  var circle = pagination.children;
  for (var i = 0; i < circle.length; i++) {
    if (circle[i].className === "active") {
      circle[i].className = "";
    }
  }
  var num = (num === circle.length - 1) ? 0 : num;
  circle[num].className = "active";

}
// 点击指示器，跳到对应页 利用委托事件
pagination.onclick = function (e) {
  var e = e || window.event;
  var target = e.target || e.srcElement;
  if (target.className !== "active" && target.nodeName === "A") {
    var i = target.getAttribute('index');
    index = i;
    changePagination(index);
    move(section, -index * SLIDE_WIDTH);
  }
}
// 点击下一页  通过设置ul的left的值让ul移动
next.onclick = function () {
  if (index === SLIDE_LENGTH) {
    index = 0;
    section.style.left = 0;
  }
  index++;
  move(section, -index * SLIDE_WIDTH)
  // console.log(-index * SLIDE_WIDTH);
  changePagination(index);
  //  var left = parseInt(getStyle(section).left);
  //  var step = -index * SLIDE_WIDTH - left ;
  //  section.style.left = left + step + "px";
}
prev.onclick = function () {
  if (index === 0) {
    index = SLIDE_LENGTH;
    section.style.left = -index * SLIDE_WIDTH + "px";
  }
  index--;
  move(section, -index * SLIDE_WIDTH);
  changePagination(index);
}
setInterval(function () {
  next.click();
}, 3000);

function move(ele, target, callback) {
  var animation = requestAnimation();
  var cancel = cancelAnimation();
  cancel(ele.t);
  function fn() {
    var left = parseInt(getStyle(ele).left);
    var step = (target - left) / 10;
    step = step > 0 ? Math.ceil(step) : Math.floor(step);
    ele.style.left = left + step + "px";
    if (Math.abs(target - left) <= 1) {
      ele.style.left = target + "px";
    } else {
      ele.t = animation(fn);
    }
  }
  ele.t = animation(fn);
}
// 获取元素计算后的样式
function getStyle(ele) {
  return window.getComputedStyle ? getComputedStyle(ele, null) : ele.currentStyle;
}
// 动画时间间隔（提高性能）
function requestAnimation() {
  return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function (callback) {
    return setTimeout(function () {
      callback();
    }, 1000 / 60);
  }
}
// 清除定时器
function cancelAnimation() {
  return window.cancelAnimationFrame || window.webkitCancelAnimationFrame || window.mozCancelAnimationFrame || function (t) {
    clearTimeout(t);
  }
}

/* 懒加载 */
$('.shopbox img').lazyload({
  effect: "fadeIn",
  threshold: 500
})
// 内容轮播
function change(num){
  var list = document.getElementsByClassName('listm')[num];
  var contentPrev = document.getElementsByClassName('content-prev')[num];
  var contentNext = document.getElementsByClassName('content-next')[num];
  var pagination = document.getElementsByClassName('icon-page')[0];
  // console.log(pagination);
  var li = list.children;
  var LI_WIDTH = parseInt(getStyle(li[0]).width);
  var li1 = li[0].cloneNode(true);
  list.appendChild(li1);
  var li2 = li[1].cloneNode(true);
  list.appendChild(li2);
  var li3 = li[2].cloneNode(true);
  list.appendChild(li3);
  var li4 = li[3].cloneNode(true);
  list.appendChild(li4);
  var li5 = li[4].cloneNode(true);
  list.appendChild(li5);
  var LI_LENGTH = li.length;
  list.style.width = LI_LENGTH * LI_WIDTH + "px";
  // console.log(LI_LENGTH * LI_WIDTH)
  var x = 0;
  contentPrev.onclick = function () {
    if (x === 0) {
      x = 2;
      list.style.left = -x * LI_WIDTH * 5 + "px";
    }
    x--;
    move(list, -x * 5 * LI_WIDTH);
    changePagination(x);
  }
  contentNext.onclick = function () {
    if (x === 2) {
      x = 0;
      list.style.left = 0;
    }
    x++;
    move(list, -x * 5 * LI_WIDTH);
    changePagination(x);
  }
}
change(0);
change(1);
// 商品列表的样式
$(function(){
  $('.list-con').children('li').mouseenter(function(){
    // console.log($(this));
    $(this).addClass('active').siblings().removeClass('active');
    $(this).find('.icon-car').show();
    // 显示定时器
    $(this).find('.countdown').show();
    var _this = $(this);
    // console.log($(this).find('.icon-car'))
    $(this).find('.icon-car').click(function(){
      // console.log(this);
      _this.find('.icon-car').hide();
      _this.find('.icon-right').show();
    })
  });
  $('.list-con').children('li').mouseleave(function () {
    // console.log($(this));
    $(this).removeClass('active');
    $(this).find('.icon-car').hide();
    $(this).find('.icon-right').hide();
    // 定时器消失
    $(this).find('.countdown').hide();
  });
})
// 电梯导航
$(function(){
  //页面初始化的时候不显示导航
  var floatNav = $('.float-nav');
  floatNav.hide();
  var activeTitle = floatNav.find('.activeTitle');
  activeTitle.hide();
  // 获取所有楼层的top值，并存入数组
  var topArr = [];
  $('.shopbar').each(function(index){
    topArr.push($(this).offset().top);
  });
  console.log(topArr);//[685, 1059, 1433, 2101, 2769, 3437, 4105]
  $(window).scroll(function(){
    var scrollTop = $(this).scrollTop();
    // console.log(scrollTop);
    //在窗口向下滚动685px显示电梯导航
    if(scrollTop >= 685){
      floatNav.show();
    }
    if(scrollTop < 685){
      floatNav.hide();
    }
    if (scrollTop > 4150) {
      floatNav.hide();
    }
    //当页面滚动时，显示对他应楼层效果
    $.each(topArr,function(index,value){
      if(scrollTop > (value + 1)){
        // console.log(index,value);
        floatNav.find('li').eq(index).addClass('active').siblings().removeClass('active');
        floatNav.find('li').eq(index).find('.activeTitle').show();
        floatNav.find('li').eq(index).find('span').hide();
        floatNav.find('li').eq(index).siblings().find('.activeTitle').hide();
        floatNav.find('li').eq(index).siblings().find('span').show();
      }
    });
    floatNav.find('.bgNone').click(function(){
      $('html , body').animate({
        scrollTop: 0
      }, 2000);
    })
  });
});
// 限时抢购 定时器
$(function(){
  function time(time){
    var time = time;
    var countdown = $('.countdown');
    var span = countdown.find('span');
    if (time === 0) {
      $.each(span, function (index, value) {
        span.eq(index).text("已过期");
      })
    } else {
      setInterval(function () {
        time--;
        day = parseInt(time / (24 * 60 * 60));
        hours = parseInt((time % (24 * 60 * 60))/ (60 * 60));
        minutes = parseInt(((time % (24 * 60 * 60))%(60 * 60))/ 60);
        seconds = (((time % (24 * 60 * 60)) % (60 * 60)) % 60) % 60;
        $.each(span, function (index, value) {
          span.eq(index).text(day + "天" + hours + "时" + minutes + "分" + seconds + "秒");
        })
      }, 1000)
    }
  }
  time(12 * 24 * 60 * 60);
    
})
