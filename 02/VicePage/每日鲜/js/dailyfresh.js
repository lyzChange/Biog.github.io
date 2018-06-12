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
item1.mouseover(function(){
    $(this).children(".fa-angle-up").hide();
    $(this).children(".fa-angle-down").show();
    $(this).children(".detail").slideDown(300);
})
item1.mouseleave(function(){
    $(this).children(".fa-angle-up").show();
    $(this).children(".fa-angle-down").hide();
    $(this).children(".detail").slideUp(300);
})
item2.mouseover(function () {
    $(this).children(".fa-angle-up").hide();
    $(this).children(".fa-angle-down").show();
    $(this).children(".detail").slideDown(300);
})
item2.mouseleave(function () {
    $(this).children(".fa-angle-up").show();
    $(this).children(".fa-angle-down").hide();
    $(this).children(".detail").slideUp(300);
})
// 搜索接口
$(".searched").keyup(function(){
    $.ajax({
        type: "get",
        url: "http://www.58pic.com/index.php",
        dataType: "jsonp",
        data: {
            m: 'ajaxSearch',
            a: "searchNew",
            kw: "a",
        },
        success: function (data) {
            console.log(data);
        }
    })
})