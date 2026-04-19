<?php
session_start();

if (empty($_SESSION['player_id'])) {
    header("Location: index.php"); // hoặc trang nhập ID
        exit;
        }
        
        $playerID = $_SESSION['player_id'];
        ?>
        <!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1, user-scalable=no, viewport-fit=cover">
<title>Trung tâm nạp thẻ Garena</title>
<meta key="og:image" property="og:image" content="https://cdngarenanow-a.akamaihd.net/webmain/static/favicon.ico" data-react-helmet="true">
<link rel="shortcut icon" href="https://cdngarenanow-a.akamaihd.net/webmain/static/favicon.ico">
<link rel="stylesheet" href="/css/index.css?v=48">
<link rel="stylesheet" href="/js/slick/slick.css">
<meta key="description" name="description" content="Trang nạp thẻ chính thức của Garena. Nạp Sò, nạp Quân Huy, nạp RP, nạp EP dễ dàng và an toàn cho các game Garena như Liên Minh Huyền Thoại, FIFA ONLINE 3, FO3M, Blade and Soul, Liên Quân Mobile, Chiến Dịch Huyền Thoại, DDTank, Free Fire, Âm Dương Sư." data-react-helmet="true">
<meta key="keywords" name="keywords" content="nạp tiền, garena, game, games" data-react-helmet="true">
<meta key="twitter:title" name="twitter:title" content="Trung tâm nạp thẻ Garena" data-react-helmet="true">
<meta key="twitter:description" name="twitter:description" content="Trang nạp thẻ chính thức của Garena. Nạp Sò, nạp Quân Huy, nạp RP, nạp EP dễ dàng và an toàn cho các game Garena như Liên Minh Huyền Thoại, FIFA ONLINE 3, FO3M, Blade and Soul, Liên Quân Mobile, Chiến Dịch Huyền Thoại, DDTank, Free Fire, Âm Dương Sư." data-react-helmet="true">
<meta key="og:title" property="og:title" content="Trung tâm nạp thẻ Garena" data-react-helmet="true">
<meta key="og:type" property="og:type" content="website" data-react-helmet="true">
<meta key="og:url" property="og:url" content="https://napthex2.vn" data-react-helmet="true">
<meta key="og:description" property="og:description" content="Trang nạp thẻ chính thức của Garena. Nạp Sò, nạp Quân Huy, nạp RP, nạp EP dễ dàng và an toàn cho các game Garena như Liên Minh Huyền Thoại, FIFA ONLINE 3, FO3M, Blade and Soul, Liên Quân Mobile, Chiến Dịch Huyền Thoại, DDTank, Free Fire, Âm Dương Sư." data-react-helmet="true">
<script type="text/javascript" src="/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/js/slick/slick.js"></script>
<link rel="stylesheet" href="https://napthex2.vn/css/indexpc.css?v=28">
<link href="https://napthex2.vn/css/style.css" rel="stylesheet" />
<link href="https://napthex2.vn/css/new.css" rel="stylesheet" />
<script type="text/javascript" src="/js/style.js?v=2"></script>

<style type="text/css">
    #react-root,
    body,
    html {
        height: 100%;
        width: 100%;
    }
    body {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }
    abbr,
    address,
    article,
    aside,
    audio,
    b,
    blockquote,
    body,
    canvas,
    caption,
    cite,
    code,
    dd,
    del,
    details,
    dfn,
    div,
    dl,
    dt,
    em,
    fieldset,
    figcaption,
    figure,
    footer,
    form,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    header,
    hgroup,
    html,
    i,
    iframe,
    img,
    ins,
    kbd,
    label,
    legend,
    li,
    mark,
    menu,
    nav,
    object,
    ol,
    p,
    pre,
    q,
    samp,
    section,
    small,
    span,
    strong,
    sub,
    summary,
    sup,
    table,
    tbody,
    td,
    tfoot,
    th,
    thead,
    time,
    tr,
    ul,
    var,
    video {
        padding: 0;
        margin: 0;
        border: none;
    }
    table {
        border-collapse: collapse;
        border-spacing: 0;
    }
    article,
    aside,
    canvas,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section,
    summary {
        display: block;
    }
    fieldset,
    img {
        border: 0;
    }
    address,
    b,
    caption,
</style></head>

