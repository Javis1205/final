<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">                 </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">               </script>
    <link rel="stylesheet" href="css/bootstrap.min.css"      >
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"                                             >
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jssor.slider.mini.js"></script>
<!-- use jssor.slider.debug.js instead for debug -->
<script>
    jQuery(document).ready(function ($) {
        var jssor_1_SlideoTransitions = [
            [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
            [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
            [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
            [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
            [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
            [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
            [{b:10000,d:2000,x:-379,e:{x:7}}],
            [{b:10000,d:2000,x:-379,e:{x:7}}],
            [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
        ];
        var jssor_1_options = {
            $AutoPlay: true,
            $SlideDuration: 1000,
            $SlideEasing: $Jease$.$OutQuint,
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };
        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
    });
</script>
<style>
    /* jssor slider bullet navigator skin 05 css */
    /*
    .jssorb05 div           (normal)
    .jssorb05 div:hover     (normal mouseover)
    .jssorb05 .av           (active)
    .jssorb05 .av:hover     (active mouseover)
    .jssorb05 .dn           (mousedown)
    */
    .jssorb05 {
        position: absolute;
    }
    .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
        position: absolute;
        /* size of bullet elment */
        width: 16px;
        height: 16px;
        background-color: #dddddd;
        border-radius: 8px;
        overflow: hidden;
        cursor: pointer;
    }
    .jssorb05 div { background-position: -7px -7px; }
    .jssorb05 div:hover, .jssorb05 .av:hover { background-color: #000000 }
    .jssorb05 .av { background-color: #000000 }
    .jssorb05 .dn, .jssorb05 .dn:hover { background-color: #000000 }
</style>
    <div class="header-all">
        <div class="header-option">
            <div class="header-top">
                <div class="col-md-4 h-t-trai">
                    <div class="h-t-t-option">
                               <input href="#" class="search-box" id="search-box" placeholder="Tìm kiếm">
                               <a class="glyphicon glyphicon-search" href="#"></a>
                    </div>
                </div>
                <div class="col-md-4 h-t-giua">
                    <div class="h-t-g-option"><img src="image/logo.png"></div>
                </div>
                <div class="col-md-4 h-t-phai">
                    <div class="h-t-p-option">
                        <ul class="list-inline">
                            <li><a href="#"><div class="facebook-icon" title="kết nối với facebook" >    </div></a></li>
                            <li><a href="#"><div class="trym-icon" title="kết nối với twetter"      >    </div></a></li>
                            <li><a href="#"><div class="google-icon" title="kết nối với google plus">    </div></a></li>
                            <li><a href="#"><div class="youtube-icon" title="kết nối với youtube"   >    </div></a></li>
                        </ul>
                    </div>    
                </div>
            </div>
           <div class="header-bottom">
               <div class="navbar-header h-b-option ">
                   <a class="a-hboption"><span class="glyphicon glyphicon-home home">  </span>TRANG CHỦ</a>
                   <a class="a-hboption"><span>SAO                                              </span></a>
                   <a class="a-hboption"><span>NÀNG TÁM                                         </span></a>
                   <a class="a-hboption"><span>ĐẸP                                              </span></a>
                   <a class="a-hboption"><span>GIẢI TRÍ                                         </span></a>
                   <a class="a-hboption"><span>SỨC KHỎE BÀ BẦU                                  </span></a>
                   <a class="a-hboption"><span>THỜI TRANG                                       </span></a>
                   <a class="a-hboption"><span>ĂN CHƠI                                          </span></a>
                   <a class="a-hboption"><span>THẾ GIỚI                                         </span></a>
                   <a class="a-hboption"><span>ĐỘC LẠ                                           </span></a>
               </div>
           </div>
        </div>
    </div>
    <div class="boder">
        <div class="boder-option">
            <div class="b-top">
                <div class="col-md-3 inven">
                    <div class="inven-option inven-1">
                        <div class="inven-item">
                            <div class="type-nd" >Giải trí                                                     </div>
                            <div class="title-nd"><a href="#" class="a-title-nd">Nàng mẫu chuyển giới nổi như cồn nhờ công khai ảnh phẫu thuật</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 inven">
                    <div class="inven-option inven-2">
                        <div class="inven-item">
                            <div class="type-nd" >Giải trí                                                      </div>
                            <div class="title-nd"><a href="#" class="a-title-nd">Trang Pháp lạ lẫm khi “lột xác” với tóc ngắn cá tính </a>         </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 inven">
                    <div class="inven-option inven-3">
                        <div class="inven-item">
                            <div class="type-nd" >Giải trí                                                      </div>
                            <div class="title-nd"><a href="#" class="a-title-nd">Không khí tang thương bao trùm ngôi nhà nghệ sĩ Trần Lập</a>      </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 inven">
                    <div class="inven-option inven-4">
                        <div class="inven-item">
                            <div class="type-nd" >Giải trí                                                      </div>
                            <div class="title-nd"><a href="#" class="a-title-nd">Nếu còn e ngại với đồ xuyên thấu, hãy vào đây các cô gái à!</a>   </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="advertisement">
                <div class="advertisement-option">
                    <a href="#" class="a-img-e"><img src="image/quangcao-1.png"></a>
                </div>
            </div>
            <div class="b-body-1">
            <div class="b-b-1-trai col-md-3">
                <div class="b-b-1-t-option">
                    <div class="b-b-t-1-item">
                        <div class="option-item">
                            <div class="item-left">
                                <a href="#" title="click để xem thêm" class="item-left-1">
                                    <img src="image/item-left-1.png">
                                </a>
                            </div>
                            <div class="item-right">
                                <div class="item-right-top">
                                    <a href="#" title="click để xem thêm" class="item-left-2">
                                        Đã bắt được nghi phạm
                                        chính vụ khủng bố ở Paris
                                    </a>
                                </div>
                                <div class="item-right-bottom" id="time-item">
                                    3 phứt trước
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-b-t-1-item">
                        <div class="option-item">
                            <div class="item-left">
                                <a href="#" title="click để xem thêm" class="item-left-1">
                                    <img src="image/item-left-1.png">
                                </a>
                            </div>
                            <div class="item-right">
                                <div class="item-right-top">
                                    <a href="#" title="click để xem thêm" class="item-left-2">
                                        Đã bắt được nghi phạm
                                        chính vụ khủng bố ở Paris
                                    </a>
                                </div>
                                <div class="item-right-bottom" id="time-item">
                                    3 phứt trước
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-b-t-1-item">
                        <div class="option-item">
                            <div class="item-left">
                                <a href="#" title="click để xem thêm" class="item-left-1">
                                    <img src="image/item-left-1.png">
                                </a>
                            </div>
                            <div class="item-right">
                                <div class="item-right-top">
                                    <a href="#" title="click để xem thêm" class="item-left-2">
                                        Đã bắt được nghi phạm
                                        chính vụ khủng bố ở Paris
                                    </a>
                                </div>
                                <div class="item-right-bottom" id="time-item">
                                    3 phứt trước
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-b-t-1-item">
                        <div class="option-item">
                            <div class="item-left">
                                <a href="#" title="click để xem thêm" class="item-left-1">
                                    <img src="image/item-left-1.png">
                                </a>
                            </div>
                            <div class="item-right">
                                <div class="item-right-top">
                                    <a href="#" title="click để xem thêm" class="item-left-2">
                                        Đã bắt được nghi phạm
                                        chính vụ khủng bố ở Paris
                                    </a>
                                </div>
                                <div class="item-right-bottom" id="time-item">
                                    3 phứt trước
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-b-t-1-item">
                        <div class="option-item">
                            <div class="item-left">
                                <a href="#" title="click để xem thêm" class="item-left-1">
                                    <img src="image/item-left-1.png">
                                </a>
                            </div>
                            <div class="item-right">
                                <div class="item-right-top">
                                    <a href="#" title="click để xem thêm" class="item-left-2">
                                        Đã bắt được nghi phạm
                                        chính vụ khủng bố ở Paris
                                    </a>
                                </div>
                                <div class="item-right-bottom" id="time-item">
                                    3 phứt trước
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-b-t-1-item">
                        <div class="option-item">
                            <div class="item-left">
                                <a href="#" title="click để xem thêm" class="item-left-1">
                                    <img src="image/item-left-1.png">
                                </a>
                            </div>
                            <div class="item-right">
                                <div class="item-right-top">
                                    <a href="#" title="click để xem thêm" class="item-left-2">
                                        Đã bắt được nghi phạm
                                        chính vụ khủng bố ở Paris
                                    </a>
                                </div>
                                <div class="item-right-bottom" id="time-item">
                                    3 phứt trước
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-b-t-1-item">
                        <div class="option-item">
                            <div class="item-left">
                                <a href="#" title="click để xem thêm" class="item-left-1">
                                    <img src="image/item-left-1.png">
                                </a>
                            </div>
                            <div class="item-right">
                                <div class="item-right-top">
                                    <a href="#" title="click để xem thêm" class="item-left-2">
                                        Đã bắt được nghi phạm
                                        chính vụ khủng bố ở Paris
                                    </a>
                                </div>
                                <div class="item-right-bottom" id="time-item">
                                    3 phứt trước
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-b-t-1-item">
                        <div class="option-item">
                            <div class="item-left">
                                <a href="#" title="click để xem thêm" class="item-left-1">
                                    <img src="image/item-left-1.png">
                                </a>
                            </div>
                            <div class="item-right">
                                <div class="item-right-top">
                                    <a href="#" title="click để xem thêm" class="item-left-2">
                                        Đã bắt được nghi phạm
                                        chính vụ khủng bố ở Paris
                                    </a>
                                </div>
                                <div class="item-right-bottom" id="time-item">
                                    3 phứt trước
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="b-b-1-giua col-md-6">
                <div class="bbt1giua-option">
                    <div class="bbt1giua-header">
                        <a href="#" class="a-img-e"><img src="image/bbt1giua-header.png"></a>
                    </div>
                    <div class="bbt1giua-body">
                        <div class="bbt1giuabody-top"><a href="#" class="a-tieude">Chụp hình đẹp hơn mùa du lịch 2016</a></div>
                        <div class="bbt1giuabody-bottom">​Sau khi bình phục từ sự cố trục trặc sức khỏe ở Vip dance, Trang Pháp đã lấy lại phong độ thường thấy với tốc độ khá nhanh.</div>
                    </div>
                    <div class="bbt1giua-ender">
                        <div class="bbt1giuaender-left" >
                            <div><a class="a-img-e"><img src="image/img-bbt1giuaender.png"></a></div>
                            <div class="a-bbt1giuaender"><a href="#" class="a-tit-e">Quyến rũ, tinh tế với phong cách Bohemian - Ngôi sao           </a></div>
                        </div>
                        <div class="bbt1giuaender-right">
                            <div><a class="a-img-e"><img src="image/img-bbt1giuaender.png"></a></div>
                            <div class="a-bbt1giuaender"><a href="#" class="a-tit-e">16 tình huống khó chịu thường gặp khi mua sắm của các Ngôi sao </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="b-b-1-phai col-md-3">
                <img src="image/quangcao-2.png">
            </div>
            </div>
            <div class="b-body-2-option">
                <div class="b-body-2">
                    <div class="bb2-item">
                        <div class="bb2item-left col-md-6">
                            <div class="bb2i-left">
                                <div id="demo">
                                    <div>
                                        <div class="ribbon ribbon-left">
                                            <div class="plus"><a href="#" class="a-ribbon">Sao</a></div>
                                        </div>
                                        <div class="ribbon-right"><img src="image/duoi.png"></div>
                                    </div>

                                    <div class="noidung">
                                        <div class="option-nd">
                                            <div class="nd-top">
                                                <div class="img-nd">
                                                    <a class="a-img-e" href="#"><img src="image/minhhoa-1.png"></a>
                                                </div>
                                                <div class="tit-nd">
                                                    <a href="#" class="a-tit-nd">Ảnh hậu trường "hiếm có khó tìm" của cặp đôi "Hậu duệ của mặt trời"</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nd-bottom">
                                    <ul class="ul-nd-bottom">
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Fan sôi sục khi T-Bag, C-Note và Sucre trở lại cùng
                                                "Prison Break 5"
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phim hoạt hình mới của hãng Ghibli lấy cảm hứng
                                                từ manga lâu đời nhất thế giới
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phạt cơ sở cung cấp thức ăn khiến 40 học sinh
                                                nhập viện
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bb2item-right col-md-6">
                            <div class="bb2i-right">
                                <div id="demo">
                                    <div>
                                        <div class="ribbon ribbon-left">
                                            <div class="plus"><a href="#" class="a-ribbon">Sức Khỏe</a></div>
                                        </div>
                                        <div class="ribbon-right"><img src="image/duoi.png"></div>
                                    </div>

                                    <div class="noidung">
                                        <div class="option-nd">
                                            <div class="nd-top">
                                                <div class="img-nd">
                                                    <a class="a-img-e" href="#"><img src="image/minhhoa-1.png"></a>
                                                </div>
                                                <div class="tit-nd">
                                                    <a href="#" class="a-tit-nd">Ảnh hậu trường "hiếm có khó tìm" của cặp đôi "Hậu duệ của mặt trời"</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nd-bottom">
                                    <ul class="ul-nd-bottom">
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Fan sôi sục khi T-Bag, C-Note và Sucre trở lại cùng
                                                "Prison Break 5"
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phim hoạt hình mới của hãng Ghibli lấy cảm hứng
                                                từ manga lâu đời nhất thế giới
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phạt cơ sở cung cấp thức ăn khiến 40 học sinh
                                                nhập viện
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bb2-item">
                        <div class="bb2item-left col-md-6">
                            <div class="bb2i-left">
                                <div id="demo">
                                    <div>
                                        <div class="ribbon ribbon-left">
                                            <div class="plus"><a href="#" class="a-ribbon">Nàng tám</a></div>
                                        </div>
                                        <div class="ribbon-right"><img src="image/duoi.png"></div>
                                    </div>

                                    <div class="noidung">
                                        <div class="option-nd">
                                            <div class="nd-top">
                                                <div class="img-nd">
                                                    <a class="a-img-e" href="#"><img src="image/minhhoa-1.png"></a>
                                                </div>
                                                <div class="tit-nd">
                                                    <a href="#" class="a-tit-nd">Ảnh hậu trường "hiếm có khó tìm" của cặp đôi "Hậu duệ của mặt trời"</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nd-bottom">
                                    <ul class="ul-nd-bottom">
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Fan sôi sục khi T-Bag, C-Note và Sucre trở lại cùng
                                                "Prison Break 5"
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phim hoạt hình mới của hãng Ghibli lấy cảm hứng
                                                từ manga lâu đời nhất thế giới
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phạt cơ sở cung cấp thức ăn khiến 40 học sinh
                                                nhập viện
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bb2item-right col-md-6">
                            <div class="bb2i-right">
                                <div id="demo">
                                    <div>
                                        <div class="ribbon ribbon-left">
                                            <div class="plus"><a href="#" class="a-ribbon">Bà bầu</a></div>
                                        </div>
                                        <div class="ribbon-right"><img src="image/duoi.png"></div>
                                    </div>

                                    <div class="noidung">
                                        <div class="option-nd">
                                            <div class="nd-top">
                                                <div class="img-nd">
                                                    <a class="a-img-e" href="#"><img src="image/minhhoa-1.png"></a>
                                                </div>
                                                <div class="tit-nd">
                                                    <a href="#" class="a-tit-nd">Ảnh hậu trường "hiếm có khó tìm" của cặp đôi "Hậu duệ của mặt trời"</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nd-bottom">
                                    <ul class="ul-nd-bottom">
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Fan sôi sục khi T-Bag, C-Note và Sucre trở lại cùng
                                                "Prison Break 5"
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phim hoạt hình mới của hãng Ghibli lấy cảm hứng
                                                từ manga lâu đời nhất thế giới
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phạt cơ sở cung cấp thức ăn khiến 40 học sinh
                                                nhập viện
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bb2-item">
                        <div class="bb2item-left col-md-6">
                            <div class="bb2i-left">
                                <div id="demo">
                                    <div>
                                        <div class="ribbon ribbon-left">
                                            <div class="plus"><a href="#" class="a-ribbon">Đẹp</a></div>
                                        </div>
                                        <div class="ribbon-right"><img src="image/duoi.png"></div>
                                    </div>

                                    <div class="noidung">
                                        <div class="option-nd">
                                            <div class="nd-top">
                                                <div class="img-nd">
                                                    <a class="a-img-e" href="#"><img src="image/minhhoa-1.png"></a>
                                                </div>
                                                <div class="tit-nd">
                                                    <a href="#" class="a-tit-nd">Ảnh hậu trường "hiếm có khó tìm" của cặp đôi "Hậu duệ của mặt trời"</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nd-bottom">
                                    <ul class="ul-nd-bottom">
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Fan sôi sục khi T-Bag, C-Note và Sucre trở lại cùng
                                                "Prison Break 5"
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phim hoạt hình mới của hãng Ghibli lấy cảm hứng
                                                từ manga lâu đời nhất thế giới
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phạt cơ sở cung cấp thức ăn khiến 40 học sinh
                                                nhập viện
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bb2item-right col-md-6">
                            <div class="bb2i-right">
                                <div id="demo">
                                    <div>
                                        <div class="ribbon ribbon-left">
                                            <div class="plus"><a href="#" class="a-ribbon">Thời trang</a></div>
                                        </div>
                                        <div class="ribbon-right"><img src="image/duoi.png"></div>
                                    </div>

                                    <div class="noidung">
                                        <div class="option-nd">
                                            <div class="nd-top">
                                                <div class="img-nd">
                                                    <a class="a-img-e" href="#"><img src="image/minhhoa-1.png"></a>
                                                </div>
                                                <div class="tit-nd">
                                                    <a href="#" class="a-tit-nd">Ảnh hậu trường "hiếm có khó tìm" của cặp đôi "Hậu duệ của mặt trời"</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nd-bottom">
                                    <ul class="ul-nd-bottom">
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Fan sôi sục khi T-Bag, C-Note và Sucre trở lại cùng
                                                "Prison Break 5"
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phim hoạt hình mới của hãng Ghibli lấy cảm hứng
                                                từ manga lâu đời nhất thế giới
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phạt cơ sở cung cấp thức ăn khiến 40 học sinh
                                                nhập viện
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bb2-item">
                        <div class="bb2item-left col-md-6">
                            <div class="bb2i-left">
                                <div id="demo">
                                    <div>
                                        <div class="ribbon ribbon-left">
                                            <div class="plus"><a href="#" class="a-ribbon">Giải trí</a></div>
                                        </div>
                                        <div class="ribbon-right"><img src="image/duoi.png"></div>
                                    </div>

                                    <div class="noidung">
                                        <div class="option-nd">
                                            <div class="nd-top">
                                                <div class="img-nd">
                                                    <a class="a-img-e" href="#"><img src="image/minhhoa-1.png"></a>
                                                </div>
                                                <div class="tit-nd">
                                                    <a href="#" class="a-tit-nd">Ảnh hậu trường "hiếm có khó tìm" của cặp đôi "Hậu duệ của mặt trời"</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nd-bottom">
                                    <ul class="ul-nd-bottom">
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Fan sôi sục khi T-Bag, C-Note và Sucre trở lại cùng
                                                "Prison Break 5"
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phim hoạt hình mới của hãng Ghibli lấy cảm hứng
                                                từ manga lâu đời nhất thế giới
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phạt cơ sở cung cấp thức ăn khiến 40 học sinh
                                                nhập viện
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bb2item-right col-md-6">
                            <div class="bb2i-right">
                                <div id="demo">
                                    <div>
                                        <div class="ribbon ribbon-left">
                                            <div class="plus"><a href="#" class="a-ribbon">Ăn chơi</a></div>
                                        </div>
                                        <div class="ribbon-right"><img src="image/duoi.png"></div>
                                    </div>

                                    <div class="noidung">
                                        <div class="option-nd">
                                            <div class="nd-top">
                                                <div class="img-nd">
                                                    <a class="a-img-e" href="#"><img src="image/minhhoa-1.png"></a>
                                                </div>
                                                <div class="tit-nd">
                                                    <a href="#" class="a-tit-nd">Ảnh hậu trường "hiếm có khó tìm" của cặp đôi "Hậu duệ của mặt trời"</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nd-bottom">
                                    <ul class="ul-nd-bottom">
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Fan sôi sục khi T-Bag, C-Note và Sucre trở lại cùng
                                                "Prison Break 5"
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phim hoạt hình mới của hãng Ghibli lấy cảm hứng
                                                từ manga lâu đời nhất thế giới
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phạt cơ sở cung cấp thức ăn khiến 40 học sinh
                                                nhập viện
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bb2-item">
                        <div class="bb2item-left col-md-6">
                            <div class="bb2i-left">
                                <div id="demo">
                                    <div>
                                        <div class="ribbon ribbon-left">
                                            <div class="plus"><a href="#" class="a-ribbon">Thế giới 8</a></div>
                                        </div>
                                        <div class="ribbon-right"><img src="image/duoi.png"></div>
                                    </div>

                                    <div class="noidung">
                                        <div class="option-nd">
                                            <div class="nd-top">
                                                <div class="img-nd">
                                                    <a class="a-img-e" href="#"><img src="image/minhhoa-1.png"></a>
                                                </div>
                                                <div class="tit-nd">
                                                    <a href="#" class="a-tit-nd">Ảnh hậu trường "hiếm có khó tìm" của cặp đôi "Hậu duệ của mặt trời"</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nd-bottom">
                                    <ul class="ul-nd-bottom">
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Fan sôi sục khi T-Bag, C-Note và Sucre trở lại cùng
                                                "Prison Break 5"
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phim hoạt hình mới của hãng Ghibli lấy cảm hứng
                                                từ manga lâu đời nhất thế giới
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phạt cơ sở cung cấp thức ăn khiến 40 học sinh
                                                nhập viện
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bb2item-right col-md-6">
                            <div class="bb2i-right">
                                <div id="demo">
                                    <div>
                                        <div class="ribbon ribbon-left">
                                            <div class="plus"><a href="#" class="a-ribbon">Độc lạ</a></div>
                                        </div>
                                        <div class="ribbon-right"><img src="image/duoi.png"></div>
                                    </div>

                                    <div class="noidung">
                                        <div class="option-nd">
                                            <div class="nd-top">
                                                <div class="img-nd">
                                                    <a class="a-img-e" href="#"><img src="image/minhhoa-1.png"></a>
                                                </div>
                                                <div class="tit-nd">
                                                    <a href="#" class="a-tit-nd">Ảnh hậu trường "hiếm có khó tìm" của cặp đôi "Hậu duệ của mặt trời"</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nd-bottom">
                                    <ul class="ul-nd-bottom">
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Fan sôi sục khi T-Bag, C-Note và Sucre trở lại cùng
                                                "Prison Break 5"
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phim hoạt hình mới của hãng Ghibli lấy cảm hứng
                                                từ manga lâu đời nhất thế giới
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="a-nd-bottom">
                                                Phạt cơ sở cung cấp thức ăn khiến 40 học sinh
                                                nhập viện
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advertisement-2">
                    <img src="image/quangcao-3.png">
                </div>
            </div>
        </div>
    </div>
    <div class="ender" id="footer">
        <div class="center">
            <div class="menuFt">
                <ul>
                    <li>
                        <a href="#" title = "Trang chủ">TRANG CHỦ   </a>
                    </li>
                    <li>
                        <a href="#" title = "Sao">      SAO         </a>
                    </li>
                    <li>
                        <a href="#" title = "Nàng tám">NÀNG TÁM     </a>
                    </li>
                    <li>
                        <a href="#" title = "Đẹp">     ĐẸP          </a>
                    </li>
                    <li>
                        <a href="#" title = "Giải trí">GIẢI TRÍ     </a>
                    </li>
                    <li>
                        <a href="#" title = "Sức khỏe">SỨC KHỎE     </a>
                    </li>
                    <li>
                        <a href="#" title = "Bà bầu">  BÀ BẦU       </a>
                    </li>
                    <li>
                        <a href="#" title = "Thời trang">THỜI TRANG </a>
                    </li>
                    <li>
                        <a href="#" title = "Ăn chơi"> ĂN CHƠI      </a>
                    </li>
                    <li>
                        <a href="#" title = "Thế giới 8">THẾ GIỚI 8 </a>
                    </li>
                    <li>
                        <a href="#" title = "Độc lạ">   ĐỘC LẠ      </a>
                    </li>
                </ul>
            </div>

            <div class="logoFt">
                <a href=""><img src="image/logo.png"></a>
            </div>

            <div class="copyright">
                @Copyright 2016 Cung8.com, All rights reserved.
            </div>
        </div>
    </div>
</body>
</html>