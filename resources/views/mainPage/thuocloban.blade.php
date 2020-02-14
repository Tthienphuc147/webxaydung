@extends('masterPage')
@section('title')
Thước lỗ ban
@endsection
@section('content')
     
 <section class="banner_area" style="background: url(../public/img/banner/single-page-banner2.jpg); background-size: cover">
        <div class="container">
            <div class="banner_inner_text">
                <h4>THƯỚC LỖ BAN</h4>

            </div>
        </div>
    </section>


    
    <div>
    <div id="content" role="main" class="content-area">
    <script type="application/javascript" src="/public/js/iscroll.js"></script>
    <script type="application/javascript" src="/public/js/jquery-2.2.4.js"></script>
    
    <script type="text/javascript">
    var rulerLength = 1000; //So do 1 doan thuoc (mm)
        var trimStart = 0;  //So do dau cua thuoc (mm)
        var trimEnd = 1000; //So do cuoi cua thuoc (mm)
        var number=-1900;

        var myScroll;

        function pullRightAction() {
            if (trimStart > 0) {
                jQuery('#loban-scroller').width(function (i, width) {
                    return width + 10000;
                });
                trimStart -= rulerLength;
                var qStr = '?trimStart=' + trimStart + '&rulerLength=' + rulerLength;
                
                var newLi = jQuery('<li>').append(jQuery('<img/>', {src: 'https://vietnamarch.com.vn/wp-content/plugins/thuocloban/thuoc522.php' + qStr}))
                        .append(jQuery('<img/>', {src: 'https://vietnamarch.com.vn/wp-content/plugins/thuocloban/thuoc429.php' + qStr}))
                        .append(jQuery('<img/>', {src: 'https://vietnamarch.com.vn/wp-content/plugins/thuocloban/thuoc388.php' + qStr}));

                jQuery('#loban-thelist').prepend(newLi);
                myScroll.refresh();
            }
        }

        function pullLeftAction() {
            if (trimEnd < 50000) {
                jQuery('#loban-scroller').width(function (i, width) {
                    return width + 10000;
                });
                var qStr = '?trimStart=' + trimEnd + '&rulerLength=' + rulerLength;
                var newLi = jQuery('<li>').append(jQuery('<img/>', {src: 'https://vietnamarch.com.vn/wp-content/plugins/thuocloban/thuoc522.php' + qStr}))
                        .append(jQuery('<img/>', {src: 'https://vietnamarch.com.vn/wp-content/plugins/thuocloban/thuoc429.php' + qStr}))
                        .append(jQuery('<img/>', {src: 'https://vietnamarch.com.vn/wp-content/plugins/thuocloban/thuoc388.php' + qStr}));
                trimEnd += rulerLength;
                jQuery('#loban-thelist').append(newLi);
                myScroll.refresh();
            }
        }

        function loaded() {
            Math.nativeRound = Math.round;
            Math.round = function (i, iDecimals) {
                if (!iDecimals)
                    return Math.nativeRound(i);
                else
                    return Math.nativeRound(i * Math.pow(10, Math.abs(iDecimals))) / Math.pow(10, Math.abs(iDecimals));

            };

            myScroll = new iScroll('loban-wrapper', {
                useTransition: true,
                leftOffset: jQuery('#pullRight').outerWidth(true),
                onRefresh: function () {
                    jQuery('#thanhdo').css({'left': jQuery('#lobanOuter').width() / 2 + 'px'});
                    jQuery('#container-sodo').css({'left': (jQuery('#lobanOuter').width() / 2 - 28) + 'px'});
                    if (jQuery('#pullRight').hasClass('loading')) {
                        jQuery('#pullRight').removeClass('loading');
                        jQuery('#pullRight .pullRightLabel').html('Kê¯ qua ph?i...');
                    } else if (jQuery('#pullLeft').hasClass('loading')) {
                        jQuery('#pullLeft').removeClass('loading');
                        jQuery('#pullLeft .pullLeftLabel').html('Kê¯ qua trâ©®..');
                    }
                    jQuery('#sodoLoban').html(Math.round((-this.x + jQuery('#lobanOuter').width() / 2) / 100, 1) + ' cm');
                    jQuery('#sodo').val(Math.round((-this.x + jQuery('#lobanOuter').width() / 2) / 10, 0));
                },
                onScrollMove: function () {
                    jQuery('#sodoLoban').html(Math.round((-this.x + jQuery('#lobanOuter').width() / 2) / 100, 1) + ' cm');
                    jQuery('#sodo').val(Math.round((-this.x + jQuery('#lobanOuter').width() / 2) / 10, 0));
                },
                onScrollEnd: function () {
                    if (this.x == 0 && !jQuery('#pullRight').hasClass('flip')) {
                        jQuery('#pullRight').addClass('flip');
                        jQuery('#pullRight .pullRightLabel').html('Th? ra d? lá­ m?i...');
                    } else if (-this.x > (jQuery('#loban-scroller').width() - 2000) && !jQuery('#pullLeft').hasClass('flip')) {
                        jQuery('#pullLeft').addClass('flip');
                        jQuery('#pullLeft .pullLeftLabel').html('Th? ra d? lá­ m?i...');
                    }
                    if (jQuery('#pullRight').hasClass('flip')) {
                        jQuery('#pullRight').removeClass('flip');
                        jQuery('#pullRight').addClass('loading');
                        jQuery('#pullRight .pullRightLabel').html('...');
                        pullRightAction();	// Execute custom function (ajax call?)
                    } else if (jQuery('#pullLeft').hasClass('flip')) {
                        jQuery('#pullLeft').removeClass('flip');
                        jQuery('#pullLeft').addClass('loading');
                        jQuery('#pullLeft .pullLeftLabel').html('...');
                        pullLeftAction();	// Execute custom function (ajax call?)
                    }
                    jQuery('#sodoLoban').html(Math.round((-this.x + jQuery('#lobanOuter').width() / 2) / 100, 1) + ' cm');
                    jQuery('#sodo').val(Math.round((-this.x + jQuery('#lobanOuter').width() / 2) / 10, 0));
                }
            });

            setTimeout(function () {
                document.getElementById('loban-wrapper').style.left = '0';
            }, 800);

            jQuery('#sodo').blur(function () {
                var px = parseFloat(jQuery(this).val()) * 10
                px += jQuery('#lobanOuter').width() / 2;
                var st = Math.ceil((px - trimEnd * 10) / 10000)
                if (st > 0) {
                    for (var i = 1; i <= st; i++) {
                        pullLeftAction();
                    }
                    myScroll.refresh();
                }
                myScroll.scrollTo(-(px - Math.round(jQuery('#lobanOuter').width(), 0)), 0, Math.max((st + 1) * 500, 1500))
            })

            jQuery('#sodo').bind('keypress', function (e) {
                var code = e.keyCode || e.which;
                if (code == 13) {
                    jQuery(this).blur()
                } else {
                    if (!((code == 46) || (code >= 48 && code <= 57))) {
                        return false;
                    }
                }
            });

            jQuery(document).ready(function () {
                var px = 2020 + jQuery('#lobanOuter').width() / 2;
                myScroll.scrollTo(-(px - Math.round(jQuery('#lobanOuter').width(), 0)), 0, 500)
            });

        }

        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(loaded, 200);
        }, false);</script>
    <style type="text/css" media="all">
    #loban-thelist {
    padding:0px;
    margin:0px;
    }
    #loban-wrapper {
    position:absolute; z-index:1;
    top:0px; bottom:0; left:0;
    width:100%;
    background:#fff;
    overflow:auto;
    }
    #lobanOuter {
    width:100%;
    position:relative;
    }
    #loban-scroller {
    width:10100px;
    height:100%;
    float:left;
    padding:0;
    }
    #loban-scroller li {
    display:block;
    float:left;
    width:10000px;
    height:100%;
    }
    #loban-scroller li img{
    margin-top:50px;
    }			
    #pullRight, #pullLeft {
    display:block;
    width:50px;
    float:left;
    height:100%;
    }
    #sodoLoban {
    display:none;
    position:absolute;
    z-index:2;
    top:5px;
    left:400px;
    text-align:center;
    width:100px;
    font-size:16px;
    font-weight:bold;
    color:red;
    /*border:1px solid red;*/
    }
    #container-sodo {
    position: absolute;
    z-index: 2;
    top: 0px;
    left: 212px;
    width: 280px;
    }
    #sodo {
    text-align:center;
    font-size:16px;
    font-weight:bold;
    color:red;
    border:2px solid #ffa500;
    padding:2px;
    height:25px;
    width:60px;
    }
    #thanhdo {
    width: 2px;
    height: 427px;
    background: #ffa500;
    position: absolute;
    z-index: 2;
    top: 23px;
    left: 240px;
    }
    .titleLoban {
    }
    #abc {
    position: absolute;
    top: -20px;
    display:none;
    }
    .loban-note { position:absolute;z-index:2;top:25px;right:0;background:url('https://wonder.vn/Content/images/s16/help.gif') no-repeat 0 5px; padding-left:18px; }
    .loban-t { position:absolute;z-index:2;left:0; }
    .loban-522 { top:25px; }
    .loban-429 { top:175px; }
    .loban-388 { top:325px; }
    .loban-touch-left { position:absolute; left:0px; top:31px; height:358px;width:50px; z-index:2; }
    .loban-touch-right { position:absolute; right:0px; top:31px; height:358px;width:50px; z-index:2; }
    </style>		
    <div id="lobanOuter" style="height:460px;top:30px;">
    <div id="abc">this.x=-1260.5 : out=8100</div>
    <div class="loban-touch-left"></div>
    <div class="loban-touch-right"></div>
    <div id="sodoLoban">20.2 cm</div>
    <div id="container-sodo" style="left: 731.5px;"><input type="text" value="450" name="sodo" id="sodo"> mm (nhập số)</div>
    <div id="thanhdo" style="left: 759.5px;"></div>
    <p class="loban-note">Hãy kéo thước</p>
    <p class="loban-t loban-522"><strong>Thước Lỗ Ban 52.2cm:</strong> Khoảng thông thủy (cửa, cửa sổ...)</p>
    <p class="loban-t loban-429"><strong>Thước Lỗ Ban 42.9cm (Duong trạch):</strong> Khối xây dựng (bếp, bệ, bậc...)</p>
    <p class="loban-t loban-388"><strong>Thước Lỗ Ban 38.8cm (âm phần):</strong> Đồ nội thất (bàn thờ, tủ...)</p>
    <div id="loban-wrapper" style="overflow: hidden; left: 0px;">
    <div id="loban-scroller" style="transition-property: transform; transform-origin: 0px 0px; transition-timing-function: cubic-bezier(0.33, 0.66, 0.66, 1); transform: translate(-1960.5px, 0px) scale(1) translateZ(0px); transition-duration: 500ms;">
    <div id="pullRight" style="display: none;">
    <span class="pullRightIcon"></span><span class="pullRightLabel">Kéo qua phải...</span>
    </div>
    <ul id="loban-thelist">
    <li>
    <img src="https://wonder.vn/wp-content/plugins/wonder-customs/pt/thuoc522.php" nopin="nopin">
    <img src="https://wonder.vn/wp-content/plugins/wonder-customs/pt/thuoc429.php" nopin="nopin">
    <img src="https://wonder.vn/wp-content/plugins/wonder-customs/pt/thuoc388.php" nopin="nopin">
    </li>
    </ul>
    <div id="pullLeft" style="display:none;">
    <span class="pullLeftIcon"></span><span class="pullLeftLabel">Kéo qua trái...</span>
    </div>
    </div>
    <div style="position: absolute; z-index: 100; height: 7px; bottom: 1px; left: 2px; right: 2px; pointer-events: none; transition-property: opacity; overflow: hidden; opacity: 1;"><div style="position: absolute; z-index: 100; background: padding-box padding-box rgba(0, 0, 0, 0.5); border: 1px solid rgba(255, 255, 255, 0.9); box-sizing: border-box; height: 100%; border-radius: 3px; pointer-events: none; transition-property: transform; transform: translate(189.2px, 0px) translateZ(0px); transition-timing-function: cubic-bezier(0.33, 0.66, 0.66, 1); width: 227px; transition-duration: 500ms;"></div></div></div>
    <div class="clear"></div>
    </div>
    <div style="height:50px;"></div><div class="row row-full-width" id="row-2084252471">
    <div class="col small-12 large-12"><div class="col-inner">
    </div></div>
    <style scope="scope">
    </style>
    </div>
    </div>
    
    </div>
   


@endsection