<body>
    <div id="react-root">
        <div class="_16hfKztdJy7nkFPM5IJ6tS _16hfKztdJy7nkFPM5IJ6tS">
            <div class="_16C9M7tdVD3tNmnu8LzgI7 _16C9M7tdVD3tNmnu8LzgI7">
                <div>
                    <header class="UTikiVPPVXrgLueAsYrBr">
    <div class="_1ONVnVuxqc4fk9NxKlvIOG">
        <div class="_1QVWZSAEXfJNKc7yDp9saP">
            <a class="_3J98E8hPwQJy3mV09G2Tue" href="#">
                <div class="_3fcSzPSRnP8jz83qYClBoK"></div>
                <div class="_2Cp0qp07LoVCrBYHDkNEnI">Trung tâm nạp thẻ Garena</div>
            </a>
        </div>
        <div class="sp">
            <a href="#" target="_blank" class="">Chăm sóc khách hàng</a>
        </div>
        <div class="_2aC6Sh3952enMuvO8erkaG">
            <span>×</span>
        </div>
        <div class="_3cRMtM0uagbwI2uMZtXqUz">
            <div class="_2XAq07w6Q2RmD-QpjNMR6S"></div>
            <div class="_2Gc7g0OGQTrHTgc1iFmTwj _6T_BHoBiVvo0BC_GR8YR8">
                                <div class="_1q6jxMlR6v2lCJBHcJpun-">
                    <div class="_2kxt98hdR8WYt6mjIkiQCo">
                                                            <img class="_1TePHQeW1z5dNQ0aPr7jxP" src="https://cdn-gop.garenanow.com/gop/app/0000/100/067/icon.png">
                    </div>
                    <div class="_1Jo5N8EWUOXwuggjUCyd7y">
                                        <div class="player-info">
                                            ID Game: <strong><?= htmlspecialchars($playerID) ?></strong>
                                            </div></div>
                                    
                </div>
                <div class="LaaMl4DbAmODsWgFTVgpR"><a href="/m/">Thoát chế độ ID người chơi</a>
                            </div>
        </div>
    </div>
</header>
<script>
    function toggleSlide() {
        if (document.querySelector('._2Gc7g0OGQTrHTgc1iFmTwj').classList.contains('_6T_BHoBiVvo0BC_GR8YR8')) {
            document.querySelector('._2aC6Sh3952enMuvO8erkaG > span').textContent = '☰';
            document.querySelector('._2Gc7g0OGQTrHTgc1iFmTwj').classList.remove('_6T_BHoBiVvo0BC_GR8YR8');
            document.querySelector('._3cRMtM0uagbwI2uMZtXqUz').style.height = '0';
            document.querySelector('._2XAq07w6Q2RmD-QpjNMR6S').style.display = 'none';
            document.body.style.overflowY = 'auto';
            document.body.style.overflowX = 'hidden';
            document.body.style.position = 'relative';
        } else if (!document.querySelector('._2Gc7g0OGQTrHTgc1iFmTwj').classList.contains('_6T_BHoBiVvo0BC_GR8YR8')) {
            document.querySelector('._2aC6Sh3952enMuvO8erkaG > span').textContent = '×';
            document.querySelector('._2Gc7g0OGQTrHTgc1iFmTwj').classList.add('_6T_BHoBiVvo0BC_GR8YR8');
            document.querySelector('._3cRMtM0uagbwI2uMZtXqUz').style.height = 'calc(100% - 1rem)';
            document.querySelector('._2XAq07w6Q2RmD-QpjNMR6S').style.display = 'block';
            document.body.style.overflowY = 'hidden';
            document.body.style.overflowX = 'hidden';
            document.body.style.position = 'fixed';
        }
    }
    toggleSlide();
    document.querySelector('._2aC6Sh3952enMuvO8erkaG').onclick = function() {
        toggleSlide();
    }
    document.querySelector('._2XAq07w6Q2RmD-QpjNMR6S').onclick = function() {
        toggleSlide();
    }
