jQuery.validator.addMethod("checkNumber",function(value,element,param){
    var patt = /^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}$/;
    return this.optional(element) || (patt.test(value));
});
jQuery.validator.addMethod("checkName",function(value,element,param){
    var patt = /^[\u4E00-\u9FA5A-Za-z0-9_]{6,12}$/;
    return this.optional(element) || (patt.test(value));
});
jQuery.validator.addMethod("checkPassword", function (value, element, param) {
    var patt = /^\w{6,12}$/;
    return this.optional(element) || (patt.test(value));
})