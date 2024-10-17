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
$less->compileFile('less/3060.less', 'css/3060.css');
?>

<!DOCTYPE html>
<html>

<head>
    <title>3060</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/3060.css">

</head>

<body>
    <div class="type-3060">
        <div class="process-head mt-5">
            <h2 class="process-title">OUR PROCESS</h2>
            <div class="process-cotchinh"> 
                <div class="process-cot">
                    <div class="process-box">
                        <img src="image/anh1.jpg" alt="Step 1">
                        <h4><span class="process-number">1.</span> YOU CALL US</h4>
                        <p>You may call us at any time convenient for you. Our consultant will record the cause of failure of the gadget, your contact details and direct you to the wizard.</p>
                    </div>
                </div>
                <div class="process-cot">
                    <div class="process-box">
                        <img src="image/anh2.jpg" alt="Step 2">
                        <h4><span class="process-number">2.</span> ARRIVAL AND DIAGNOSIS</h4>
                        <p>After the arrival of the master diagnose gadget. Depending on the complexity of the repair, will make repairs on the spot or take away the gadget in the workshop.</p>
                    </div>
                </div>
                <div class="process-cot">
                    <div class="process-box">
                        <img src="image/anh3.jpg" alt="Step 3">
                        <h4><span class="process-number">3.</span> REPAIR</h4>
                        <p>Produced careful repair with replacement of parts only of the original production. You can not worry about the integrity of the data on the phone.</p>
                    </div>
                </div>
                <div class="process-cot">
                    <div class="process-box">
                        <img src="image/anh4.jpg" alt="Step 4">
                        <h4><span class="process-number">4.</span> RETURN TO THE SPECIFIED ADDRESS</h4>
                        <p>After a repair is completed our consultant will contact you and specify address and delivery time. Thank you.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>