/* 
    cookie.set()    
    cookie.remove()
    cookie.get()
*/

(function(window){
    var cookie = {
        set: function(cookie, value, opt){
            var opt = opt || {};
            var expires = opt.expires || "";
            var path = opt.path ? ";path=" + opt.path : "";
            var domain = opt.domain ? ";domain=" + opt.domain : "";
            var secure = opt.secure ? ";secure=true" : "";
            if(expires){
                var d = new Date();
                d.setTime(d.getTime() + expires * 24 * 60 * 60 * 1000);
                expires = ";expires=" + d.toUTCString();
            }
            document.cookie = cookie + "=" + value + expires + path + domain + secure;
        },
        remove: function(cookie, opt){
            var opt = opt || {};            
            var path = opt.path ? ";path=" + opt.path : "";
            var domain = opt.domain ? ";domain=" + opt.domain : "";
            var secure = opt.secure ? ";secure=true" : "";
            
            // 设置一个过期日期
            var d = new Date();
            d.setTime(d.getTime() - 100000);
            var expires = ";expires=" + d.toUTCString();
            document.cookie = cookie + "=1" + expires + path + domain + secure;
        },
        get: function(cookie){
            var cookie = cookie + "=";
            var cookies = document.cookie.split('; ');
            for(var i = 0;i<cookies.length;i++){
                if(cookies[i].indexOf(cookie) === 0){
                    return cookies[i].slice(cookie.length);
                }
            }
            return "";
        }
    }

    window.cookie = cookie;

}(window))
