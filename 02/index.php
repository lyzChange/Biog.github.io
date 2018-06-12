<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>我要买</title>
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/base.css">
    </head>
    <body>
        <!-- open in browser show div -->
<!--         <div class="Key">
        </div>
        <div class="Key-con">
            <img src="" alt="">
            <span>关闭</span>
        </div> -->
        <!-- 顶部广告层 -->
        <div class="activities">
            <img src="./images/img/0.jpg" alt="">
        </div>
        <!-- 右边侧栏 -->
        <div class="right-sidebar">
            <div>
                <div class="Shopping-Cart-Right Close-cart">
                    <span class="Shopping-Cart-icon"></span>
                    购物车
                    <span class="Shopping-Cart-num">0</span>
                </div>
            </div>
            <ul>
                <li>
                    <div>我的收藏</div>
                </li>
                <li>
                    <div>账户中心</div>
                </li>
                <li>
                    <div>
                        在线充值
                    </div>
                </li>
                <li>
                    <div style="width: 154px;height: 272px;margin-left: -80px;margin-top: -217px;background: url(./images/img/right-sidebar-code-bg.png);">
                       <img src="./images/img/right-sidebar-code.jpg" alt="" style="margin-left: -2px;margin-top: 70px;">
                    </div>
                </li>
                <li>
                    <div>
                        顶部&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                </li>
            </ul>
        </div>
        <!--  购物车小页面 -->
        <div class="cart-html">
            <h2>我的购物车 <em></em></h2>
            <div class="cart-wrap">
                <!-- 没商品时显示 -->
