<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/3044.less', 'css/3044.css');
?>

<!DOCTYPE html>
<html>

<head>
    <title>3044</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/3044.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="type-3044">
        <div class="content d-flex align-items-center bg-light">
            <h2 class="w-100 text-center">Footer #4</h2>
        </div>
        <footer>
            <div class="footer-head">
                <div class="footer-section">



                    <img src="Image/fixar-logo-white-220x48.png" alt="FIXAR Logo" style="max-width: 100%; height: auto;">
                    <p>Elit sed uao eiusmod tempor incididunt ut labore et dolore magna aliqua uat enim ad minim veniam.</p>
                    <p> <i class='fa fa-home'></i><strong style="color:#fff;">354 DownHill Street, FL 33026</strong></p>
                    <p> <i class='fa fa-phone'></i><strong>Support :</strong><strong style="color:#fff;"> 1 623 475 9820</strong></p>
                    <p> <i class='fa fa-clock-o'></i><strong>Mon to Sat : </strong><strong style="color:#fff;">9:00am - 7:00pm</strong></p>
                </div>
                <div class="footer-section">
                    <h4>Repair Services</h4>
                    <hr>
                    <hr>
                    <ul>
                        <li>Phone Repair</li>
                        <li>Console repair</li>
                        <li>Lcd & Led TV repair</li>
                        <li>Computer Repair</li>
                        <li>Laptop Repair</li>
                        <li>Tablets Repair</li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Repair Worls News</h4>
                    <hr>
                    <hr>
                    <ul>
                        <li>10 Tips: Avoid Breaking Glass of your Smartphone</li>
                        <li>How to Repair iPhone: 6 Ways Best Online Guides</li>
                        <li>Finding a used Smartphone: Checking the Original</li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Get Even More</h4>
                    <hr>
                    <hr>
                    <p>"Get all latest content delivered straight to your inbox."</p>
                    <form>
                        <input type="email" placeholder="Enter email">
                        <button type="submit">GO</button>
                    </form>


                    <div class="social-media">
                        <i class='fa fa-arrow-right'></i>
                        <i class='fa fa-arrow-right'></i>
                        <i class='fa fa-arrow-right'></i>
                        <i class='fa fa-arrow-right'></i>

                        <i class='fa fa-arrow-right'></i>






                    </div>
                </div>
            </div>
        </footer>
        <div class="footer-section copyright">
            <h6>Copyright © 2024 Fixar Device Repair WordPress Theme. All Rights Reserved.</h6>
        </div>
    </div>
</body>

</html>