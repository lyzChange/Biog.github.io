// ==================================侧栏开关
var slide=$(".slide");
var select = $(".content").children(".select");
var close = $(".close-slide").children(".closed");
slide.click(function(){
    select.animate({
        left: "235px",
    },300)
    $(".total").animate({
        right: "120px",
    },300)
    $(this).hide();
    $(".hiden").slideDown(500);
    $(".product-list").animate({
        left: "235px"
    },300)
})
close.click(function(){
    select.animate({
        left: "10px",
    }, 300)
    $(".hiden").hide();
    slide.slideDown(500);
    $(".product-list").animate({
        left: "-4px",
    }, 300)
})
// =========================================食品下拉列表
var item1 = $(".item2");
var item2 = $(".item3");
function show(ele){
    ele.mouseover(function(){
        $(this).children(".fa-angle-up").hide();
        $(this).children(".fa-angle-down").show();
        $(this).children(".detail").slideDown(300);
    })
}
function hide(ele) {
    ele.mouseleave(function(){
        $(this).children(".fa-angle-up").show();
        $(this).children(".fa-angle-down").hide();
        $(this).children(".detail").slideUp(300);
    })
    
}
show(item1);
show(item2);
hide(item1);
hide(item1);

// ==============================================================滚动加载
var page = 2;
var flag = true;
$(document).scroll(function(){
    var pageH = $(".product-list").offset().top + $(".product-list").height();
    var browserH = $(window).height();
    var scrollTop = $(window).scrollTop();
    if (browserH + scrollTop >= pageH){
        if(flag){
            loadData();
            page++;
        }
        flag = false;
    }
    function loadData() {
        $.ajax({
            url: "fresh.php",
            data: "page=" + page,
            type: "get",
            dataType: "json",
            success: function (data) {
                console.log(data)
                if(data.success){
                    showData(data.proList);
                }
            }
        })
    }
    function showData(data){
        $.each(data, function (index, val) {
            console.log(index, val)
            var html = "<a href=\"javascript:;\"><img src=\"images/wait.gif\" data-original=\"images/" + val.img +" \"></a\>";
            html += "<span class=\"price\">￥" + val.price + "</span\>";
            html += "<a href=\"javascript:;\" class=\"info\">" + val.msg + "</a\>";
            html += "<p class=\"buy\"\><a href=\"javascript:;\"class=\"buy1\">已评价<span>" + val.charge + "次</span></a\><a href=\"javascript:;\" class=\"buy2\"><i></i> 收藏</a\><a href=\"javascript:;\" class=\"buy3\"><i></i> 加入购物车</a\></p\>";
            html += "<span class=\"mark mrx\">每日鲜</span\><span class=\"mark qg\">抢购</span>";
            var li = $("<li class='item'></li>");
            li.html(html);
            $(".product-list .list").append(li);
        })
        flag = true;
    }
    $("img").lazyload({threshold: "100px"});
})

