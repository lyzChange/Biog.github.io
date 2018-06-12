$(document).ready(function(){
    // ==============================================表单验证(正则表达式)
    $("#commentForm").validate({
        rules:{
            checkNumber:{
                required: true,
                checkNumber: true,
            },
            userName:{
                required: true,
                checkName: true,
            },
            password:{
                required: true,
                checkPassword: true,
            },
            // confirm_password:{
            //     required: true,
            //     equalTo: "#password",
            // },
        },
        messages:{
            checkNumber:{
                required: "手机号不能为空",
                checkNumber: "请输入正确的手机号",
            },
            userName:{
                required:"请输入用户名",
                checkName:"请输入6-12位数字字母下划线组成的用户名",
            },
            password:{
                required:"请输入密码",
                checkPassword:"请输入字母、数字和下划线的6~18位有效密码",
            },
            // confirm_password:{
            //     required: "请输入密码",
            //     equalTo: "两次密码输入不一致",
            // },
            debug: true,
            errorPlacement: function (error, element) {
                // error.appendTo(element.parent())
                // // error.appendTo($(".error"));
            },
        //     errorContainer: "div.error",
        //     errorLabelContainer: $("#signupForm div.error"),
        //     wrapper: "span"  
        }
    })

    //================================================== 倒计时
    var btn = $(".send");
    var total;
    btn.click(function(e){
        e.preventDefault()
        total = 60;
        count();
    })
    function count(){
        var t = setInterval(function() {
            total--;
            btn.text(total + "s");
              if (total < 0) {
                clearInterval(t);
                btn.text("重新获取验证码");
              }
        }, 1000);
    }

    // ========================================验证手机号和用户名 (数据库)
    var phoneNumber = $(".number");
    phoneNumber.blur(function(){
        var number = $(this).val();
        var info1 = $(".info1");
        console.log(info1)
        $.ajax({
            url: "phoneNumber.php",
            type: "get",
            data: "phoneNumber=" + number,
            async: true,
            // dataType: "json",
            success: function(data){
                if(+data){
                    console.log(+data)
                    console.log(info1)
                    $(".info1").text("手机号已被绑定");
                    info1.show();
                }else if(+data == 0){
                    info1.hide();
                    info1.text("");
                }
            },
            error:function(){
                console.log(2);
            }
        })
    })
    var user = $(".user");
    // var userName = user.val();
    user.blur(function () {
        // var userName = $(this).val();
        var info2 = $(".info2");
        // console.log(info2)
        $.ajax({
            url: "username.php",
            type: "get",
            data: "userName=" + user.val(),
            async: true,
            // dataType: "json",
            success: function (data) {
                if (+data) {
                    console.log(+data)
                    // console.log(info2)
                    $(".info2").text("用户名已存在");
                    info2.show();
                } else if (+data == 0) {
                    info2.hide();
                    info2.text("");
                }
            },
            error: function () {
                console.log(2);
            }
        })
    })
    //=============================================== 检验两次输入的密码是否一致
    var checkPassword = $(".confirm-password");
    var psd = $(".password");
    checkPassword.blur(function(){
        var password = psd.val();
        var psdCheck = checkPassword.val();
        console.log(password, psdCheck);
        if (psdCheck !== password ){
            $(".info3").text("两次密码输入不相同")
            $(".info3").show();
        }else{
            $(".info3").text("")
            $(".info3").hide();
        }
    })
    // ======================================================提交保存信息
    var submit = $(".submit");
    submit.click(function(e){
        e.preventDefault();
        $.ajax({
            url:"doStore.php",
            type: "get",
            data:"phoneNumber=" + phoneNumber.val() + "&userName=" + user.val() + "&password=" + psd.val(),
            success: function(data){
                if(data === "ok"){
                    location.href = "../sign/sign.html";
                }
            }
        })
    })

})