<!--                 <div class="no-commodity">
                    <img src="images/img/no-cart.jpg" alt="">
                    <p>购物车中还没有商品，赶紧选购吧！</p>
                    <a href="javascript:;">去首页看看</a>
                </div>   -->
            </div>
            <div class="bottom_div">
                <p>已选<span class="nnnnum">num</span>件<span>￥</span><span class="total-Price">00.00</span></p>
                <button>结算</button>
            </div>
        </div>
        <!-- 头部用户操作 -->
        <div class="header">
            <div class="topnav">
                <ul class="location-City">
                    <!-- <li><images/images/img src="images/images/img/index.png"></li> -->
                    <li class="icon-House"></li>
                    <li class="now-City">当前城市:</li>
                    <li class="City">巴丹吉林</li>
                    <li class="icon-down"></li>

                </ul>
                <ul class="loginbar clearfix">
                  <?php
                    session_start();
                    if(isset($_SESSION["name"])){
                        echo "<li><b><a>" .$_SESSION["name"]."</a> &nbsp; <a href='?logout'>注销</a></b></li>"; 
                    }else{
                        echo "<li class='msg'>hi,欢迎来到我买网！</li><li><a href='./VicePage/sign/sign.html'>登陆</a></li><li><a href='./VicePage/register/register.html'>注册</a></li>";
                    }
                    if(isset($_GET["logout"])){    //isset 检查变量是否设置
                        unset($_SESSION["name"]);  //unset 销毁指定变量
                        session_destroy();   //注销session
                    } 
                  ?>
                </ul>
                <ul class="nav-service">
                    <li class="my-Account">我的账户<span></span>
                        <div>
                            <p>您还没有登录！ <a href="javascript:;">登陆</a></p>
                            <span><a href="javascript:;">代付款订单</a></span>
                            <span><a href="javascript:;">我的消息</a></span>
                            <span><a href="javascript:;">代签收订单</a></span>
                            <span><a href="javascript:;">我的订单</a></span>
                            <span><a href="javascript:;">支付卡账户</a></span>
                            <span><a href="javascript:;">我的积分</a></span>
                            <span><a href="javascript:;">优惠券/团购卡</a></span>
                            <span><a href="javascript:;">我的收藏</a></span>
                            <span><a href="javascript:;">电子礼品卡</a></span>
                            <span><a href="javascript:;">兑换券</a></span>
                        </div>
                    </li>
                    <li class="Shopping"><a href="./VicePage/cart/cart.html"><span class="Shopping-Cart"></span><e style="color: #666;">购物车</e> <e style="color: #8ab825">0</e><e style="color: #666">件</e></a> </li>
                    <li class="lineY">|</li>
                    <li class="people-service">客户服务<span></span>
                        <div>
                            <span>帮助中心</span>
                            <span>新手上路</span>
                        </div>
                    </li>
                    <li class="lineY">|</li>
                    <li>大客户</li>
                    <li class="lineY">|</li>
                    <li class="icbc"><span></span></li>
                    <li class="icbc2"></li>
                    <li class="cmcc"><span></span></li>
                </ul>
                <div class="masks">
                    <div class="three"></div>
                    <div class="close">关闭</div>
                    <h3>热门城市</h3>
                    <ul>
                        <li>郑州</li>
                        <li>北京</li>
                        <li>上海</li>
                        <li>深圳</li>
                        <li>桂林</li>
                    </ul>
                    <hr>
                    <h3 class="province"><span class="choose-City">选择省份</span> <span class="cur-province">省</span>/<span class="cur-city">市</span></h3>
                    <div class="province-whole">
                        <span>河南</span>
                        <span>北京</span>
                        <span>上海</span>
                        <span>天津</span>
                        <span>重庆</span>
                        <span>河北</span>
                        <span>山西</span>
                        <span>内蒙</span>
                        <span>辽宁</span>
                        <span>吉林</span>
                        <span>黑龙</span>
                        <span>江苏</span>
                        <span>浙江</span>
                        <span>安徽</span>
                        <span>福建</span>
                        <span>江西</span>
                        <span>山东</span>
                        <span>湖北</span>
                        <span>湖南</span>
                        <span>广东</span>
                        <span>广西</span>
                        <span>海南</span>
                        <span>四川</span>
                        <span>贵州</span>
                        <span>云南</span>
                        <span>西藏</span>
                        <span>陕西</span>
                        <span>甘肃</span>
                        <span>宁夏</span>
                        <span>青海</span>
                        <span>新疆</span>
                        <span>其他</span>
                    </div>
                    <div class="city-whole">
                        <div>
                            <span>安阳</span>
                            <span>鹤壁</span>
                            <span>济源</span>
                            <span>焦作</span>
                            <span>开封</span>
                            <span>洛阳</span>
                            <span>漯河</span>
                            <span>濮阳</span>
                            <span>南阳</span>
                            <span>平顶山</span>
                            <span>商丘</span>
                            <span>三门峡</span>
                            <span>信仰</span>
                            <span>许昌</span>
                            <span>新乡</span>
                            <span>驻马店</span>
                            <span>郑州</span>
                            <span>周口</span>
                        </div>
                        <div>
                            <span>北京</span>
                            <span>东城</span>
                            <span>西城</span>
                            <span>崇文</span>
                            <span>宣武</span>
                            <span>朝阳</span>
                            <span>丰台</span>
                            <span>石景山</span>
                            <span>海淀</span>
                            <span>门头沟</span>
                            <span>房山</span>
                            <span>通州</span>
                            <span>顺义</span>
                            <span>昌平</span>
                            <span>大兴</span>
                            <span>平谷</span>
                            <span>怀柔</span>
                            <span>密云</span>
                            <span>延庆</span>
                        </div>
                        <div>
                            <span>上海</span>
                            <span>黄浦</span>
                            <span>卢湾</span>
                            <span>徐汇</span>
                            <span>长宁</span>
                            <span>静安</span>
                            <span>普陀</span>
                            <span>闸北</span>
                            <span>虹口</span>
                            <span>杨浦</span>
                            <span>闵行</span>
                            <span>宝山</span>
                            <span>嘉定</span>
                            <span>浦东</span>
                            <span>金山</span>
                            <span>松江</span>
                            <span>青浦</span>
                            <span>南汇</span>
                            <span>奉贤</span>
                            <span>崇明</span>
                        </div>
                        <div>
                            <span>和平</span>
                            <span>东丽</span>
                            <span>河东</span>
                            <span>西青</span>
                            <span>河西</span>
                            <span>津南</span>
                            <span>南开</span>
                            <span>北辰</span>
                            <span>河北</span>
                            <span>武清</span>
                            <span>红挢</span>
                            <span>塘沽</span>
                            <span>汉沽</span>
                            <span>大港</span>
                            <span>宁河</span>
                            <span>静海</span>
                            <span>宝坻</span>
                            <span>蓟县</span>
                        </div>
                        <div>
                            <span>万州</span>
                            <span>涪陵</span>
                            <span>渝中</span>
                            <span>大渡口</span>
                            <span>江北</span>
                            <span>沙坪坝</span>
                            <span>九龙坡</span>
                            <span>南岸</span>
                            <span>北碚</span>
                            <span>万盛</span>
                            <span>双挢</span>
                            <span>渝北</span>
                            <span>巴南</span>
                            <span>黔江</span>
                            <span>长寿</span>
                            <span>綦江</span>
                            <span>潼南</span>
                            <span>铜梁</span>
                            <span>大足</span>
                            <span>荣昌</span>
                            <span>壁山</span>
                            <span>梁平</span>
                            <span>城口</span>
                            <span>丰都</span>
                            <span>垫江</span>
                            <span>武隆</span>
                            <span>忠县</span>
                            <span>开县</span>
                            <span>云阳</span>
                            <span>奉节</span>
                            <span>巫山</span>
                            <span>巫溪</span>
                            <span>石柱</span>
                            <span>秀山</span>
                            <span>酉阳</span>
                            <span>彭水</span>
                            <span>江津</span>
                            <span>合川</span>
                            <span>永川</span>
                            <span>南川</span>
                        </div>
                        <div>
                            <span>石家庄</span>
                            <span>邯郸</span>
                            <span>邢台</span>
                            <span>保定</span>
                            <span>张家口</span>
                            <span>承德</span>
                            <span>廊坊</span>
                            <span>唐山</span>
                            <span>秦皇岛</span>
                            <span>沧州</span>
                            <span>衡水</span>
                        </div>
                        <div>
                            <span>太原</span>
                            <span>大同</span>
                            <span>阳泉</span>
                            <span>长治</span>
                            <span>晋城</span>
                            <span>朔州</span>
                            <span>吕梁</span>
                            <span>忻州</span>
                            <span>晋中</span>
                            <span>临汾</span>
                            <span>运城</span>
                        </div>
                        <div>
                            <span>呼和浩特</span>
                            <span>包头</span>
                            <span>乌海</span>
                            <span>赤峰</span>
                            <span>呼伦贝尔</span>
                            <span>通辽</span>
                            <span>乌兰察布</span>
                            <span>鄂尔多斯</span>
                            <span>巴彦淖尔</span>
                        </div>
                        <div>
                            <span>沈阳</span>
                            <span>大连</span>
                            <span>鞍山</span>
                            <span>抚顺</span>
                            <span>本溪</span>
                            <span>丹东</span>
                            <span>锦州</span>
                            <span>营口</span>
                            <span>阜新</span>
                            <span>辽阳</span>
                            <span>盘锦</span>
                            <span>铁岭</span>
                            <span>朝阳</span>
                            <span>葫芦岛</span>
                        </div>
                        <div>
                            <span>长春</span>
                            <span>吉林</span>
                            <span>四平</span>
                            <span>辽源</span>
                            <span>通化</span>
                            <span>白山</span>
                            <span>松原</span>
                            <span>白城</span>
                        </div>
                        <div>
                            <span>哈尔滨</span>
                            <span>齐齐哈尔</span>
                            <span>牡丹江</span>
                            <span>佳木斯</span>
                            <span>大庆</span>
                            <span>绥化</span>
                            <span>鹤岗</span>
                            <span>鸡西</span>
                            <span>黑河</span>
                            <span>双鸭山</span>
                            <span>伊春</span>
                            <span>七台河</span>
                        </div>
                        <div>
                            <span>南京</span>
                            <span>镇江</span>
                            <span>苏州</span>
                            <span>南通</span>
                            <span>扬州</span>
                            <span>盐城</span>
                            <span>徐州</span>
                            <span>连云港</span>
                            <span>常州</span>
                            <span>无锡</span>
                            <span>宿迁</span>
                            <span>泰州</span>
                            <span>淮安</span>
                        </div>
                        <div>
                            <span>杭州</span>
                            <span>宁波</span>
                            <span>温州</span>
                            <span>嘉兴</span>
                            <span>湖州</span>
                            <span>绍兴</span>
                            <span>金华</span>
                            <span>衢州</span>
                            <span>舟山</span>
                            <span>台州</span>
                            <span>丽水</span>
                        </div>
                        <div>
                            <span>合肥</span>
                            <span>芜湖</span>
                            <span>蚌埠</span>
                            <span>马鞍山</span>
                            <span>淮北</span>
                            <span>铜陵</span>
                            <span>安庆</span>
                            <span>黄山</span>
                            <span>滁州</span>
                            <span>宿州</span>
                            <span>池州</span>
                            <span>淮南</span>
                            <span>巢湖</span>
                            <span>阜阳</span>
                            <span>六安</span>
                            <span>宣城</span>
                            <span>亳州</span>
                        </div>
                        <div>
                            <span>福州</span>
                            <span>厦门</span>
                            <span>莆田</span>
                            <span>三明</span>
                            <span>泉州</span>
                            <span>漳州</span>
                            <span>南平</span>
                            <span>龙岩</span>
                            <span>宁德</span>
                        </div>
                        <div>
                            <span>南昌市</span>
                            <span>景德镇</span>
                            <span>九江</span>
                            <span>鹰潭</span>
                            <span>萍乡</span>
                            <span>新馀</span>
                            <span>赣州</span>
                            <span>吉安</span>
                            <span>宜春</span>
                            <span>抚州</span>
                            <span>上饶</span>
                        </div>
                        <div>
                            <span>济南</span>
                            <span>青岛</span>
                            <span>淄博</span>
                            <span>枣庄</span>
                            <span>东营</span>
                            <span>烟台</span>
                            <span>潍坊</span>
                            <span>济宁</span>
                            <span>泰安</span>
                            <span>威海</span>
                            <span>日照</span>
                            <span>莱芜</span>
                            <span>临沂</span>
                            <span>德州</span>
                            <span>聊城</span>
                            <span>滨州</span>
                            <span>菏泽</span>
                        </div>
                        <div>
                            <span>武汉</span>
                            <span>宜昌</span>
                            <span>荆州</span>
                            <span>黄石</span>
                            <span>荆门</span>
                            <span>黄冈</span>
                            <span>十堰</span>
                            <span>随州</span>
                            <span>咸宁</span>
                            <span>孝感</span>
                            <span>鄂州</span>
                            <span>襄阳</span>
                        </div>
                        <div>
                            <span>长沙</span>
                            <span>常德</span>
                            <span>株洲</span>
                            <span>湘潭</span>
                            <span>衡阳</span>
                            <span>岳阳</span>
                            <span>邵阳</span>
                            <span>益阳</span>
                            <span>娄底</span>
                            <span>怀化</span>
                            <span>郴州</span>
                            <span>永州</span>
                            <span>张家界</span>
                        </div>
                        <div>
                            <span>广州</span>
                            <span>深圳</span>
                            <span>珠海</span>
                            <span>汕头</span>
                            <span>东莞</span>
                            <span>中山</span>
                            <span>佛山</span>
                            <span>韶关</span>
                            <span>江门</span>
                            <span>湛江</span>
                            <span>茂名</span>
                            <span>肇庆</span>
                            <span>惠州</span>
                            <span>梅州</span>
                            <span>汕尾</span>
                            <span>河源</span>
                            <span>阳江</span>
                            <span>潮州</span>
                            <span>揭阳</span>
                            <span>云浮</span>
                            <span>清远</span>
                        </div>
                        <div>
                            <span>南宁</span>
                            <span>柳州</span>
                            <span>桂林</span>
                            <span>梧州</span>
                            <span>北海</span>
                            <span>崇左</span>
                            <span>来宾</span>
                            <span>防城港</span>
                            <span>钦州</span>
                            <span>贵港</span>
                            <span>玉林</span>
                            <span>贺州</span>
                            <span>百色</span>
                            <span>河池</span>
                        </div>
                        <div>
                            <span>海口</span>
                            <span>三亚</span>
                            <span>三沙</span>
                        </div>
                        <div>
                            <span>成都</span>
                            <span>绵阳</span>
                            <span>自贡</span>
                            <span>攀枝花</span>
                            <span>泸州</span>
                            <span>德阳</span>
                            <span>广元</span>
                            <span>遂宁</span>
                            <span>内江</span>
                            <span>乐山</span>
                            <span>资阳</span>
                            <span>宜宾</span>
                            <span>南充</span>
                            <span>达川</span>
                            <span>雅安</span>
                            <span>巴中</span>
                            <span>广安</span>
                            <span>眉山</span>
                        </div>
                        <div>
                            <span>贵阳</span>
                            <span>六盘水</span>
                            <span>遵义</span>
                            <span>安顺</span>
                            <span>铜仁</span>
                            <span>毕节</span>
                        </div>
                        <div>
                            <span>昆明</span>
                            <span>昭通</span>
                            <span>曲靖</span>
                            <span>玉溪</span>
                            <span>普洱</span>
                            <span>保山</span>
                            <span>丽江</span>
                            <span>临沧</span>
                        </div>
                        <div>
                            <span>拉萨</span>
                        </div>
                        <div>
                            <span>西安</span>
                            <span>铜川</span>
                            <span>宝鸡</span>
                            <span>咸阳</span>
                            <span>渭南</span>
                            <span>汉中</span>
                            <span>安康</span>
                            <span>商洛</span>
                            <span>延安</span>
                            <span>榆林</span>
                        </div>
                        <div>
                            <span>兰州</span>
                            <span>嘉峪关</span>
                            <span>金昌</span>
                            <span>白银</span>
                            <span>天水</span>
                            <span>酒泉</span>
                            <span>张掖</span>
                            <span>武威</span>
                            <span>定西</span>
                            <span>陇南</span>
                            <span>平凉</span>
                            <span>庆阳</span>
                        </div>
                        <div>
                            <span>银川</span>
                            <span>石嘴山</span>
                            <span>吴忠</span>
                            <span>固原</span>
                            <span>中卫</span>
                        </div>
                        <div>
                            <span>西宁</span>
                            <span>海东</span>
                        </div>
                        <div>
                            <span>乌鲁木齐</span>
                            <span>克拉玛依</span>
                        </div>
                        <div>
                            <span>澳门</span>
                            <span>香港</span>
                            <span>台湾</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 二级城市联动 -->
        <div class="mask">
        </div>
        <!-- LOGO层 -->
        <div class="search-content">
            <div>
                <img src="./images/img/logo.png" alt="">
                <img src="./images/img/Yogurt.jpg" alt="">
                <div class="search-Div">
                    <input type="text" class="searchi-Ipt" placeholder="银联扫码支付 满100立减20">
                    <button class="search-btn">搜索</button>
                    <span class="search-two"><a>高级搜索</a></span>
                    <ul>
                        <li><a href='javascript:;'>牛奶</a></li>
                        <li><a href='javascript:;'>每日坚果</a></li>
                        <li><a href='javascript:;'>火龙果</a></li>
                        <li><a href="javascript:;">红颜草莓</li>
                        <li><a href="javascript:;">冰淇淋</a></li>
                        <li><a href="javascript:;">实物我买卡</a></li>
                    </ul>
                    <div class="icon-search">
                    </div>
                    <div class="search-data">
                        
                    </div>
                </div>
                <img src="./images/img/phone-code.jpg" alt="" class="phone-code">
            </div>
        </div>
        <!-- 网站导航div -->
        <div class="web-nav">
            <div>
                <span class="pro-Type">
                    全部商品分类
                </span>
                <ul>
                    <li><a href="./VicePage/tuan/index.php">团购</a></li>
                    <li><a href="./VicePage/每日鲜/dailyfresh.html">每日鲜</a></li>
                    <li><a href="javascript:;">我买酒</a></li>
                    <li><a href="javascript:;">我买严选</a></li>
                    <li><a href="javascript:;">包邮直送</a></li>
                    <li><a href="./VicePage/global/global-purchase.php">全球购</a></li>
                </ul>
                <span class="mycart">
                    <span class="mycart-cart-icon"></span>
                    <a href="./VicePage/cart/cart.html">购物车</a>
                    <span class="mycart-cart-top"></span>
                    <div class="mycart-div">
                        <img src="images/img/cart-no.jpg" alt="">
                        <p>购物车中还没有商品,赶紧选购吧！</p>
                        <a href="javascript:;" id="xxxxx-link">去首页看看</a>
                    </div>
                </span>
            </div>
        </div>
        <!-- 轮播层 -->
        <div class="banner">
            <div>
                <div class="banner-left">
                    <ul>
                        <li>
                            <span></span>
                            <a href="./VicePage/sidebar/sidebar.php">肉禽水产</a>
                            <a href="javascript:;">水果蔬菜</a>
                            <div>
                                <ul>
                                    <li>
                                        <a href="javascript:;">精品水果</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">樱桃</a>
                                        <a href="javascript:;">奇异果</a>
                                        <a href="javascript:;">橙子</a>
                                        <a href="javascript:;">苹果</a>
                                        <a href="javascript:;">热带水果</a>
                                        <a href="javascript:;">葡萄提子</a>
                                        <a href="javascript:;">瓜</a>
                                        <a href="javascript:;">芒果</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">海鲜水产</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">虾类</a>
                                        <a href="javascript:;">鱼类</a>
                                        <a href="javascript:;">贝类</a>
                                        <a href="javascript:;">海参</a>
                                        <a href="javascript:;">蟹类</a>
                                        <a href="javascript:;">鲍类</a>
                                        <a href="javascript:;">干货类</a>
                                        <a href="javascript:;">海鲜礼盒</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">生肉禽蛋</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">进口肉食</a>
                                        <a href="javascript:;">羊肉</a>
                                        <a href="javascript:;">牛肉</a>
                                        <a href="javascript:;">猪肉</a>
                                        <a href="javascript:;">禽肉</a>
                                        <a href="javascript:;">蛋类</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">精品蔬菜</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">有机蔬菜</a>
                                        <a href="javascript:;">精品蔬菜</a>
                                        <a href="javascript:;">加工蔬菜</a>
                                        <a href="javascript:;">冷冻蔬菜</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">低温饮品</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">鲜奶</a>
                                        <a href="javascript:;">酸奶</a>
                                        <a href="javascript:;">黄油乳酪</a>
                                        <a href="javascript:;">低温果汁</a>
                                        <a href="javascript:;">低温饮品</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">精选熟食</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">饺子混沌</a>
                                        <a href="javascript:;">包子馒头</a>
                                        <a href="javascript:;">汤圆年糕</a>
                                        <a href="javascript:;">西式主食</a>
                                        <a href="javascript:;">西式糕点</a>
                                        <a href="javascript:;">中式糕点</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">熟食/佐餐</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">配菜</a>
                                        <a href="javascript:;">调味品</a>
                                        <a href="javascript:;">火锅丸类</a>
                                        <a href="javascript:;">腌制制品</a>
                                        <a href="javascript:;">熟肉肠类</a>
                                        <a href="javascript:;">即食菜品</a>
                                        <a href="javascript:;">火腿</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">冰淇淋</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">冰淇淋</a>
                                        <a href="javascript:;">雪糕</a>
                                        <a href="javascript:;">冰棍</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">礼品礼券</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">肉食礼盒</a>
                                        <a href="javascript:;">海鲜礼盒</a>
                                        <a href="javascript:;">生鲜提货券</a>
                                        <a href="javascript:;">特色礼品</a>
                                        <a href="javascript:;">礼卡</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <a href="javascript:;">进口生鲜</a>
                            <a href="javascript:;">进口水果</a>
                            <div>
                                <ul>
                                    <li>
                                        <a href="javascript:;">进口生鲜</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">进口海鲜</a>
                                        <a href="javascript:;">进口牛肉</a>
                                        <a href="javascript:;">进口猪肉</a>
                                        <a href="javascript:;">进口羊肉</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">进口水果</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">车厘子</a>
                                        <a href="javascript:;">奇异果</a>
                                        <a href="javascript:;">榴莲</a>
                                        <a href="javascript:;">进口橙子</a>
                                        <a href="javascript:;">进口苹果</a>
                                        <a href="javascript:;">葡萄/提子</a>
                                        <a href="javascript:;">火龙果</a>
                                        <a href="javascript:;">进口热带水果</a>
                                        <a href="javascript:;">香蕉</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <a href="javascript:;">进口食品</a>
                            <a href="javascript:;">进口直采</a>
                            <div>
                                <ul>
                                    <li>
                                        <a href="javascript:;">进口牛奶/奶粉</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">进口箱装奶</a>
                                        <a href="javascript:;">进口牛奶</a>
                                        <a href="javascript:;">进口成人奶粉</a>
                                        <a href="javascript:;">进口酸奶饮料</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">进口饼干/糕点</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">进口饼干</a>
                                        <a href="javascript:;">进口曲奇</a>
                                        <a href="javascript:;">进口威化</a>
                                        <a href="javascript:;">进口糕饼</a>
                                        <a href="javascript:;">进口巧克力</a>
                                        <a href="javascript:;">进口糖果</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">进口零食/膨化</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">进口薯片/玉米片</a>
                                        <a href="javascript:;">进口果冻布丁</a>
                                        <a href="javascript:;">进口休闲小零食</a>
                                        <a href="javascript:;">进口坚果</a>
                                        <a href="javascript:;">进口果干</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">进口饮料/水</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">进口水</a>
                                        <a href="javascript:;">进口果蔬汁</a>
                                        <a href="javascript:;">进口饮料</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">进口饮料冲调</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">进口早餐谷物</a>
                                        <a href="javascript:;">进口蜂蜜/柚子茶</a>
                                        <a href="javascript:;">进口咖啡/巧克力粉</a>
                                        <a href="javascript:;">进口茶/奶粉</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">进口餐厨</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">进口橄榄油/食用油</a>
                                        <a href="javascript:;">进口米/面</a>
                                        <a href="javascript:;">进口方便食品</a>
                                        <a href="javascript:;">进口调味品</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">进口海外直采</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">牛奶</a>
                                        <a href="javascript:;">糖果巧克力</a>
                                        <a href="javascript:;">饼干糕点</a>
                                        <a href="javascript:;">休闲零食</a>
                                        <a href="javascript:;">餐厨</a>
                                        <a href="javascript:;">水饮</a>
                                        <a href="javascript:;">酒</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">进口酒</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">进口葡萄酒</a>
                                        <a href="javascript:;">进口洋酒烈酒</a>
                                        <a href="javascript:;">进口啤酒</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">全球购</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">全球美食</a>
                                        <a href="javascript:;">母婴童区</a>
                                        <a href="javascript:;">美妆个户</a>
                                        <a href="javascript:;">营养健康</a>
                                        <a href="javascript:;">家居日用</a>
                                        <a href="javascript:;">国家地区</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <a href="javascript:;">酒</a>
                            <a href="javascript:;">饮料/冲饮</a>
                            <a href="javascript:;">茶</a>
                            <div>
                                <ul>
                                    <li>
                                        <a href="javascript:;">海外直采酒</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">葡萄酒</a>
                                        <a href="javascript:;">洋酒</a>
                                        <a href="javascript:;">啤酒</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">白酒/养生酒</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">精装高度酒</a>
                                        <a href="javascript:;">精装低度酒</a>
                                        <a href="javascript:;">简装高度酒</a>
                                        <a href="javascript:;">简装低度酒</a>
                                        <a href="javascript:;">整箱酒</a>
                                        <a href="javascript:;">礼盒</a>
                                        <a href="javascript:;">养生酒/黄酒</a>
                                        <a href="javascript:;">酒具/周边产品</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">葡萄酒</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">进口干红</a>
                                        <a href="javascript:;">进口干白/甜白</a>
                                        <a href="javascript:;">进口桃红/起泡酒</a>
                                        <a href="javascript:;">国产干红</a>
                                        <a href="javascript:;">国产干白/甜白</a>
                                        <a href="javascript:;">国产其他</a>
                                        <a href="javascript:;">名庄酒</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">啤酒</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">整箱啤酒</a>
                                        <a href="javascript:;">进口听装啤酒</a>
                                        <a href="javascript:;">进口瓶装啤酒</a>
                                        <a href="javascript:;">国产听装啤酒</a>
                                        <a href="javascript:;">国产瓶装啤酒</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">洋酒</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">单一麦芽威士忌</a>
                                        <a href="javascript:;">威士忌</a>
                                        <a href="javascript:;">白兰地/干邑</a>
                                        <a href="javascript:;">伏特加</a>
                                        <a href="javascript:;">朗姆酒</a>
                                        <a href="javascript:;">龙舌兰/金酒</a>
                                        <a href="javascript:;">预调酒/其他</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">水/饮料</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">包装饮用水</a>
                                        <a href="javascript:;">果蔬饮料</a>
                                        <a href="javascript:;">茶饮料</a>
                                        <a href="javascript:;">含乳饮料</a>
                                        <a href="javascript:;">植物蛋白饮料</a>
                                        <a href="javascript:;">凉茶</a>
                                        <a href="javascript:;">功能饮料</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">咖啡/冲调</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">咖啡</a>
                                        <a href="javascript:;">奶茶</a>
                                        <a href="javascript:;">蜂蜜/柚子茶</a>
                                        <a href="javascript:;">果味冲调品</a>
                                        <a href="javascript:;">其他冲调品</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">早餐谷物</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">谷物麦片</a>
                                        <a href="javascript:;">成人奶粉</a>
                                        <a href="javascript:;">芝麻糊</a>
                                        <a href="javascript:;">豆奶粉/豆浆粉</a>
                                        <a href="javascript:;">核桃粉</a>
                                        <a href="javascript:;">礼盒</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">茶</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">绿茶</a>
                                        <a href="javascript:;">乌龙茶/铁观音</a>
                                        <a href="javascript:;">普洱茶</a>
                                        <a href="javascript:;">黑茶</a>
                                        <a href="javascript:;">花草茶</a>
                                        <a href="javascript:;">养生茶</a>
                                        <a href="javascript:;">礼盒</a>
                                        <a href="javascript:;">白茶</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <a href="javascript:;">休闲零食</a>
                            <a href="javascript:;">地方特产</a>
                            <div>
                                <ul>
                                    <li>
                                        <a href="javascript:;">坚果炒货</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">松子</a>
                                        <a href="javascript:;">核桃</a>
                                        <a href="javascript:;">开心果/腰果</a>
                                        <a href="javascript:;">巴旦木</a>
                                        <a href="javascript:;">花生/瓜子/豆类</a>
                                        <a href="javascript:;">夏威夷果/碧根果</a>
                                        <a href="javascript:;">坚果礼盒</a>
                                        <a href="javascript:;">其他坚果</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">果脯蜜饯</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">枣</a>
                                        <a href="javascript:;">果干/梅类</a>
                                        <a href="javascript:;">葡萄干</a>
                                        <a href="javascript:;">山楂类</a>
                                        <a href="javascript:;">栗子</a>
                                        <a href="javascript:;">其他蜜饯</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">休闲零食</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">膨化食品</a>
                                        <a href="javascript:;">肉类小吃</a>
                                        <a href="javascript:;">海鲜零食</a>
                                        <a href="javascript:;">豆干/其他</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">饼干蛋糕</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">威化</a>
                                        <a href="javascript:;">饼干</a>
                                        <a href="javascript:;">面包/蛋糕</a>
                                        <a href="javascript:;">沙琪玛</a>
                                        <a href="javascript:;">华夫饼/派</a>
                                        <a href="javascript:;">其他</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">糖果巧克力</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">巧克力</a>
                                        <a href="javascript:;">口香糖/果冻/其他糖果</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">地方特产</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">京津冀晋</a>
                                        <a href="javascript:;">黑吉辽</a>
                                        <a href="javascript:;">云贵川</a>
                                        <a href="javascript:;">江浙鲁</a>
                                        <a href="javascript:;">湘鄂豫</a>
                                        <a href="javascript:;">陕甘宁新</a>
                                        <a href="javascript:;">桂琼</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <a href="javascript:;">营养健康</a>
                            <a href="javascript:;">奶制品</a>
                            <div>
                                <ul>
                                    <li>
                                        <a href="javascript:;">营养健康</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">调节免疫</a>
                                        <a href="javascript:;">美容养颜</a>
                                        <a href="javascript:;">骨骼健康</a>
                                        <a href="javascript:;">调节三高</a>
                                        <a href="javascript:;">肝肾养护</a>
                                        <a href="javascript:;">美体塑身</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">营养成分</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">蛋白粉</a>
                                        <a href="javascript:;">维生素</a>
                                        <a href="javascript:;">螺旋藻</a>
                                        <a href="javascript:;">鱼油/磷脂</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">滋补养生</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">阿胶</a>
                                        <a href="javascript:;">参茸滋补</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">常温乳品</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">纯牛奶</a>
                                        <a href="javascript:;">有机奶</a>
                                        <a href="javascript:;">酸奶</a>
                                        <a href="javascript:;">功能奶</a>
                                        <a href="javascript:;">风喂奶</a>
                                        <a href="javascript:;">早餐奶</a>
                                        <a href="javascript:;">儿童奶</a>
                                        <a href="javascript:;">果味/果粒奶</a>
                                        <a href="javascript:;">乳酸饮料</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <a href="javascript:;">粮油副食</a>
                            <a href="javascript:;">调味干货</a>
                            <div>
                                <ul>
                                    <li>
                                        <a href="javascript:;">食用油</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">花生油</a>
                                        <a href="javascript:;">玉米油</a>
                                        <a href="javascript:;">调和油</a>
                                        <a href="javascript:;">橄榄油</a>
                                        <a href="javascript:;">大豆油</a>
                                        <a href="javascript:;">香油</a>
                                        <a href="javascript:;">更多</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">米面杂粮</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">稻花香</a>
                                        <a href="javascript:;">泰米</a>
                                        <a href="javascript:;">大米</a>
                                        <a href="javascript:;">面粉烘焙</a>
                                        <a href="javascript:;">挂面</a>
                                        <a href="javascript:;">杂粮</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">南北干货</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">木耳</a>
                                        <a href="javascript:;">银耳</a>
                                        <a href="javascript:;">桂圆</a>
                                        <a href="javascript:;">海产干活</a>
                                        <a href="javascript:;">紫菜</a>
                                        <a href="javascript:;">粉条</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">有机食品</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">有机大米</a>
                                        <a href="javascript:;">干货</a>
                                        <a href="javascript:;">杂粮</a>
                                        <a href="javascript:;">面粉</a>
                                        <a href="javascript:;">挂面</a>
                                        <a href="javascript:;">酱油</a>
                                        <a href="javascript:;">调味品</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <a href="javascript:;">个户美妆</a>
                            <a href="javascript:;">家用清洁</a>
                            <div>
                                <ul>
                                    <li>
                                        <a href="javascript:;">个性护理</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">进口个护</a>
                                        <a href="javascript:;">洗发护发</a>
                                        <a href="javascript:;">染发造型</a>
                                        <a href="javascript:;">沐浴清洁</a>
                                        <a href="javascript:;">身体护理</a>
                                        <a href="javascript:;">口腔护理</a>
                                        <a href="javascript:;">女性护理</a>
                                        <a href="javascript:;">男性护理</a>
                                    </li> 
                                    <li>
                                        <a href="javascript:;">美容美妆</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">进口护肤品</a>
                                        <a href="javascript:;">面部清洁</a>
                                        <a href="javascript:;">面部护理</a>
                                        <a href="javascript:;">面膜面贴</a>
                                        <a href="javascript:;">礼盒套装</a>
                                        <a href="javascript:;">彩妆</a>
                                        <a href="javascript:;">香水</a>
                                        <a href="javascript:;">美容工具</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">生活日用</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">家庭清洁</a>
                                        <a href="javascript:;">纸巾湿巾</a>
                                        <a href="javascript:;">衣物清洁</a>
                                        <a href="javascript:;">女性护理</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <a href="javascript:;">厨具家纺</a>
                            <a href="javascript:;">家电3C</a>
                            <div>
                                <ul>
                                    <li>
                                        <a href="javascript:;">厨具及配件</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">刀具</a>
                                        <a href="javascript:;">餐具</a>
                                        <a href="javascript:;">保温杯/壶</a>
                                        <a href="javascript:;">烘焙工具</a>
                                        <a href="javascript:;">茶具</a>
                                        <a href="javascript:;">保险用品</a>
                                        <a href="javascript:;">一次性用品</a>
                                        <a href="javascript:;">厨房小工具</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">家纺</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">床品件套</a>
                                        <a href="javascript:;">床垫</a>
                                        <a href="javascript:;">被子</a>
                                        <a href="javascript:;">毛巾</a>
                                        <a href="javascript:;">蚊帐凉席</a>
                                        <a href="javascript:;">内裤</a>
                                        <a href="javascript:;">其他</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">生活用品/宠物</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">口罩</a>
                                        <a href="javascript:;">收纳用品</a>
                                        <a href="javascript:;">雨伞雨具</a>
                                        <a href="javascript:;">浴室用品</a>
                                        <a href="javascript:;">宠物食品</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">生活电器</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">卷发器</a>
                                        <a href="javascript:;">加湿器</a>
                                        <a href="javascript:;">净水器</a>
                                        <a href="javascript:;">吸尘器</a>
                                        <a href="javascript:;">电风扇</a>
                                        <a href="javascript:;">电器配件</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">个护健康</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">剃须刀</a>
                                        <a href="javascript:;">血压计</a>
                                        <a href="javascript:;">血糖仪</a>
                                        <a href="javascript:;">电吹风/电动牙刷</a>
                                        <a href="javascript:;">体温计</a>
                                        <a href="javascript:;">按摩器</a>
                                        <a href="javascript:;">健康秤</a>
                                        <a href="javascript:;">足浴盆</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">3C智能</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">手机</a>
                                        <a href="javascript:;">电脑</a>
                                        <a href="javascript:;">音响/耳机</a>
                                        <a href="javascript:;">智能穿戴</a>
                                        <a href="javascript:;">其他智能</a>
                                        <a href="javascript:;">办公文教</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <a href="javascript:;">礼品礼券</a>
                            <div>
                                <ul>
                                    <li>
                                        <a href="javascript:;">海鲜礼品卡券</a>
                                        <i class="fa fa-angle-right" style="font-size:14px"></i>
                                        <a href="javascript:;">综合礼品卡/礼包</a>
                                        <a href="javascript:;">大闸蟹礼品卡券</a>
                                        <a href="javascript:;">粮油类礼品卡券</a>
                                        <a href="javascript:;">蔬菜礼品卡券</a>
                                        <a href="javascript:;">肉类礼品卡券</a>
                                        <a href="javascript:;">面包礼品卡券</a>
                                        <a href="javascript:;">水果礼品卡券</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="banner-img">
                    <ul>
                        <li class="carousel-item"><a href="javascript:;"><img src="./images/img/banner/1.jpg" /></a></li>
                        <li class="carousel-item"><a href="javascript:;"><img src="./images/img/banner/2.jpg" /></a></li>
                        <li class="carousel-item"><a href="javascript:;"><img src="./images/img/banner/3.jpg" /></a></li>
                        <li class="carousel-item"><a href="javascript:;"><img src="./images/img/banner/4.jpg" /></a></li>
                        <li class="carousel-item"><a href="javascript:;"><img src="./images/img/banner/5.jpg" /></a></li>
                        <li class="carousel-item"><a href="javascript:;"><img src="./images/img/banner/6.jpg" /></a></li>
                        <li class="carousel-item"><a href="javascript:;"><img src="./images/img/banner/7.jpg" /></a></li>
                        <li class="carousel-item"><a href="javascript:;"><img src="./images/img/banner/8.jpg" /></a></li>
                        <li class="carousel-item"><a href="javascript:;"><img src="./images/img/banner/9.jpg" /></a></li>
                    </ul>
                    <span class="banner-img-prev"><i class="fa fa-angle-left" style="font-size:48px;"></i></span>
                    <span class="banner-img-next"><i class="fa fa-angle-right" style="font-size:48px;"></i></span>
                </div>
                <div class="banner-right">
                    <!-- tab切换 -->
                    <div class="tab-switch">
                        <span class="tab-switch-title">
                            <span class="tab-switch-active">服务公告</span>
                            <span >卡券专栏</span>
                            <span >VIP通道</span>
                        </span>
                        <div class="tab-switch-content">
                            <div style="display: block">
                                <ul>
                                    <li><a href="javascript:;">银联满100减20活动说明</a></li>
                                    <li><a href="javascript:;">工行爱购我买网满减...</a></li>
                                    <li><a href="javascript:;">包邮直达，全球购频道...</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul>
                                    <li><a href="javascript:;">我买卡简介</a></li>
                                    <li><a href="javascript:;">钱库优惠券实用小提示</a></li>
                                    <li><a href="javascript:;">优惠券使用说明</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul>
                                    <li><a href="javascript:;">2016年4月VIP会员专享...</a></li>
                                    <li><a href="javascript:;">2016年3月VIP会员专享...</a></li>
                                    <li><a href="javascript:;">2016年2月VIP会员专享...</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 小分类 -->
                    <div class="min-lead">
                        <div class="lead-btn">
                            <img src="./images/img/right/1.png" alt="">
                        </div>
                        <div class="lead-btn">
                            <img src="./images/img/right/2.png" alt="">
                        </div>
                        <div class="lead-btn">
                            <img src="./images/img/right/3.png" alt="">
                        </div>
                        <div class="lead-btn">
                            <img src="./images/img/right/4.png" alt="">
                        </div>
                        <div class="lead-btn">
                            <img src="./images/img/right/5.png" alt="">
                        </div>
                        <div class="lead-btn">
                            <img src="./images/img/right/6.png" alt="">
                        </div>
                        <div class="lead-btn">
                            <img src="./images/img/right/7.png" alt="">
                        </div>
                        <div class="lead-btn">
                            <img src="./images/img/right/8.png" alt="">
                        </div>
                        <div class="lead-btn">
                            <img src="./images/img/right/11.png" alt="" style="width: 65px;height: 60px;">
                        </div>
                    </div>
                   <!--  广告 -->
                   <div>
                       <img src="./images/img/right/12.jpg" alt="" style="width: 198px;">
                   </div>
                </div>
            </div>
        </div>
        <!-- 郝聪聪 -->
        <!-- 每日劲爆品 -->
        <div class="recommend">
        <!-- 安全宽度 -->
        </div>
        <div class="content">
          <!-- 每日劲爆品 -->
          <div class="day-recommend">
            <span class="fl">每日劲爆品</span>
            <img src="./images/img/1486951606620.jpg" alt="">
          </div> 
          <!-- 轻食有度 -->
          <div class="madden-pro clearfix">
            <div class="madden-pro-left">
                <div class="aImg">
                  <img src="./images/img/animation.png" alt="">
                </div>
              <a href="javascript:;" class="as">
                <img src="./images/img/1523244869459.jpg" alt="">
              </a>
            </div>
            <div class="verticabox clearfix"> 
              <ul>
                <li>
                  <a href="javascript:;">
                    <img src="./images/img/627244_1_pic270_6334.jpg" alt="" title="【新旧包装随机发货】时怡科学坚果会每日坚果B（组合装750g）30包">
                  </a>
                  <div class="inforBox">
                      <p class="txtBt">
                        <a href="#" title="【新旧包装随机发货】时怡科学坚果会每日坚果B（组合装750g）30包">【新旧包装随机发货】时怡科学坚果会每日坚果B（...</a>
                      </p>
                      <p class="txtInfor">
                        <a title="750g|一次购买，两种体验">750g|一次购买，两种体验</a>
                      </p>
                      <div class="buy-btn clearfix">
                        <span>￥</span>
                        <span class="bold">116</span>
                        <a href="javascript:;" style="color: #fff">去看看</a>
                      </div>
                  </div>
                </li>
                <li>
                  <a href="javascript:;">
                    <img src="./images/img/10473828_0_pic270_2687.jpg" alt="" title="【第二件半价】SUNSIDES 上质无乳糖法国进口牛奶200mL*24(低脂型)">
                  </a>
                  <div class="inforBox">
                      <p class="txtBt">
                        <a href="#" title="【新旧包装随机发货】时怡科学坚果会每日坚果B（组合装750g）30包">【第二件半价】SUNSIDES 上质无乳糖法国进口牛奶200mL*24(低脂型)</a>
                      </p>
                      <p class="txtInfor">
                        <a title="750g|一次购买，两种体验">200mL*24|细化营养好吸收</a>
                      </p>
                      <div class="buy-btn clearfix">
                        <span>￥</span>
                        <span class="bold">89</span>
                        <a href="javascript:;" style="color: #fff">去看看</a>
                      </div>
                  </div>
                </li>
                <li>
                  <a href="javascript:;">
                    <img src="./images/img/10677476_1_pic270_6098.jpg" alt="" title="【自营】艾他">
                  </a>
                  <div class="inforBox">
                    <p class="txtBt">
                      <a href="#" title="【新旧包装随机发货】时怡科学坚果会每日坚果B（组合装750g）30包">【新旧包装随机发货】时怡科学坚果会每日坚果B（...</a>
                    </p>
                    <p class="txtInfor">
                      <a title="750g|一次购买，两种体验">750g|一次购买，两种体验</a>
                    </p>
                      <div class="buy-btn clearfix">
                        <span>￥</span>
                        <span class="bold">116</span>
                        <a href="javascript:;" style="color: #fff">去看看</a>
                      </div>
                  </div>
                </li>
                <li>
                  <a href="javascript:;">
                    <img src="./images/img/627244_1_pic270_6334.jpg" alt="" title="【自营】完达山纯牛奶250ml*12盒/礼盒装">
                    </a>
                    <div class="inforBox">
                      <p class="txtBt">
                        <a href="#" title="【新旧包装随机发货】时怡科学坚果会每日坚果B（组合装750g）30包">【新旧包装随机发货】时怡科学坚果会每日坚果B（...</a>
                      </p>
                        <p class="txtInfor">
                          <a title="750g|一次购买，两种体验">750g|一次购买，两种体验</a>
                        </p>
                        <div class="buy-btn clearfix">
                          <span>￥</span>
                          <span class="bold">116</span>
                          <a href="javascript:;" style="color: #fff">去看看</a>
                        </div>
                    </div>
                </li>
                <li>
                  <a href="javascript:;">
                    <img src="./images/img/627244_1_pic270_6334.jpg" alt="" title="【自营】山萃混合坚果（每日坚果）25g*30">
                  </a>
                  <div class="inforBox">
                    <p class="txtBt">
                      <a href="#" title="【新旧包装随机发货】时怡科学坚果会每日坚果B（组合装750g）30包">【新旧包装随机发货】时怡科学坚果会每日坚果B（...</a>
                    </p>
                    <p class="txtInfor">
                      <a title="750g|一次购买，两种体验">750g|一次购买，两种体验</a>
                    </p>
                      <div class="buy-btn clearfix">
                        <span>￥</span>
                        <span class="bold">116</span>
                        <a href="javascript:;" style="color: #fff">去看看</a>
                      </div>
                  </div>
                </li>
                <li>
                  <a href="javascript:;">
                    <img src="./images/img/627244_1_pic270_6334.jpg" alt="" title="【自营】福临门五常长粒香5kg">
                  </a>
                  <div class="inforBox">
                    <p class="txtBt">
                      <a href="#" title="【新旧包装随机发货】时怡科学坚果会每日坚果B（组合装750g）30包">【新旧包装随机发货】时怡科学坚果会每日坚果B（...</a>
                    </p>
                    <p class="txtInfor">
                      <a title="750g|一次购买，两种体验">750g|一次购买，两种体验</a>
                    </p>
                      <div class="buy-btn clearfix">
                        <span>￥</span>
                        <span class="bold">116</span>
                        <a href="javascript:;" style="color: #fff">去看看</a>
                      </div>
                  </div>
                </li>
                <li>
                  <a href="javascript:;">
                    <img src="./images/img/627244_1_pic270_6334.jpg" alt="" title="【自营】世壮燕麦片（保健食品认证）350g*6">
                  </a>
                  <div class="inforBox">
                    <p class="txtBt">
                      <a href="#" title="【新旧包装随机发货】时怡科学坚果会每日坚果B（组合装750g）30包">【新旧包装随机发货】时怡科学坚果会每日坚果B（...</a>
                    </p>
                    <p class="txtInfor">
                      <a title="750g|一次购买，两种体验">750g|一次购买，两种体验</a>
                    </p>
                      <div class="buy-btn clearfix">
                        <span>￥</span>
                        <span class="bold">116</span>
                        <a href="javascript:;" style="color: #fff">去看看</a>
                      </div>
                  </div>
                </li>
                <li>
                  <a href="javascript:;">
                    <img src="./images/img/627244_1_pic270_6334.jpg" alt="" title="【包邮】琪悦 山西花糯玉米220g*10穗装">
                  </a>
                  <div class="inforBox">
                    <p class="txtBt">
                      <a href="#" title="【新旧包装随机发货】时怡科学坚果会每日坚果B（组合装750g）30包">【新旧包装随机发货】时怡科学坚果会每日坚果B（...</a>
                    </p>
                    <p class="txtInfor">
                      <a title="750g|一次购买，两种体验">750g|一次购买，两种体验</a>
                    </p>
                      <div class="buy-btn clearfix">
                        <span>￥</span>
                        <span class="bold">116</span>
                        <a href="javascript:;" style="color: #fff">去看看</a>
                      </div>
                  </div>
                </li>
              </ul>
              <i class="icon left-btn"></i>
              <i class="icon right-btn"></i>       
          </div>
        </div>
        </div>
        <!-- 我买特色 -->
        <div class="recommend">
            <div class="content">
            <div class="day-recommend">
                <span class="fl">每日劲爆品</span>
                <img src="./images/img/1486951561625.jpg" alt="">
            </div>
            <div class="feature-pro clearfix">
                <div class="adv1">
                <a href="javascript:;">
                    <img src="./images/img/1523417235553.jpg" alt="">
                </a>
                </div>
                <div class="adv2 clearfix">
                <ul class="clearfix">
                    <a href="javascript:;">
                    <li><img src="./images/img/1522409351614.jpg" alt=""></li>
                    </a>
                    <a href="javascript:;">
                    <li><img src="./images/img/1523268508014.jpg" alt=""></li>
                    </a>
                    <a href="javascript:;">
                    <img src="./images/img/1522231039572.jpg" alt="">
                    </a>
                </ul>
                </div>
                <div class="adv3">
                <a href="javascript:;">
                    <img src="./images/img/1522737152032.jpg" alt="">
                </a>
                <ul class="clearfix">
                    <a href="javascript:;">
                    <li class="border-d">
                        <img src="./images/img/1522312415947.jpg" alt=" ">
                    </li>
                    </a>
                    <a href="javascript:;">
                    <li class="border-d">
                        <img src="./images/img/1522409351614.jpg" alt=" ">
                    </li>
                    </a>
                </ul>
                </div>
            </div>
            </div>
        </div>  
        <!-- main部分 -->
        <div class="body-content clearfix">
            <!-- 楼梯导航 -->
          <div class="float-nav" style="margin-top: -214.5px;margin-left:-723px;display: block;">
            <div class="elevator-nav">
                <span>进口食品</span>
                <span>生鲜日配</span>
                <span>时令果蔬</span>
                <span>进口食品</span>
                <span>休闲保健</span>
                <span>酒饮冲调</span>
                <span>粮油副食</span>
                <span>母婴玩具</span>
                <span>个护清洁</span>
                <span>家具家电</span>
                <span>全球购</span>
            </div>
          </div>
            <!-- 于振坤 -->
            <div class="vt_content clear">
		        <h2 class="ibuy_vt">我买推荐</h2>
                <img src="./images/img/1486951585602.jpg">
            </div>
            <div class="vt-img">
                <ul class="vt-img_ul clear">
                    <li class="vt_ul_li1"><img src="./images/img/1522408366840.jpg"></li>
                    <li class="vt_ul_lit"><img src="./images/img/1522409508882.jpg"></li>
                    <li class="vt_ul_lit"><img src="./images/img/1522741875100.jpg"></li>
                    <li class="vt_ul_lit"><img src="./images/img/1523348184089.jpg"></li>
                    <li class="vt_ul_lit"><a href="javascript:;"><img src="./images/img/1523352020266.jpg"></a></li>
                    <li class="vt_ul_lit"><a href="javascript:;"><img src="./images/img/1523437934748.jpg"></a></li>
                    <li class="vt_ul_lit"><a href="javascript:;"><img src="./images/img/1523239763508.jpg"></a></li>
                    <li class="vt_ul_lit"><a href="javascript:;"><img src="./images/img/1523268652055.jpg"></a></li>
                    <li class="vt_ul_lit"><a href="javascript:;"><img src="./images/img/1522381398269.jpg"></a></li>
                </ul>
                <div class="vt-shift_left prev"><i class="fa fa-angle-left"></i></div>
                <div class="vt-shift_right next"><i class="fa fa-angle-right"></i></div>
            </div>
            <div class="vt_btm">
                <img src="./images/img/1522735938123.jpg">
                <img src="./images/img/1522409571693.jpg">
                <img src="./images/img/1522406028768.jpg">
            </div>
            <!-- floor 杜冰-->
            <!-- floor1 进口食品 -->
            <div class="floor floor1 clearfix">
                <!-- f1开始 -->
                <div class="floor-l">
                    <h3 class="detail"><i></i>进口食品</h3>
                    <div class="floor-l-cont">
                        <div class="f-info"><span>1F</span></div>
                        <ul class="floor-list">
                            <li class="item item1"><a href="javascript:;"><i class="floor-icon"></i>进口食品</a></li>
                            <li class="item item2"><a href="javascript:;"><i class="floor-icon"></i>牛奶乳品</a></li>
                            <li class="item item3"><a href="javascript:;"><i class="floor-icon"></i>坚果果干</a></li>
                            <li class="item item4"><a href="javascript:;"><i class="floor-icon"></i>饮料及水</a></li>
                            <li class="item item5"><a href="javascript:;"><i class="floor-icon"></i>饼干糕点</a></li>
                            <li class="item item6"><a href="javascript:;"><i class="floor-icon"></i>进口餐厨</a></li>
                        </ul>
                        <a href="javascript:;"><img src="./images/img/f1.jpg" alt=""></a> 
                    </div>
                    <div class="mask">
                        <img src="./images/img/animation.png" alt="">
                    </div>
                </div>
                <div class="floor-r">
                    <div class="menu clearfix 1f">
                        <div class="selected">精选推荐</div>
                        <div class="hot">热卖推荐</div>
                    </div>
                    <div class="1fcon">
                      <div class="selected-content content">
                          <div class="con-top clearfix">
                              <div class="product pro1">
                                  <div class="img">
                                      <img src="./images/img/f1-r-pro1.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】Mueloliva品特级初</p>
                                  <p class="price"><span>￥</span>49.9 <span class="add-cart-1f add-info">加入购物车</span></p>
                              </div>
                              <div class="banner">
                                  <ul class="img">
                                      <li><img src="./images/img/f1-r-ban1.jpg" alt=""></li>
                                      <li><img src="./images/img/f1-r-ban2.jpg" alt=""></li>
                                  </ul>
                                  <ul class="btn">
                                      <li class="active"></li>
                                      <li></li>
                                  </ul>
                                  <div class="prev"><i class="fa fa-angle-left"></i></div>
                                  <div class="next"><i class="fa fa-angle-right"></i></div>
                              </div>
                              <div class="product pro2">
                                  <div class="img">
                                      <img src="./images/img/f1-r-pro2.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮海外直采】Nescafe雀巢</p>
                                  <p class="price"><span>￥</span>58 <span class="add-cart-1f add-info">加入购物车</span></p>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f1-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮海外直采】澳洲Tropical</p>
                                  <p class="price">
                                      <span>￥</span>39.9 <span class="add-cart-1f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f1-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】Mcvities卖维他消化饼干</p>
                                  <p class="price">
                                      <span>￥</span>19.9 <span class="add-cart-1f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f1-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】欧德堡超高温处理全脂</p>
                                  <p class="price">
                                      <span>￥</span>59 <span class="add-cart-1f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f1-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮海外直采】Fan纯果芬橙</p>
                                  <p class="price">
                                      <span>￥</span>49 <span class="add-cart-1f add-info">加入购物车</span></p>
                              </div>
                          </div>
                      </div>
                      <div class="hot-content content">
                          <div class="con-top clearfix">
                              <div class="product pro1">
                                  <div class="img">
                                      <img src="./images/img/f1-r-pro1.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】Mueloliva品特级初</p>
                                  <p class="price"><span>￥</span>49.9 <span class="add-cart-1f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f1-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】Mueloliva品特级初</p>
                                  <p class="price">
                                      <span>￥</span>49.9 <span class="add-cart-1f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f1-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮海外直采】Nescafe雀巢</p>
                                  <p class="price">
                                      <span>￥</span>58 <span class="add-cart-1f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro2">
                                  <div class="img">
                                      <img src="./images/img/f1-r-pro2.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮海外直采】Nescafe雀巢</p>
                                  <p class="price"><span>￥</span>58 <span class="add-cart-1f add-info">加入购物车</span></p>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f1-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮海外直采】Nescafe雀巢</p>
                                  <p class="price">
                                      <span>￥</span>58 <span class="add-cart-1f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f1-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮海外直采】Nescafe雀巢</p>
                                  <p class="price">
                                      <span>￥</span>58 <span class="add-cart-1f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f1-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮海外直采】Nescafe雀巢</p>
                                  <p class="price">
                                      <span>￥</span>58 <span class="add-cart-1f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f1-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮海外直采】Nescafe雀巢</p>
                                  <p class="price">
                                      <span>￥</span>58 <span class="add-cart-1f add-info">加入购物车</span></p>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            <!-- floor2 生鲜日配 -->
            <div class="floor floor2 clearfix">
                <!-- f1开始 -->
                <div class="floor-l">
                    <h3 class="detail"><i></i>生鲜日配</h3>
                    <div class="floor-l-cont">
                        <div class="f-info"><span>2F</span></div>
                        <ul class="floor-list">
                            <li class="item item1"><a href="javascript:;"><i class="floor-icon"></i>虾蟹类</a></li>
                            <li class="item item2"><a href="javascript:;"><i class="floor-icon"></i>鱼类</a></li>
                            <li class="item item3"><a href="javascript:;"><i class="floor-icon"></i>进口肉类</a></li>
                            <li class="item item4"><a href="javascript:;"><i class="floor-icon"></i>国产肉类</a></li>
                            <li class="item item5"><a href="javascript:;"><i class="floor-icon"></i>低温奶品</a></li>
                            <li class="item item6"><a href="javascript:;"><i class="floor-icon"></i>精选主食</a></li>
                        </ul>
                        <a href="javascript:;"><img src="./images/img/f2.jpg" alt=""></a> 
                    </div>
                    <div class="mask">
                        <img src="./images/img/animation.png" alt="">
                    </div>
                </div>
                <div class="floor-r">
                    <div class="menu clearfix 2f">
                        <div class="selected">精选推荐</div>
                        <div class="hot">热卖推荐</div>
                    </div>
                    <div class="2fcon">
                      <div class="selected-content content">
                        <div class="con-top clearfix">
                            <div class="product pro1">
                                <div class="img">
                                    <img src="./images/img/f2-r-pro1.jpg" alt="">
                                </div>
                                <p class="description">【自营】万年豚有机土猪猪肉精</p>
                                <p class="price"><span>￥</span>59 <span class="add-cart-2f add-info">加入购物车</span></p>
                            </div>
                            <div class="banner">
                                <ul class="img">
                                    <li><img src="./images/img/f2-r-ban1.jpg" alt=""></li>
                                    <li><img src="./images/img/f1-r-ban2.jpg" alt=""></li>
                                </ul>
                                <ul class="btn">
                                    <li class="active"></li>
                                    <li></li>
                                </ul>
                                <div class="prev"><i class="fa fa-angle-left"></i></div>
                                <div class="next"><i class="fa fa-angle-right"></i></div>
                            </div>
                            <div class="product pro2">
                                <div class="img">
                                    <img src="./images/img/f2-r-pro2.jpg" alt="">
                                </div>
                                <p class="description">【自营】宾格瑞 香蕉味冰棒</p>
                                <p class="price"><span>￥</span>7.9  <span class="add-cart-2f add-info">加入购物车</span></p>
                            </div>
                        </div>
                        <div class="con-bottom clearfix">
                            <div class="product pro3">
                                <div class="img">
                                    <img src="./images/img/f2-r-pro3.jpg" alt="">
                                </div>
                                <p class="description">【自营】恒都牛软肋排1000g袋</p>
                                <p class="price">
                                    <span>￥</span>58  <span class="add-cart-2f add-info">加入购物车</span></p>
                            </div>
                            <div class="product pro4">
                                <div class="img">
                                    <img src="./images/img/f2-r-pro4.jpg" alt="">
                                </div>
                                <p class="description">【自营】中粮悠采 跳跳兔奶黄包50g*6</p>
                                <p class="price">
                                    <span>￥</span>20  <span class="add-cart-2f add-info">加入购物车</span></p>
                            </div>
                            <div class="product pro5">
                                <div class="img">
                                    <img src="./images/img/f2-r-pro5.jpg" alt="">
                                </div>
                                <p class="description">【自营】品鲜大道轮切三文鱼排</p>
                                <p class="price">
                                    <span>￥</span>49.9  <span class="add-cart-2f add-info">加入购物车</span></p>
                            </div>
                            <div class="product pro6">
                                <div class="img">
                                    <img src="./images/img/f2-r-pro6.jpg" alt="">
                                </div>
                                <p class="description">【自营】西道 森林级自然 放养</p>
                                <p class="price">
                                    <span>￥</span>166  <span class="add-cart-2f add-info">加入购物车</span></p>
                            </div>
                        </div>
                      </div>
                      <div class="hot-content content">
                          <div class="con-top clearfix">
                              <div class="product pro1">
                                  <div class="img">
                                      <img src="./images/img/f2-r-pro1.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】万年豚有机土猪猪肉精</p>
                                  <p class="price"><span>￥</span>59  <span class="add-cart-2f add-info">加入购物车</span></p>
                              </div>
                                  <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f2-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】品鲜大道轮切三文鱼排</p>
                                  <p class="price">
                                      <span>￥</span>49.9  <span class="add-cart-2f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f2-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】西道 森林级自然 放养</p>
                                  <p class="price">
                                      <span>￥</span>166  <span class="add-cart-2f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro2">
                                  <div class="img">
                                      <img src="./images/img/f2-r-pro2.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】宾格瑞 香蕉味冰棒</p>
                                  <p class="price"><span>￥</span>7.9  <span class="add-cart-2f add-info">加入购物车</span></p>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f2-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】恒都牛软肋排1000g袋</p>
                                  <p class="price">
                                      <span>￥</span>58  <span class="add-cart-2f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f2-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】中粮悠采 跳跳兔奶黄包50g*6</p>
                                  <p class="price">
                                      <span>￥</span>20  <span class="add-cart-2f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f2-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】品鲜大道轮切三文鱼排</p>
                                  <p class="price">
                                      <span>￥</span>49.9  <span class="add-cart-2f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f2-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】西道 森林级自然 放养</p>
                                  <p class="price">
                                      <span>￥</span>166  <span class="add-cart-2f add-info">加入购物车</span></p>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            <!-- floor3 时令果蔬 -->        
            <div class="floor floor3 clearfix">
                <!-- f1开始 -->
                <div class="floor-l">
                    <h3 class="detail"><i></i>时令果蔬</h3>
                    <div class="floor-l-cont">
                        <div class="f-info"><span>3F</span></div>
                        <ul class="floor-list">
                            <li class="item item1"><a href="javascript:;"><i class="floor-icon"></i>苹果</a></li>
                            <li class="item item2"><a href="javascript:;"><i class="floor-icon"></i>橙子</a></li>
                            <li class="item item3"><a href="javascript:;"><i class="floor-icon"></i>直采水果</a></li>
                            <li class="item item4"><a href="javascript:;"><i class="floor-icon"></i>进口水果</a></li>
                            <li class="item item5"><a href="javascript:;"><i class="floor-icon"></i>国产水果</a></li>
                            <li class="item item6"><a href="javascript:;"><i class="floor-icon"></i>精品蔬菜</a></li>
                        </ul>
                        <a href="javascript:;"><img src="./images/img/f3.jpg" alt=""></a> 
                    </div>
                    <div class="mask">
                        <img src="./images/img/animation.png" alt="">
                    </div>
                </div>
                <div class="floor-r">
                    <div class="menu clearfix 3f">
                        <div class="selected">精选推荐</div>
                        <div class="hot">热卖推荐</div>
                    </div>
                    <div  class="3fcon">
                      <div class="selected-content content">
                        <div class="con-top clearfix">
                            <div class="product pro1">
                                <div class="img">
                                    <img src="./images/img/f3-r-pro1.jpg" alt="">
                                </div>
                                <p class="description">【自营】意大利佳沛绿奇异果</p>
                                <p class="price"><span>￥</span>78 <span class="add-cart-3f add-info">加入购物车</span></p>
                            </div>
                            <div class="banner">
                                <ul class="img">
                                    <li><img src="./images/img/f3-r-ban1.jpg" alt=""></li>
                                    <li><img src="./images/img/f3-r-ban2.jpg" alt=""></li>
                                </ul>
                                <ul class="btn">
                                    <li class="active"></li>
                                    <li></li>
                                </ul>
                                <div class="prev"><i class="fa fa-angle-left"></i></div>
                                <div class="next"><i class="fa fa-angle-right"></i></div>
                            </div>
                            <div class="product pro2">
                                <div class="img">
                                    <img src="./images/img/f3-r-pro2.jpg" alt="">
                                </div>
                                <p class="description">【自营】[安翠]不知火柑 丑柑</p>
                                <p class="price"><span>￥</span>49 <span class="add-cart-3f add-info">加入购物车</span></p>
                            </div>
                        </div>
                        <div class="con-bottom clearfix">
                            <div class="product pro3">
                                <div class="img">
                                    <img src="./images/img/f3-r-pro3.jpg" alt="">
                                </div>
                                <p class="description">【自营】精选甘肃静宁红富士苹果</p>
                                <p class="price">
                                    <span>￥</span>68 <span class="add-cart-3f add-info">加入购物车</span></p>
                            </div>
                            <div class="product pro4">
                                <div class="img">
                                    <img src="./images/img/f3-r-pro4.jpg" alt="">
                                </div>
                                <p class="description">【中粮海外直采】比利时啤梨</p>
                                <p class="price">
                                    <span>￥</span>69 <span class="add-cart-3f add-info">加入购物车</span></p>
                            </div>
                            <div class="product pro5">
                                <div class="img">
                                    <img src="./images/img/f3-r-pro5.jpg " alt="">
                                </div>
                                <p class="description">【自营】[安翠]泰国椰青9粒箱</p>
                                <p class="price">
                                    <span>￥</span>88 <span class="add-cart-3f add-info">加入购物车</span></p>
                            </div>
                            <div class="product pro6">
                                <div class="img">
                                    <img src="./images/img/f3-r-pro6.jpg" alt="">
                                </div>
                                <p class="description">【自营】智力进口 无籽玫瑰香</p>
                                <p class="price">
                                    <span>￥</span>32.8 <span class="add-cart-3f add-info">加入购物车</span></p>
                            </div>
                        </div>
                      </div>
                      <div class="hot-content content">
                              <div class="con-top clearfix">
                              <div class="product pro1">
                                  <div class="img">
                                      <img src="./images/img/f3-r-pro1.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】意大利佳沛绿奇异果</p>
                                  <p class="price"><span>￥</span>78 <span class="add-cart-3f add-info">加入购物车</span></p>
                              </div>
                                  <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f3-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮海外直采】比利时啤梨</p>
                                  <p class="price">
                                      <span>￥</span>69 <span class="add-cart-3f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f3-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】[安翠]泰国椰青9粒箱</p>
                                  <p class="price">
                                      <span>￥</span>88 <span class="add-cart-3f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro2">
                                  <div class="img">
                                      <img src="./images/img/f3-r-pro2.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】[安翠]不知火柑 丑柑</p>
                                  <p class="price"><span>￥</span>49 <span class="add-cart-3f add-info">加入购物车</span></p>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f3-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】精选甘肃静宁红富士苹果</p>
                                  <p class="price">
                                      <span>￥</span>68 <span class="add-cart-3f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f3-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮海外直采】比利时啤梨</p>
                                  <p class="price">
                                      <span>￥</span>69 <span class="add-cart-3f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f3-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】[安翠]泰国椰青9粒箱</p>
                                  <p class="price">
                                      <span>￥</span>88 <span class="add-cart-3f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f3-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】智力进口 无籽玫瑰香</p>
                                  <p class="price">
                                      <span>￥</span>32.8 <span class="add-cart-3f add-info">加入购物车</span></p>
                              </div>
                          </div>
                      </div>
                    </div>

                </div>
            </div>
            <!-- floor4 奶制品 -->        
            <div class="floor floor4 clearfix">
                <!-- f1开始 -->
                <div class="floor-l">
                    <h3 class="detail"><i></i>进口食品</h3>
                    <div class="floor-l-cont">
                        <div class="f-info"><span>4F</span></div>
                        <ul class="floor-list">
                            <li class="item item1"><a href="javascript:;"><i class="floor-icon"></i>纯牛奶</a></li>
                            <li class="item item2"><a href="javascript:;"><i class="floor-icon"></i>酸奶</a></li>
                            <li class="item item3"><a href="javascript:;"><i class="floor-icon"></i>有机奶</a></li>
                            <li class="item item4"><a href="javascript:;"><i class="floor-icon"></i>儿童奶</a></li>
                            <li class="item item5"><a href="javascript:;"><i class="floor-icon"></i>风味奶</a></li>
                            <li class="item item6"><a href="javascript:;"><i class="floor-icon"></i>功能奶</a></li>
                        </ul>
                        <a href="javascript:;"><img src="./images/img/f4.jpg" alt=""></a> 
                    </div>
                    <div class="mask">
                        <img src="./images/img/animation.png" alt="">
                    </div>
                </div>
                <div class="floor-r">
                        <div class="menu clearfix 4f">
                            <div class="selected">精选推荐</div>
                            <div class="hot">热卖推荐</div>
                        </div>
                        <div class="4fcon">
                          <div class="selected-content content">
                              <div class="con-top clearfix">
                                  <div class="product pro1">
                                      <div class="img">
                                          <img src="./images/img/f4-r-pro1.jpg" alt="">
                                      </div>
                                      <p class="description">【自营】伊利谷物多红谷苗条礼</p>
                                      <p class="price"><span>￥</span>24.9 <span class="add-cart-4f add-info">加入购物车</span></p>
                                  </div>
                                  <div class="banner">
                                      <ul class="img">
                                          <li><img src="./images/img/f4-r-ban1.jpg" alt=""></li>
                                          <li><img src="./images/img/f4-r-ban2.jpg" alt=""></li>
                                      </ul>
                                      <ul class="btn">
                                          <li class="active"></li>
                                          <li></li>
                                      </ul>
                                      <div class="prev"><i class="fa fa-angle-left"></i></div>
                                      <div class="next"><i class="fa fa-angle-right"></i></div>
                                  </div>
                                  <div class="product pro2">
                                      <div class="img">
                                          <img src="./images/img/f4-r-pro2.jpg" alt="">
                                      </div>
                                      <p class="description">【自营】蒙牛纯甄巴氏杀菌算牛奶</p>
                                      <p class="price"><span>￥</span>92.9 <span class="add-cart-4f add-info">加入购物车</span></p>
                                  </div>
                              </div>
                              <div class="con-bottom clearfix">
                                  <div class="product pro3">
                                      <div class="img">
                                          <img src="./images/img/f4-r-pro3.jpg" alt="">
                                      </div>
                                      <p class="description">【自营】蒙牛纯牛奶无菌枕</p>
                                      <p class="price">
                                          <span>￥</span>38.9 <span class="add-cart-4f add-info">加入购物车</span></p>
                                  </div>
                                  <div class="product pro4">
                                      <div class="img">
                                          <img src="./images/img/f4-r-pro4.jpg" alt="">
                                      </div>
                                      <p class="description">【爆款】德亚全脂牛奶11L（德国）</p>
                                      <p class="price">
                                          <span>￥</span>99 <span class="add-cart-4f add-info">加入购物车</span></p>
                                  </div>
                                  <div class="product pro5">
                                      <div class="img">
                                          <img src="./images/img/f4-r-pro5.jpg" alt="">
                                      </div>
                                      <p class="description">【中粮海外直采】Arla爱氏晨曦</p>
                                      <p class="price">
                                          <span>￥</span>99 <span class="add-cart-4f add-info">加入购物车</span></p>
                                  </div>
                                  <div class="product pro6">
                                      <div class="img">
                                          <img src="./images/img/f4-r-pro6.jpg" alt="">
                                      </div>
                                      <p class="description">【上质新升级】上质-欧诺鲜全</p>
                                      <p class="price">
                                          <span>￥</span>99 <span class="add-cart-4f add-info">加入购物车</span></p>
                                  </div>
                              </div>
                          </div>
                          <div class="hot-content content">
                              <div class="con-top clearfix">
                                  <div class="con-top clearfix">
                                  <div class="product pro1">
                                      <div class="img">
                                          <img src="./images/img/f4-r-pro1.jpg" alt="">
                                      </div>
                                      <p class="description">【自营】伊利谷物多红谷苗条礼</p>
                                      <p class="price"><span>￥</span>24.9 <span class="add-cart-4f add-info">加入购物车</span></p>
                                  </div>
                                  <div class="product pro5">
                                      <div class="img">
                                          <img src="./images/img/f4-r-pro5.jpg" alt="">
                                      </div>
                                      <p class="description">【中粮海外直采】Arla爱氏晨曦</p>
                                      <p class="price">
                                          <span>￥</span>99 <span class="add-cart-4f add-info">加入购物车</span></p>
                                  </div>
                                  <div class="product pro6">
                                      <div class="img">
                                          <img src="./images/img/f4-r-pro6.jpg" alt="">
                                      </div>
                                      <p class="description">【上质新升级】上质-欧诺鲜全</p>
                                      <p class="price">
                                          <span>￥</span>99 <span class="add-cart-4f add-info">加入购物车</span></p>
                                  </div>
                                  <div class="product pro2">
                                      <div class="img">
                                          <img src="./images/img/f4-r-pro2.jpg" alt="">
                                      </div>
                                      <p class="description">【自营】蒙牛纯甄巴氏杀菌算牛奶</p>
                                      <p class="price"><span>￥</span>92.9 <span class="add-cart-4f add-info">加入购物车</span></p>
                                  </div>
                              </div>
                              <div class="con-bottom clearfix">
                                  <div class="product pro3">
                                      <div class="img">
                                          <img src="./images/img/f4-r-pro3.jpg" alt="">
                                      </div>
                                      <p class="description">【自营】蒙牛纯牛奶无菌枕</p>
                                      <p class="price">
                                          <span>￥</span>38.9 <span class="add-cart-4f add-info" >加入购物车</span></p>
                                  </div>
                                  <div class="product pro4">
                                      <div class="img">
                                          <img src="./images/img/f4-r-pro4.jpg" alt="">
                                      </div>
                                      <p class="description">【爆款】德亚全脂牛奶11L（德国）</p>
                                      <p class="price">
                                          <span>￥</span>99 <span class="add-cart-4f add-info">加入购物车</span></p>
                                  </div>
                                  <div class="product pro5">
                                      <div class="img">
                                          <img src="./images/img/f4-r-pro5.jpg" alt="">
                                      </div>
                                      <p class="description">【中粮海外直采】Arla爱氏晨曦</p>
                                      <p class="price">
                                          <span>￥</span>99 <span class="add-cart-4f add-info">加入购物车</span></p>
                                  </div>
                                  <div class="product pro6">
                                      <div class="img">
                                          <img src="./images/img/f4-r-pro6.jpg" alt="">
                                      </div>
                                      <p class="description">【上质新升级】上质-欧诺鲜全</p>
                                      <p class="price">
                                          <span>￥</span>99 <span class="add-cart-4f add-info">加入购物车</span></p>
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- floor5 休闲保健 -->        
            <div class="floor floor5 clearfix">
                <!-- f1开始 -->
                <div class="floor-l">
                    <h3 class="detail"><i></i>休闲保健</h3>
                    <div class="floor-l-cont">
                        <div class="f-info"><span>5F</span></div>
                        <ul class="floor-list">
                            <li class="item item1"><a href="javascript:;"><i class="floor-icon"></i>坚果炒货</a></li>
                            <li class="item item2"><a href="javascript:;"><i class="floor-icon"></i>国服蜜饯</a></li>
                            <li class="item item3"><a href="javascript:;"><i class="floor-icon"></i>休闲零食</a></li>
                            <li class="item item4"><a href="javascript:;"><i class="floor-icon"></i>饼干蛋糕</a></li>
                            <li class="item item5"><a href="javascript:;"><i class="floor-icon"></i>糖巧克力</a></li>
                            <li class="item item6"><a href="javascript:;"><i class="floor-icon"></i>营养保健</a></li>
                        </ul>
                        <a href="javascript:;"><img src="./images/img/f5.jpg" alt=""></a> 
                    </div>
                    <div class="mask">
                        <img src="./images/img/animation.png" alt="">
                    </div>
                </div>
                <div class="floor-r">
                    <div class="menu clearfix 5f">
                        <div class="selected">精选推荐</div>
                        <div class="hot">热卖推荐</div>
                    </div>
                    <div class="5fcon">
                      <div class="selected-content content">
                          <div class="con-top clearfix">
                              <div class="product pro1">
                                  <div class="img">
                                      <img src="./images/img/f5-r-pro1.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】BHB燕山甘栗仁</p>
                                  <p class="price"><span>￥</span>45.9 <span class="add-cart-5f add-info">加入购物车</span></p>
                              </div>
                              <div class="banner">
                                  <ul class="img">
                                      <li><img src="./images/img/f5-r-ban1.jpg" alt=""></li>
                                      <li><img src="./images/img/f5-r-ban2.jpg" alt=""></li>
                                  </ul>
                                  <ul class="btn">
                                      <li class="active"></li>
                                      <li></li>
                                  </ul>
                                  <div class="prev"><i class="fa fa-angle-left"></i></div>
                                  <div class="next"><i class="fa fa-angle-right"></i></div>
                              </div>
                              <div class="product pro2">
                                  <div class="img">
                                      <img src="./images/img/f5-r-pro2.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】好巴食豆干超值多口</p>
                                  <p class="price"><span>￥</span>58  <span class="add-cart-5f add-info">加入购物车</span></p>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f1-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】旺旺仙贝加量装540g</p>
                                  <p class="price">
                                      <span>￥</span>18.4  <span class="add-cart-5f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f5-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】沃隆 灭日坚果 成人款</p>
                                  <p class="price">
                                      <span>￥</span>138  <span class="add-cart-5f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f5-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【卖一赠一】中粮时怡牛肉棒</p>
                                  <p class="price">
                                      <span>￥</span>38.9  <span class="add-cart-5f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f5-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">时怡 中粮优选 混合水果燕麦 </p>
                                  <p class="price">
                                      <span>￥</span>69.9  <span class="add-cart-5f add-info">加入购物车</span></p>
                              </div>
                          </div>
                      </div>
                      <div class="hot-content content">
                          <div class="con-top clearfix">
                              <div class="product pro1">
                                  <div class="img">
                                      <img src="./images/img/f5-r-pro1.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】BHB燕山甘栗仁</p>
                                  <p class="price"><span>￥</span>45.9  <span class="add-cart-5f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f5-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【卖一赠一】中粮时怡牛肉棒</p>
                                  <p class="price">
                                      <span>￥</span>38.9  <span class="add-cart-5f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f5-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">时怡 中粮优选 混合水果燕麦 </p>
                                  <p class="price">
                                      <span>￥</span>69.9  <span class="add-cart-5f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro2">
                                  <div class="img">
                                      <img src="./images/img/f5-r-pro2.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】好巴食豆干超值多口</p>
                                  <p class="price"><span>￥</span>58  <span class="add-cart-5f add-info">加入购物车</span></p>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f5-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】旺旺仙贝加量装540g</p>
                                  <p class="price">
                                      <span>￥</span>18.4  <span class="add-cart-5f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f5-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】沃隆 灭日坚果 成人款</p>
                                  <p class="price">
                                      <span>￥</span>138  <span class="add-cart-5f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f5-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【卖一赠一】中粮时怡牛肉棒</p>
                                  <p class="price">
                                      <span>￥</span>38.9  <span class="add-cart-5f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f5-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">时怡 中粮优选 混合水果燕麦 </p>
                                  <p class="price">
                                      <span>￥</span>69.9  <span class="add-cart-5f add-info">加入购物车</span></p>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            <!-- floor6 酒水冲调 -->        
            <div class="floor floor6 clearfix">
                <!-- f1开始 -->
                <div class="floor-l">
                    <h3 class="detail"><i></i>酒水冲调</h3>
                    <div class="floor-l-cont">
                        <div class="f-info"><span>6F</span></div>
                        <ul class="floor-list">
                            <li class="item item1"><a href="javascript:;"><i class="floor-icon"></i>海外直采</a></li>
                            <li class="item item2"><a href="javascript:;"><i class="floor-icon"></i>白酒</a></li>
                            <li class="item item3"><a href="javascript:;"><i class="floor-icon"></i>啤酒</a></li>
                            <li class="item item4"><a href="javascript:;"><i class="floor-icon"></i>果汁饮料</a></li>
                            <li class="item item5"><a href="javascript:;"><i class="floor-icon"></i>冲调早餐</a></li>
                            <li class="item item6"><a href="javascript:;"><i class="floor-icon"></i>茶</a></li>
                        </ul>
                        <a href="javascript:;"><img src="./images/img/f6.jpg" alt=""></a> 
                    </div>
                    <div class="mask">
                        <img src="./images/img/animation.png" alt="">
                    </div>
                </div>
                <div class="floor-r">
                    <div class="menu clearfix 6f">
                        <div class="selected">精选推荐</div>
                        <div class="hot">热卖推荐</div>
                    </div>
                    <div class="6fcon">
                      <div class="selected-content content">
                          <div class="con-top clearfix">
                              <div class="product pro1">
                                  <div class="img">
                                      <img src="./images/img/f6-r-pro1.jpg" alt="">
                                  </div>
                                  <p class="description">【整箱优惠】百威啤酒</p>
                                  <p class="price"><span>￥</span>59.9  <span class="add-cart-6f add-info">加入购物车</span></p>
                              </div>
                              <div class="banner">
                                  <ul class="img">
                                      <li><img src="./images/img/f6-r-ban1.jpg" alt=""></li>
                                      <li><img src="./images/img/f6-r-ban2.jpg" alt=""></li>
                                  </ul>
                                  <ul class="btn">
                                      <li class="active"></li>
                                      <li></li>
                                  </ul>
                                  <div class="prev"><i class="fa fa-angle-left"></i></div>
                                  <div class="next"><i class="fa fa-angle-right"></i></div>
                              </div>
                              <div class="product pro2">
                                  <div class="img">
                                      <img src="./images/img/f6-r-pro2.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮直采】金库酒窑干红葡萄</p>
                                  <p class="price"><span>￥</span>49 <span class="add-cart-6f add-info">加入购物车</span></p>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f6-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">【整箱优惠】农夫山泉饮用天然</p>
                                  <p class="price">
                                      <span>￥</span>78 <span class="add-cart-6f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f6-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】40°江小白高粱酒</p>
                                  <p class="price">
                                      <span>￥</span>119 <span class="add-cart-6f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f6-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】秦氏紫米山药粉</p>
                                  <p class="price">
                                      <span>￥</span>69 <span class="add-cart-6f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f6-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】贡院 一级龙井茶</p>
                                  <p class="price">
                                      <span>￥</span>38.9 <span class="add-cart-6f add-info">加入购物车</span></p>
                              </div>
                          </div>
                      </div>
                      <div class="hot-content content">
                          <div class="con-top clearfix">
                              <div class="product pro1">
                                  <div class="img">
                                      <img src="./images/img/f6-r-pro1.jpg" alt="">
                                  </div>
                                  <p class="description">【整箱优惠】百威啤酒</p>
                                  <p class="price"><span>￥</span>59.9 <span class="add-cart-6f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f6-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】秦氏紫米山药粉</p>
                                  <p class="price">
                                      <span>￥</span>69 <span class="add-cart-6f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f6-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】贡院 一级龙井茶</p>
                                  <p class="price">
                                      <span>￥</span>38.9 <span class="add-cart-6f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro2">
                                  <div class="img">
                                      <img src="./images/img/f6-r-pro2.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮直采】金库酒窑干红葡萄</p>
                                  <p class="price"><span>￥</span>49 <span class="add-cart-6f add-info">加入购物车</span></p>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f6-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">【整箱优惠】农夫山泉饮用天然</p>
                                  <p class="price">
                                      <span>￥</span>78 <span class="add-cart-6f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f6-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】40°江小白高粱酒</p>
                                  <p class="price">
                                      <span>￥</span>119 <span class="add-cart-6f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f6-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】秦氏紫米山药粉</p>
                                  <p class="price">
                                      <span>￥</span>69 <span class="add-cart-6f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f6-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】贡院 一级龙井茶</p>
                                  <p class="price">
                                      <span>￥</span>38.9 <span class="add-cart-6f add-info">加入购物车</span></p>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            <!-- floor7 粮油副食 -->        
            <div class="floor floor7 clearfix">
                <!-- f1开始 -->
                <div class="floor-l">
                    <h3 class="detail"><i></i>粮油副食</h3>
                    <div class="floor-l-cont">
                        <div class="f-info"><span>7F</span></div>
                        <ul class="floor-list">
                            <li class="item item1"><a href="javascript:;"><i class="floor-icon"></i>食用油</a></li>
                            <li class="item item2"><a href="javascript:;"><i class="floor-icon"></i>产区大米</a></li>
                            <li class="item item3"><a href="javascript:;"><i class="floor-icon"></i>南北干货</a></li>
                            <li class="item item4"><a href="javascript:;"><i class="floor-icon"></i>厨房调味</a></li>
                            <li class="item item5"><a href="javascript:;"><i class="floor-icon"></i>面粉挂面</a></li>
                            <li class="item item6"><a href="javascript:;"><i class="floor-icon"></i>有机粮油</a></li>
                        </ul>
                        <a href="javascript:;"><img src="./images/img/f7.jpg" alt=""></a> 
                    </div>
                    <div class="mask">
                        <img src="./images/img/animation.png" alt="">
                    </div>
                </div>
                <div class="floor-r">
                    <div class="menu clearfix 7f">
                        <div class="selected">精选推荐</div>
                        <div class="hot">热卖推荐</div>
                    </div>
                    <div class="7fcon">
                      <div class="selected-content content">
                          <div class="con-top clearfix">
                              <div class="product pro1">
                                  <div class="img">
                                      <img src="./images/img/f7-r-pro1.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】福临门压榨葵花油</p>
                                  <p class="price"><span>￥</span>69.9 <span class="add-cart-7f add-info">加入购物车</span></p>
                              </div>
                              <div class="banner">
                                  <ul class="img">
                                      <li><img src="./images/img/f7-r-ban1.jpg" alt=""></li>
                                      <li><img src="./images/img/f7-r-ban2.jpg" alt=""></li>
                                  </ul>
                                  <ul class="btn">
                                      <li class="active"></li>
                                      <li></li>
                                  </ul>
                                  <div class="prev"><i class="fa fa-angle-left"></i></div>
                                  <div class="next"><i class="fa fa-angle-right"></i></div>
                              </div>
                              <div class="product pro2">
                                  <div class="img">
                                      <img src="./images/img/f7-r-pro2.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】富昌无根肉厚黑木耳</p>
                                  <p class="price"><span>￥</span>33.9 <span class="add-cart-7f add-info">加入购物车</span></p>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f7-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】泰金香茉莉香米</p>
                                  <p class="price">
                                      <span>￥</span>29.9 <span class="add-cart-7f add-info" >加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f7-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">中粮初萃五常香米5kg</p>
                                  <p class="price">
                                      <span>￥</span>49.9 <span class="add-cart-7f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f7-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】海天金标生抽1.28L*2脂</p>
                                  <p class="price">
                                      <span>￥</span>29.8 <span class="add-cart-7f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f7-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】螺霸王方便螺蛳粉（烹饪）</p>
                                  <p class="price">
                                      <span>￥</span>49.9 <span class="add-cart-7f add-info">加入购物车</span></p>
                              </div>
                          </div>
                      </div>
                      <div class="hot-content content">
                          <div class="con-top clearfix">
                              <div class="product pro1">
                                  <div class="img">
                                      <img src="./images/img/f7-r-pro1.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】福临门压榨葵花油</p>
                                  <p class="price"><span>￥</span>69.9 <span class="add-cart-7f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f7-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">中粮初萃五常香米5kg</p>
                                  <p class="price">
                                      <span>￥</span>49.9 <span class="add-cart-7f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f7-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】海天金标生抽1.28L*2脂</p>
                                  <p class="price">
                                      <span>￥</span>29.8 <span class="add-cart-7f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro2">
                                  <div class="img">
                                      <img src="./images/img/f7-r-pro2.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】富昌无根肉厚黑木耳</p>
                                  <p class="price"><span>￥</span>33.9 <span class="add-cart-7f add-info">加入购物车</span></p>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f7-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】泰金香茉莉香米</p>
                                  <p class="price">
                                      <span>￥</span>29.9 <span class="add-cart-7f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f7-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">中粮初萃五常香米5kg</p>
                                  <p class="price">
                                      <span>￥</span>49.9 <span class="add-cart-7f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f7-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】海天金标生抽1.28L*2脂</p>
                                  <p class="price">
                                      <span>￥</span>29.8 <span class="add-cart-7f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f7-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】螺霸王方便螺蛳粉（烹饪）</p>
                                  <p class="price">
                                      <span>￥</span>49.9 <span class="add-cart-7f add-info">加入购物车</span></p>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            <!-- floor8 母婴玩具 -->        
            <div class="floor floor8 clearfix">
                <!-- f1开始 -->
                <div class="floor-l">
                    <h3 class="detail"><i></i>母婴玩具</h3>
                    <div class="floor-l-cont">
                        <div class="f-info"><span>8F</span></div>
                        <ul class="floor-list">
                            <li class="item item1"><a href="javascript:;"><i class="floor-icon"></i>孕婴奶粉</a></li>
                            <li class="item item2"><a href="javascript:;"><i class="floor-icon"></i>尿裤湿巾</a></li>
                            <li class="item item3"><a href="javascript:;"><i class="floor-icon"></i>辅食营养</a></li>
                            <li class="item item4"><a href="javascript:;"><i class="floor-icon"></i>喂养用品</a></li>
                            <li class="item item5"><a href="javascript:;"><i class="floor-icon"></i>洗护清洁</a></li>
                            <li class="item item6"><a href="javascript:;"><i class="floor-icon"></i>婴童玩具</a></li>
                        </ul>
                        <a href="javascript:;"><img src="./images/img/f8.jpg" alt=""></a> 
                    </div>
                    <div class="mask">
                        <img src="./images/img/animation.png" alt="">
                    </div>
                </div>
                <div class="floor-r">
                    <div class="menu clearfix 8f">
                        <div class="selected">精选推荐</div>
                        <div class="hot">热卖推荐</div>
                    </div>
                    <div class="8fcon">
                      <div class="selected-content content">
                          <div class="con-top clearfix">
                              <div class="product pro1">
                                  <div class="img">
                                      <img src="./images/img/f8-r-pro1.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】古之极野生铁核桃油</p>
                                  <p class="price"><span>￥</span>33.5 <span class="add-cart-8f add-info">加入购物车</span></p>
                              </div>
                              <div class="banner">
                                  <ul class="img">
                                      <li><img src="./images/img/f8-r-ban1.jpg" alt=""></li>
                                      <li><img src="./images/img/f8-r-ban2.jpg" alt=""></li>
                                  </ul>
                                  <ul class="btn">
                                      <li class="active"></li>
                                      <li></li>
                                  </ul>
                                  <div class="prev"><i class="fa fa-angle-left"></i></div>
                                  <div class="next"><i class="fa fa-angle-right"></i></div>
                              </div>
                              <div class="product pro2">
                                  <div class="img">
                                      <img src="./images/img/f8-r-pro2.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】Merries花王 婴儿纸尿裤</p>
                                  <p class="price"><span>￥</span>89.9 <span class="add-cart-8f add-info">加入购物车</span></p>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f8-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】润本植物精油防蚊贴</p>
                                  <p class="price">
                                      <span>￥</span>14.9 <span class="add-cart-8f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f8-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】MeadJohnson美赞臣</p>
                                  <p class="price">
                                      <span>￥</span>199 <span class="add-cart-8f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f8-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】Beingmate贝因美金装</p>
                                  <p class="price">
                                      <span>￥</span>182 <span class="add-cart-8f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f8-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮出品】简沃婴儿柔湿巾</p>
                                  <p class="price">
                                      <span>￥</span>24.5 <span class="add-cart-8f add-info">加入购物车</span></p>
                              </div>
                          </div>
                      </div>
                      <div class="hot-content content">
                          <div class="con-top clearfix">
                              <div class="product pro1">
                                  <div class="img">
                                      <img src="./images/img/f8-r-pro1.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】古之极野生铁核桃油</p>
                                  <p class="price"><span>￥</span>33.5 <span class="add-cart-8f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f8-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】Beingmate贝因美金装</p>
                                  <p class="price">
                                      <span>￥</span>182 <span class="add-cart-8f add-info" >加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f8-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮出品】简沃婴儿柔湿巾</p>
                                  <p class="price">
                                      <span>￥</span>24.5 <span class="add-cart-8f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro2">
                                  <div class="img">
                                      <img src="./images/img/f8-r-pro2.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】Merries花王 婴儿纸尿裤</p>
                                  <p class="price"><span>￥</span>89.9 <span class="add-cart-8f add-info">加入购物车</span></p>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f8-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】润本植物精油防蚊贴</p>
                                  <p class="price">
                                      <span>￥</span>14.9 <span class="add-cart-8f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f8-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】MeadJohnson美赞臣</p>
                                  <p class="price">
                                      <span>￥</span>199 <span class="add-cart-8f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f8-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】Beingmate贝因美金装</p>
                                  <p class="price">
                                      <span>￥</span>182 <span class="add-cart-8f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f8-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮出品】简沃婴儿柔湿巾</p>
                                  <p class="price">
                                      <span>￥</span>24.5 <span class="add-cart-8f add-info">加入购物车</span></p>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            <!-- floor9 个护清洁 -->        
            <div class="floor floor9 clearfix">
                <!-- f1开始 -->
                <div class="floor-l">
                    <h3 class="detail"><i></i>个护清洁</h3>
                    <div class="floor-l-cont">
                        <div class="f-info"><span>9F</span></div>
                        <ul class="floor-list">
                            <li class="item item1"><a href="javascript:;"><i class="floor-icon"></i>洗发护发</a></li>
                            <li class="item item2"><a href="javascript:;"><i class="floor-icon"></i>面部护理</a></li>
                            <li class="item item3"><a href="javascript:;"><i class="floor-icon"></i>口腔护理</a></li>
                            <li class="item item4"><a href="javascript:;"><i class="floor-icon"></i>女性护理</a></li>
                            <li class="item item5"><a href="javascript:;"><i class="floor-icon"></i>制品</a></li>
                            <li class="item item6"><a href="javascript:;"><i class="floor-icon"></i>衣物清洁</a></li>
                        </ul>
                        <a href="javascript:;"><img src="./images/img/f9.jpg" alt=""></a> 
                    </div>
                    <div class="mask">
                        <img src="./images/img/animation.png" alt="">
                    </div>
                </div>
                <div class="floor-r">
                    <div class="menu clearfix 9f">
                        <div class="selected">精选推荐</div>
                        <div class="hot">热卖推荐</div>
                    </div>
                    <div class="9fcon">
                      <div class="selected-content content">
                          <div class="con-top clearfix">
                              <div class="product pro1">
                                  <div class="img">
                                      <img src="./images/img/f9-r-pro1.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】欧露本色卫生纸</p>
                                  <p class="price"><span>￥</span>19.9 <span class="add-cart-9f add-info">加入购物车</span></p>
                              </div>
                              <div class="banner">
                                  <ul class="img">
                                      <li><img src="./images/img/f9-r-ban1.jpg" alt=""></li>
                                      <li><img src="./images/img/f9-r-ban2.jpg" alt=""></li>
                                  </ul>
                                  <ul class="btn">
                                      <li class="active"></li>
                                      <li></li>
                                  </ul>
                                  <div class="prev"><i class="fa fa-angle-left"></i></div>
                                  <div class="next"><i class="fa fa-angle-right"></i></div> 
                              </div>
                              <div class="product pro2">
                                  <div class="img">
                                      <img src="./images/img/f9-r-pro2.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】伊植贝（E'zber）</p>
                                  <p class="price"><span>￥</span>99 <span class="add-cart-9f add-info">加入购物车</span></p>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f9-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">欧舒丹（L' OCCITANE）樱花</p>
                                  <p class="price">
                                      <span>￥</span>245<span class="add-cart-9f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f9-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】汰渍1.8kg全效360度</p>
                                  <p class="price">
                                      <span>￥</span>14.9<span class="add-cart-9f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f9-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮出品】简沃本色4层140g</p>
                                  <p class="price">
                                      <span>￥</span>59<span class="add-cart-9f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f9-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】欧莱雅 男士激能护肤</p>
                                  <p class="price">
                                      <span>￥</span>139 <span class="add-cart-9f add-info">加入购物车</span></p>
                              </div>
                          </div>
                      </div>
                      <div class="hot-content content">
                          <div class="con-top clearfix">
                              <div class="product pro1">
                                  <div class="img">
                                      <img src="./images/img/f9-r-pro1.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】欧露本色卫生纸</p>
                                  <p class="price"><span>￥</span>19.9 <span class="add-cart-9f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f9-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】汰渍1.8kg全效360度</p>
                                  <p class="price">
                                      <span>￥</span>14.9 <span class="add-cart-9f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f9-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮出品】简沃本色4层140g</p>
                                  <p class="price">
                                      <span>￥</span>59 <span class="add-cart-9f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro2">
                                  <div class="img">
                                      <img src="./images/img/f9-r-pro2.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】伊植贝（E'zber）</p>
                                  <p class="price"><span>￥</span>99 <span class="add-cart-9f add-info">加入购物车</span></p>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f9-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">欧舒丹（L' OCCITANE）樱花</p>
                                  <p class="price">
                                      <span>￥</span>245 <span class="add-cart-9f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f9-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】汰渍1.8kg全效360度</p>
                                  <p class="price">
                                      <span>￥</span>14.9 <span class="add-cart-9f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f9-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮出品】简沃本色4层140g</p>
                                  <p class="price">
                                      <span>￥</span>59 <span class="add-cart-9f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f9-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】欧莱雅 男士激能护肤</p>
                                  <p class="price">
                                      <span>￥</span>139 <span class="add-cart-9f add-info">加入购物车</span></p>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            <!-- floor10 家居家电 -->
            <div class="floor floor10 clearfix">
                <div class="floor-l">
                    <h3 class="detail"><i></i>家居家电</h3>
                    <div class="floor-l-cont">
                        <div class="f-info"><span>10F</span></div>
                        <ul class="floor-list">
                            <li class="item item1"><a href="javascript:;"><i class="floor-icon"></i>厨具配件</a></li>
                            <li class="item item2"><a href="javascript:;"><i class="floor-icon"></i>家纺配饰</a></li>
                            <li class="item item3"><a href="javascript:;"><i class="floor-icon"></i>生活日用</a></li>
                            <li class="item item4"><a href="javascript:;"><i class="floor-icon"></i>厨房电器</a></li>
                            <li class="item item5"><a href="javascript:;"><i class="floor-icon"></i>生活电器</a></li>
                            <li class="item item6"><a href="javascript:;"><i class="floor-icon"></i>手机数码</a></li>
                        </ul>
                        <a href="javascript:;"><img src="./images/img/f10.jpg" alt=""></a> 
                    </div>
                    <div class="mask">
                        <img src="./images/img/animation.png" alt="">
                    </div>
                </div>
                <div class="floor-r">
                    <div class="menu clearfix 10f">
                        <div class="selected">精选推荐</div>
                        <div class="hot">热卖推荐</div>
                    </div>
                    <div class="10fcon">
                      <div class="selected-content content">
                          <div class="con-top clearfix">
                              <div class="product pro1">
                                  <div class="img">
                                      <img src="./images/img/f10-r-pro1.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】九阳（Joyoung）</p>
                                  <p class="price"><span>￥</span>175 <span class="add-cart-10f add-info">加入购物车</span></p>
                              </div>
                              <div class="banner">
                                  <ul class="img">
                                      <li><img src="./images/img/f10-r-ban1.jpg" alt=""></li>
                                      <li><img src="./images/img/f10-r-ban2.jpg" alt=""></li>
                                  </ul>
                                  <ul class="btn">
                                      <li class="active"></li>
                                      <li></li>
                                  </ul>
                                  <div class="prev"><i class="fa fa-angle-left"></i></div>
                                  <div class="next"><i class="fa fa-angle-right"></i></div>
                              </div>
                              <div class="product pro2">
                                  <div class="img">
                                      <img src="./images/img/f10-r-pro2.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮海外直采】Nescafe雀巢</p>
                                  <p class="price"><span>￥</span>58 <span class="add-cart-10f add-info">加入购物车</span></p>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f1-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮出品】简沃素色长绒棉加</p>
                                  <p class="price">
                                      <span>￥</span>118 <span class="add-cart-10f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f10-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】卡菲塔利（caffitaly</p>
                                  <p class="price">
                                      <span>￥</span>1588<span class="add-cart-10f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f10-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">心家宜-贝塔双杆伸缩晾挂架</p>
                                  <p class="price">
                                      <span>￥</span>5988<span class="add-cart-10f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f10-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">小狗（punny）小型手持床铺除</p>
                                  <p class="price">
                                      <span>￥</span>399<span class="add-cart-10f add-info">加入购物车</span></p>
                              </div>
                          </div>
                      </div>
                      <div class="hot-content content">
                          <div class="con-top clearfix">
                              <div class="product pro1">
                                  <div class="img">
                                      <img src="./images/img/f10-r-pro1.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】九阳（Joyoung）</p>
                                  <p class="price"><span>￥</span>175 <span class="add-cart-10f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f10-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">心家宜-贝塔双杆伸缩晾挂架</p>
                                  <p class="price">
                                      <span>￥</span>5988 <span class="add-cart-10f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                <div class="img">
                                    <img src="./images/img/f10-r-pro6.jpg" alt="">
                                </div>
                                <p class="description">小狗（punny）小型手持床铺除</p>
                                <p class="price">
                                    <span>￥</span>399 <span class="add-cart-10f add-info">加入购物车</span></p>
                            </div>
                              <div class="product pro2">
                                  <div class="img">
                                      <img src="./images/img/f10-r-pro2.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮海外直采】Nescafe雀巢</p>
                                  <p class="price"><span>￥</span>58 <span class="add-cart-10f add-info">加入购物车</span></p>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f1-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮出品】简沃素色长绒棉加</p>
                                  <p class="price">
                                      <span>￥</span>118 <span class="add-cart-10f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f10-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】卡菲塔利（caffitaly</p>
                                  <p class="price">
                                      <span>￥</span>1588 <span class="add-cart-10f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f10-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">心家宜-贝塔双杆伸缩晾挂架</p>
                                  <p class="price">
                                      <span>￥</span>5988 <span class="add-cart-10f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                <div class="img">
                                    <img src="./images/img/f10-r-pro6.jpg" alt="">
                                </div>
                                <p class="description">小狗（punny）小型手持床铺除</p>
                                <p class="price">
                                    <span>￥</span>399 <span class="add-cart-10f add-info">加入购物车</span></p>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            <!-- floor11 全球购 -->        
            <div class="floor floor11 clearfix">
                <!-- f1开始 -->
                <div class="floor-l">
                    <h3 class="detail"><i></i>全球购</h3>
                    <div class="floor-l-cont">
                        <div class="f-info"><span>11F</span></div>
                        <ul class="floor-list">
                            <li class="item item1"><a href="javascript:;"><i class="floor-icon"></i>休闲特产</a></li>
                            <li class="item item2"><a href="javascript:;"><i class="floor-icon"></i>粮油调味</a></li>
                            <li class="item item3"><a href="javascript:;"><i class="floor-icon"></i>生鲜包邮</a></li>
                            <li class="item item4"><a href="javascript:;"><i class="floor-icon"></i>健康生活</a></li>
                            <li class="item item5"><a href="javascript:;"><i class="floor-icon"></i>酒饮冲调</a></li>
                            <li class="item item6"><a href="javascript:;"><i class="floor-icon"></i>中国茗茶</a></li>
                        </ul>
                        <a href="javascript:;"><img src="./images/img/f11.jpg" alt=""></a> 
                    </div>
                    <div class="mask">
                        <img src="./images/img/animation.png" alt="">
                    </div>
                </div>
                <div class="floor-r">
                    <div class="menu clearfix 11f">
                        <div class="selected">精选推荐</div>
                        <div class="hot">热卖推荐</div>
                    </div>
                    <div class="11fcon">
                      <div class="selected-content content">
                          <div class="con-top clearfix">
                              <div class="product pro1">
                                  <div class="img">
                                      <img src="./images/img/f11-r-pro1.jpg" alt="">
                                  </div>
                                  <p class="description">【包邮】怀汁堂铁棍山药酱 1盒</p>
                                  <p class="price"><span>￥</span>110 <span class="add-cart-11f add-info">加入购物车</span></p>
                              </div>
                              <div class="banner">
                                  <ul class="img">
                                      <li><img src="./images/img/f11-r-ban1.jpg" alt=""></li>
                                      <li><img src="./images/img/f11-r-ban2.jpg" alt=""></li>
                                  </ul>
                                  <ul class="btn">
                                      <li class="active"></li>
                                      <li></li>
                                  </ul>
                                  <div class="prev"><i class="fa fa-angle-left"></i></div>
                                  <div class="next"><i class="fa fa-angle-right"></i></div>
                              </div>
                              <div class="product pro2">
                                  <div class="img">
                                      <img src="./images/img/f11-r-pro2.jpg" alt="">
                                  </div>
                                  <p class="description">荷裕柠檬香煎鱼=排200g/袋</p>
                                  <p class="price"><span>￥</span>39.9 <span class="add-cart-11f add-info">加入购物车</span></p>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f11-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">【正品保税】2件 澳洲Tropical</p>
                                  <p class="price">
                                      <span>￥</span>39.9 <span class="add-cart-11f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f11-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【香港包邮】韩国 RE:CIPE/</p>
                                  <p class="price">
                                      <span>￥</span>49 <span class="add-cart-11f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                  <div class="img">
                                      <img src="./images/img/f11-r-pro5.jpg" alt="">
                                  </div>
                                  <p class="description">【自营】荷兰原装进口特能饮料</p>
                                  <p class="price">
                                      <span>￥</span>59 <span class="add-cart-11f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f11-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮海外直采】德亚纯牛奶</p>
                                  <p class="price">
                                      <span>￥</span>49 <span class="add-cart-11f add-info">加入购物车</span></p>
                              </div>
                          </div>
                      </div>
                      <div class="hot-content content">
                          <div class="con-top clearfix">
                              <div class="con-top clearfix">
                                  <div class="product pro1">
                                      <div class="img">
                                          <img src="./images/img/f11-r-pro1.jpg" alt="">
                                      </div>
                                      <p class="description">【包邮】怀汁堂铁棍山药酱 1盒</p>
                                      <p class="price"><span>￥</span>110 <span class="add-cart-11f add-info">加入购物车</span></p>
                                  </div>
                                  <div class="product pro5">
                                      <div class="img">
                                          <img src="./images/img/f11-r-pro5.jpg" alt="">
                                      </div>
                                      <p class="description">【自营】荷兰原装进口特能饮料</p>
                                      <p class="price">
                                          <span>￥</span>59 <span class="add-cart-11f add-info">加入购物车</span></p>
                                  </div>
                                  <div class="product pro6">
                                      <div class="img">
                                          <img src="./images/img/f11-r-pro6.jpg" alt="">
                                      </div>
                                      <p class="description">【中粮海外直采】德亚纯牛奶</p>
                                      <p class="price">
                                          <span>￥</span>49 <span class="add-cart-11f add-info">加入购物车</span></p>
                                  </div>
                                  <div class="product pro2">
                                      <div class="img">
                                          <img src="./images/img/f11-r-pro2.jpg" alt="">
                                      </div>
                                      <p class="description">荷裕柠檬香煎鱼=排200g/袋</p>
                                      <p class="price"><span>￥</span>39.9 <span class="add-cart-11f add-info">加入购物车</span></p>
                                  </div>
                              </div>
                          </div>
                          <div class="con-bottom clearfix">
                              <div class="product pro3">
                                  <div class="img">
                                      <img src="./images/img/f11-r-pro3.jpg" alt="">
                                  </div>
                                  <p class="description">【正品保税】2件 澳洲Tropical</p>
                                  <p class="price">
                                      <span>￥</span>39.9 <span class="add-cart-11f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro4">
                                  <div class="img">
                                      <img src="./images/img/f11-r-pro4.jpg" alt="">
                                  </div>
                                  <p class="description">【香港包邮】韩国 RE:CIPE/</p>
                                  <p class="price">
                                      <span>￥</span>49 <span class="add-cart-11f add-info">加入购物车</span></p>
                              </div>
                              <div class="product pro5">
                                <div class="img">
                                    <img src="./images/img/f11-r-pro5.jpg" alt="">
                                </div>
                                <p class="description">【自营】荷兰原装进口特能饮料</p>
                                <p class="price">
                                    <span>￥</span>59 <span class="add-cart-11f add-info">加入购物车</span></p>
                            </div>
                              <div class="product pro6">
                                  <div class="img">
                                      <img src="./images/img/f11-r-pro6.jpg" alt="">
                                  </div>
                                  <p class="description">【中粮海外直采】德亚纯牛奶</p>
                                  <p class="price">
                                      <span>￥</span>49 <span class="add-cart-11f add-info">加入购物车</span></p>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- 尾部导航 -->
            <div class="footer-nav">
                <ul class="nav-con clearfix">
                <li class="section">
                    <h3><a href="#">生鲜蔬果</a></h3>
                    <div class="pic">
                        <a href="#"><img src="./images/img/footer-nav1.png"></a>
                    </div>
                    <ul class="clearfix">
                        <li><a href="#">进口水果</a></li>
                        <li><a href="#">国产水果</a></li>
                        <li><a href="#">海鲜水产</a></li>
                        <li><a href="#">生肉禽蛋</a></li>
                        <li><a href="#">蔬菜</a></li>
                        <li><a href="#">低温乳品/饮料</a></li>
                        <li><a href="#">糕点</a></li>
                        <li><a href="#">主食</a></li>
                        <li><a href="#">熟食/佐餐</a></li>
                        <li><a href="#">冰激凌</a></li>
                    </ul>
                </li>
                <li class="section">
                    <h3><a href="#">生鲜蔬果</a></h3>
                    <div class="pic">
                        <a href="#"><img src="./images/img/footer-nav2.png"></a>
                    </div>
                    <ul class="clearfix">
                        <li><a href="#">进口水果</a></li>
                        <li><a href="#">国产水果</a></li>
                        <li><a href="#">海鲜水产</a></li>
                        <li><a href="#">生肉禽蛋</a></li>
                        <li><a href="#">蔬菜</a></li>
                        <li><a href="#">低温乳品/饮料</a></li>
                        <li><a href="#">糕点</a></li>
                        <li><a href="#">主食</a></li>
                        <li><a href="#">熟食/佐餐</a></li>
                        <li><a href="#">冰激凌</a></li>
                    </ul>
                </li>
                <li class="section">
                    <h3><a href="#">生鲜蔬果</a></h3>
                    <div class="pic">
                        <a href="#"><img src="./images/img/footer-nav3.png"></a>
                    </div>
                    <ul class="clearfix">
                        <li><a href="#">进口水果</a></li>
                        <li><a href="#">国产水果</a></li>
                        <li><a href="#">海鲜水产</a></li>
                        <li><a href="#">生肉禽蛋</a></li>
                        <li><a href="#">蔬菜</a></li>
                        <li><a href="#">低温乳品/饮料</a></li>
                        <li><a href="#">糕点</a></li>
                        <li><a href="#">主食</a></li>
                        <li><a href="#">熟食/佐餐</a></li>
                        <li><a href="#">冰激凌</a></li>
                    </ul>
                </li>
                <li class="section">
                    <h3><a href="#">生鲜蔬果</a></h3>
                    <div class="pic">
                        <a href="#"><img src="./images/img/footer-nav4.png"></a>
                    </div>
                    <ul class="clearfix">
                        <li><a href="#">进口水果</a></li>
                        <li><a href="#">国产水果</a></li>
                        <li><a href="#">海鲜水产</a></li>
                        <li><a href="#">生肉禽蛋</a></li>
                        <li><a href="#">蔬菜</a></li>
                        <li><a href="#">低温乳品/饮料</a></li>
                        <li><a href="#">糕点</a></li>
                        <li><a href="#">主食</a></li>
                        <li><a href="#">熟食/佐餐</a></li>
                        <li><a href="#">冰激凌</a></li>
                    </ul>
                </li>
                <li class="section last">
                    <h3><a href="#">生鲜蔬果</a></h3>
                    <div class="pic">
                        <a href="#"><img src="./images/img/footer-nav5.png"></a>
                    </div>
                    <ul class="clearfix">
                        <li><a href="#">进口水果</a></li>
                        <li><a href="#">国产水果</a></li>
                        <li><a href="#">海鲜水产</a></li>
                        <li><a href="#">生肉禽蛋</a></li>
                        <li><a href="#">蔬菜</a></li>
                        <li><a href="#">低温乳品/饮料</a></li>
                        <li><a href="#">糕点</a></li>
                        <li><a href="#">主食</a></li>
                        <li><a href="#">熟食/佐餐</a></li>
                        <li><a href="#">冰激凌</a></li>
                    </ul>
                </li>
                <li class="section">
                    <h3><a href="#">生鲜蔬果</a></h3>
                    <div class="pic">
                        <a href="#"><img src="./images/img/footer-nav6.png"></a>
                    </div>
                    <ul class="clearfix">
                        <li><a href="#">进口水果</a></li>
                        <li><a href="#">国产水果</a></li>
                        <li><a href="#">海鲜水产</a></li>
                        <li><a href="#">生肉禽蛋</a></li>
                        <li><a href="#">蔬菜</a></li>
                        <li><a href="#">低温乳品/饮料</a></li>
                        <li><a href="#">糕点</a></li>
                        <li><a href="#">主食</a></li>
                        <li><a href="#">熟食/佐餐</a></li>
                        <li><a href="#">冰激凌</a></li>
                    </ul>
                </li>
                <li class="section">
                    <h3><a href="#">生鲜蔬果</a></h3>
                    <div class="pic">
                        <a href="#"><img src="./images/img/footer-nav7.png"></a>
                    </div>
                    <ul class="clearfix">
                        <li><a href="#">进口水果</a></li>
                        <li><a href="#">国产水果</a></li>
                        <li><a href="#">海鲜水产</a></li>
                        <li><a href="#">生肉禽蛋</a></li>
                        <li><a href="#">蔬菜</a></li>
                        <li><a href="#">低温乳品/饮料</a></li>
                        <li><a href="#">糕点</a></li>
                        <li><a href="#">主食</a></li>
                        <li><a href="#">熟食/佐餐</a></li>
                        <li><a href="#">冰激凌</a></li>
                    </ul>
                </li>
                <li class="section">
                    <h3><a href="#">生鲜蔬果</a></h3>
                    <div class="pic">
                        <a href="#"><img src="./images/img/footer-nav8.png"></a>
                    </div>
                    <ul class="clearfix">
                        <li><a href="#">进口水果</a></li>
                        <li><a href="#">国产水果</a></li>
                        <li><a href="#">海鲜水产</a></li>
                        <li><a href="#">生肉禽蛋</a></li>
                        <li><a href="#">蔬菜</a></li>
                        <li><a href="#">低温乳品/饮料</a></li>
                        <li><a href="#">糕点</a></li>
                        <li><a href="#">主食</a></li>
                        <li><a href="#">熟食/佐餐</a></li>
                        <li><a href="#">冰激凌</a></li>
                    </ul>
                </li>
                <li class="section">
                    <h3><a href="#">生鲜蔬果</a></h3>
                    <div class="pic">
                        <a href="#"><img src="./images/img/footer-nav9.png"></a>
                    </div>
                    <ul class="clearfix">
                        <li><a href="#">进口水果</a></li>
                        <li><a href="#">国产水果</a></li>
                        <li><a href="#">海鲜水产</a></li>
                        <li><a href="#">生肉禽蛋</a></li>
                        <li><a href="#">蔬菜</a></li>
                        <li><a href="#">低温乳品/饮料</a></li>
                        <li><a href="#">糕点</a></li>
                        <li><a href="#">主食</a></li>
                        <li><a href="#">熟食/佐餐</a></li>
                        <li><a href="#">冰激凌</a></li>
                    </ul>
                </li>
                <li class="section last">
                    <h3><a href="#">生鲜蔬果</a></h3>
                    <div class="pic">
                        <a href="#"><img src="./images/img/footer-nav10.png"></a>
                    </div>
                    <ul class="clearfix">
                        <li><a href="#">进口水果</a></li>
                        <li><a href="#">国产水果</a></li>
                        <li><a href="#">海鲜水产</a></li>
                        <li><a href="#">生肉禽蛋</a></li>
                        <li><a href="#">蔬菜</a></li>
                        <li><a href="#">低温乳品/饮料</a></li>
                        <li><a href="#">糕点</a></li>
                        <li><a href="#">主食</a></li>
                        <li><a href="#">熟食/佐餐</a></li>
                        <li><a href="#">冰激凌</a></li>
                    </ul>
                </li>
                </ul>
            </div>
        </div>
        <div class="footer">
            <div class="footer-top">
                <div class="width clearfix">
                    <dl class="first">
                        <dt><a href="./VicePage/新手上路/Novice.html"><h3>新手上路</h3></a></dt>
                        <dd><a href="#">新用户演示</a></dd>
                        <dd><a href="#">会员积分计划</a></dd>
                        <dd><a href="#">会员等级规则</a></dd>
                        <dd><a href="#">售后服务政策</a></dd>
                        <dd><a href="#">我买网发票制度</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#"><h3>付款方式</h3></a></dt>
                        <dd><a href="#">支付方式</a></dd>
                        <dd><a href="#">支付常见问题</a></dd>
                        <dd><a href="#">激活礼品卡</a></dd>
                        <dd><a href="#">我买卡</a></dd>
                        <dd><a href="#">电子礼品卡说明及使用</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#"><h3>配送信息</h3></a></dt>
                        <dd><a href="#">配送运费信息</a></dd>
                        <dd><a href="#">生鲜速配运费标准</a></dd>
                        <dd><a href="#">订单处理时间</a></dd>
                        <dd><a href="#">验收与拒绝政策</a></dd>
                        <dd><a href="#">用卷订单结算说明</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="./VicePage/我买提示/Prompt.html"><h3>我买提示</h3></a></dt>
                        <dd><a href="#">找回密码</a></dd>
                        <dd><a href="#">联系我们</a></dd>
                        <dd><a href="#">常见热点问题</a></dd>
                        <dd><a href="#">关于跨境购</a></dd>
                    </dl>
            
                    <div class="ervma">
                        <dl class="fl">
                        <dt>我买网APP</dt>
                        <dd><img src="./images/img/App-erweima.jpg" alt=""></dd>
                        </dl>
                        <dl class="fl">
                        <dt>我买网微信</dt>
                        <dd><img src="./images/img/weixin-erweima.jpg" alt=""></dd>
                        </dl>
                    </div>
                </div> 
            </div>
            <div class="footer-bottom">
                <div class="footer-link">
                    <a href="./VicePage/关于我们/aboutus.html">关于我们</a><span>|</span>
                    <a href="./VicePage/免责条款/Disclaimer.html">免责条款</a><span>|</span>
                    <a href="#">中粮集团</a><span>|</span>
                    <a href="#">友情链接</a><span>|</span>
                    <a href="#">搜索热词</a><span>|</span>
                    <a href="#">客服电话：400-005-5678</a>
                </div>
                <div class="illustration clearfix">
                    <div class="pic fl">
                        <a href="#"><img src="./images/img/footer-logo.jpg"></a>
                    </div>
                    <div class="illus-detail fl">
                        <p>Copyright©2009-2018 womai.com.hk All Rights Reserved 中粮海优（北京）有限公司版权所有</p>
                        <p>中粮海优（北京）有限公司 北京市朝阳区朝阳门南大街8号18F-09室</p>
                        <p><a href="#"><i class="anbei"></i><span> 京公网安备 11010102000458号 </span></a><span> 京ICP备 13003995号</span></p>
                        <p>营业执照（统一社会信用代码）91110000055590239L 食品经营许可证：JY11105020028185</p>
                    </div>
                    <div class="bottom-icon"><a href="#"><i class="xin"></i></a></div>
                </div>  
            </div>
        </div>
        <div class="top-search">
            <div>
                <img src="./images/img/logo.png" alt="">
                <div class="search-Div">
                    <input type="text" class="searchi-Ipt" placeholder="全球新品进口美食 满199减100">
                    <button class="search-btn">搜索</button>
                    <div class="icon-search">
                    </div>
                </div>
            </div>
        </div>
        <script src="./js/jquery-1.12.4.js"></script>
        <script src="./js/index.js"></script>
    </body>
</html>