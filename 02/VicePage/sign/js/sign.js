var sign = $(".sign");
var flag;
// =====================================================验证用和密码
sign.click(function (e){
    var user = $(".number");
    var psd = $(".psd");
    $('.info1').hide();
    psd.text();
    e.preventDefault();
    var check = $(".check-box").children("input").attr("checked");
    $.ajax({
        
        url:"user.php",
        type: "post",
        data:"userName=" + user.val() + "&password=" + psd.val(),
        success:function(data){
            flag = parseInt(data);
            if (flag == 1){
              $(".info1").text("用户名不存在").show();
            }
            if (flag == 2) {
              $(".sign").text("登陆成功,3秒后跳转至主页");
              setTimeout(function (){
                location.href = "../../index.php";
              },3000)
            }
/*             // 成功登陆
            if(flag == 1){
                $(".info1").text("").hide();
                $(".info2").text("").hide();
                if(check == "checked"){
                    cookie.set("user",user.val(),{expires:7},"localhost/womai");
                }else{
                    cookie.set("user",user.val());
                }
                location.href = "../../index.html";
                
            }
            // 密码错误
            if(flag == 2){
                $(".info2").text("密码错误").show();
            }
            // 用户名不存在
            if(flag == 3){
                $(".info1").text("用户名不存在，请先注册").show();
            } */
        }
    })
})
// ======================================================登陆
// var loginbar = $(".loginbar");
// var msg = loginbar.children(".msg");
// msg.text(user.val() + "您好，欢迎回来！");
// var user = cookie.get("user");
// if (user) {
//     msg.text(user).show();
// }
// =================================================点击注册按钮
var submit = $(".submit");
submit.click(function(e){
    e.preventDefault();
    location.href = "../register/register.html";
})