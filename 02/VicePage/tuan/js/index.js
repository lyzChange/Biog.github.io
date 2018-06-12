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
//二级城市联动结束

//限制节点次数
function shearData(dom) {
  var value = dom.innerText;           //获取节点值
  var data = value.substring(0, 40) + '...';   //截取字符串前20位
  dom.innerHTML = data;
}
var content=document.getElementsByClassName('content');
for(let i=0;i<content.length;i++){
  shearData(content[i]);
}
//限制节点次数结束

//点击分类 发送ajax
function getData(dom){
  
}