</script>
                </div>
                <div class="_1Pwoq_3c-4KKt6mGEaJM4G">
                    <div class="">
                        <div class="slick-slider slick-initialized" dir="ltr" style="">
                            <div class="slick-list">
                                <img src="https://contentgarena-a.akamaihd.net/GOP/newshop_banners/banner_set_aov_267banne_mb.jpg?v=1712039843" style="width:100%">
                            </div>
                        </div>
                        <div class="_3f-m0st2qDjSaTPmnKOkx9">
                                           <div class="_1jPR3yDBueGhqSjb8-iG0z"><img class="_2fx6ftCYju6CGgvot2YcIY E8Jbe_g-sEvsLXQWcOJ6c" src="https://cdn-gop.garenanow.com/gop/app/0000/100/067/icon.png" /></div>
                            <div class="_2yk8ldz0yd5Kd2TsRo8grZ">Free Fire</div>
                                             </div>
                        <div class="_1n1W4aBnQ5uoAyBsAIiRou">Chọn Phương thức thanh toán <br><span class="noti">Một số phương thức thanh toán bị từ chối vì chính sách ưu đãi</span></div>
                        <div class="">
                            <ul class="xQF7aleseO4H-o7YbLrdn" id="type">
                                <li class="_3Vx7kKRsmCY6mU98NYNJG">
                                        <a class="ME1Wh9NhfrVC0U5uXzXaJ" href="javascript:;" data-type="GARENA">
                                            <div><img class="_3SmLrhg5KK-OoZ5d4spbHu" src="https://cdn-gop.garenanow.com/webmain/static/open_platform/images/icon_ppc.png" /></div>
                                            <div class="_1WV9_QC57QbhAHdKfaM8u3">
                                                <div class="_3lw766Vm4j4G1p-kH5F2WF">Thẻ Garena</div>
                                           <div class="_2zuavBr7AOtazEX-hnh3Rf HSb3oGz_Pt2SUBIq1EKvT">Hot</div></div>
                                        </a>
                                    </li>
                                <li class="_3Vx7kKRsmCY6mU98NYNJG">
                                    <a class="ME1Wh9NhfrVC0U5uXzXaJ" href="javascript:;" data-type="VIETTEL">
                                        <div><img class="_3SmLrhg5KK-OoZ5d4spbHu" src="/cardimg/Viettel.png" /></div>
                                        <div class="_1WV9_QC57QbhAHdKfaM8u3"><div class="_3lw766Vm4j4G1p-kH5F2WF">Thẻ Viettel</div>
                                        <div class="_2zuavBr7AOtazEX-hnh3Rf HSb3oGz_Pt2SUBIq1EKvT">Hot</div></div>
                                    </a>
                                </li>
                                <li class="_3Vx7kKRsmCY6mU98NYNJG">
                                    <a class="ME1Wh9NhfrVC0U5uXzXaJ" href="javascript:;" data-type="MOBIFONE">
                                        <div><img class="_3SmLrhg5KK-OoZ5d4spbHu" src="/cardimg/Mobifone.png" /></div>
                                        <div class="_1WV9_QC57QbhAHdKfaM8u3"><div class="_3lw766Vm4j4G1p-kH5F2WF">Thẻ Mobifone</div>
                                        <div class="_2zuavBr7AOtazEX-hnh3Rf HSb3oGz_Pt2SUBIq1EKvT">Hot</div></div>
                                    </a>
                                </li>
                                <li class="_3Vx7kKRsmCY6mU98NYNJG">
                                    <a class="ME1Wh9NhfrVC0U5uXzXaJ" href="javascript:;" data-type="VINAPHONE">
                                        <div><img class="_3SmLrhg5KK-OoZ5d4spbHu" src="/cardimg/Vinaphone.png" /></div>
                                        <div class="_1WV9_QC57QbhAHdKfaM8u3"><div class="_3lw766Vm4j4G1p-kH5F2WF">Thẻ Vinaphone</div>
                                        <div class="_2zuavBr7AOtazEX-hnh3Rf HSb3oGz_Pt2SUBIq1EKvT">Hot</div></div>
                                    </a>
                                </li>
                                <li class="_3Vx7kKRsmCY6mU98NYNJG di">
                                        <a class="ME1Wh9NhfrVC0U5uXzXaJ" href="/app/100067/buy/0/205074">
                                            <div><img class="_3SmLrhg5KK-OoZ5d4spbHu" src="https://cdn.garenanow.com/webmain/static/payment_center/vn/menu/vnshopeepay_mb.png" /></div>
                                            <div class="_1WV9_QC57QbhAHdKfaM8u3">
                                                <div class="_3lw766Vm4j4G1p-kH5F2WF">Ví ShopeePay</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="_3Vx7kKRsmCY6mU98NYNJG di">
                                        <a class="ME1Wh9NhfrVC0U5uXzXaJ" href="/app/100067/buy/0/205070">
                                            <div><img class="_3SmLrhg5KK-OoZ5d4spbHu" src="https://cdn-gop.garenanow.com/webmain/static/open_platform/images/icon_gs.png" /></div>
                                            <div class="_1WV9_QC57QbhAHdKfaM8u3"><div class="_3lw766Vm4j4G1p-kH5F2WF">Garena Sò</div></div>
                                        </a>
                                    </li>
                            <li class="_3Vx7kKRsmCY6mU98NYNJG di">
                                        <a class="ME1Wh9NhfrVC0U5uXzXaJ" href="/app/100067/buy/0/205151">
                                            <div><img class="_3SmLrhg5KK-OoZ5d4spbHu" src="/cardimg/Qr.png" /></div>
                                            <div class="_1WV9_QC57QbhAHdKfaM8u3"><div class="_3lw766Vm4j4G1p-kH5F2WF">QR Pay</div></div>
                                        </a>
                                    </li>
                                <li class="_3Vx7kKRsmCY6mU98NYNJG di">
                                        <a class="ME1Wh9NhfrVC0U5uXzXaJ" href="/app/100067/buy/0/205214">
                                            <div><img class="_3SmLrhg5KK-OoZ5d4spbHu" src="/cardimg/Bank.png" /></div>
                                            <div class="_1WV9_QC57QbhAHdKfaM8u3"><div class="_3lw766Vm4j4G1p-kH5F2WF">Thanh toán qua App Ngân Hàng</div></div>
                                        </a>
                                    </li>
                            <li class="_3Vx7kKRsmCY6mU98NYNJG di">
                                        <a class="ME1Wh9NhfrVC0U5uXzXaJ" href="/app/100067/buy/0/205136">
                                            <div><img class="_3SmLrhg5KK-OoZ5d4spbHu" src="https://cdn-gop.garenanow.com/webmain/static/payment_center/vn/menu/new_atm_mobile_2.png" /></div>
                                            <div class="_1WV9_QC57QbhAHdKfaM8u3"><div class="_3lw766Vm4j4G1p-kH5F2WF">ATM - iBanking</div></div>
                                        </a>
                                    </li>
                                    <li class="_3Vx7kKRsmCY6mU98NYNJG di">
                                        <a class="ME1Wh9NhfrVC0U5uXzXaJ" href="/app/100067/buy/0/205239">
                                            <div><img class="_3SmLrhg5KK-OoZ5d4spbHu" src="/cardimg/visa.png" /></div>
                                            <div class="_1WV9_QC57QbhAHdKfaM8u3"><div class="_3lw766Vm4j4G1p-kH5F2WF">Visa, Mastercard</div></div>
                                        </a>
                                    </li>
                                    <li class="_3Vx7kKRsmCY6mU98NYNJG di">
                                        <a class="ME1Wh9NhfrVC0U5uXzXaJ" href="/app/100067/buy/0/205239">
                                            <div><img class="_3SmLrhg5KK-OoZ5d4spbHu" src="/cardimg/napas.png" /></div>
                                            <div class="_1WV9_QC57QbhAHdKfaM8u3"><div class="_3lw766Vm4j4G1p-kH5F2WF">JCB, Amex</div></div>
                                        </a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="_1laFXW-WJnBWs5s4h6ebvQ">
    <div class="_336oF85hHwjJV-kdFMtI1l">
        <div class="_3nREQBj0T3yrWCBQ1yJuRv">
            <p>CÔNG TY CỔ PHẦN SHOPEEPAY</p>
            <p>Giấy CNĐKKD số 0103959912 | Cơ quan cấp: Phòng</p>
            <p>Đăng ký kinh doanh- Sở Kế hoạch và đầu tư TP Hà Nội</p>
            <p>Địa chỉ trụ sở chính: Tầng 5, Tháp 2, Tòa nhà Capital</p>
            <p>Place, Số 29 Liễu Giai, Phường Ngọc Khánh, Quận Ba</p>
            <p>Đình, thành phố Hà Nội, Việt Nam</p>
        </div>
        <nav class="_16D-rDvOnV7Y6XtvV4-3Uj">
            <a class="_2D9dsJX52QODJIaQynyEsl" href="https://napthe.vn/faq"><div class="Zxm2fWw1kQIGQAD8SP3ip">Câu hỏi thường gặp</div></a>
            <div class="_2D9dsJX52QODJIaQynyEsl"><a class="Zxm2fWw1kQIGQAD8SP3ip" href="https://napthe.vn/terms" target="_blank">Điều khoản dịch vụ</a></div>
            <div class="_2D9dsJX52QODJIaQynyEsl"><a class="Zxm2fWw1kQIGQAD8SP3ip" href="https://napthe.vn/privacy" target="_blank">Chính sách bảo mật</a></div>
        </nav>
    </div>
</footer>        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('[data-type]').click(function () {
                sessionStorage.setItem('type', $(this).data('type'));
                window.location.href = 'menhgia.php?name=';
            });
        });
    </script>
    <style>
        .di {
            filter: grayscale(100%);
            pointer-events: none;
        }
        .noti {
            font-size:12.5px;
            color:#ff4a00;
        }
    </style>
</body>
</html>