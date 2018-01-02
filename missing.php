<?php namespace pg_suggest404; ?>
<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/admin/common.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/admin/pg-common.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/admin/lang/lang.piensagrande.php");

if (isset($_REQUEST['suggest404'])) {
    $logdata = array();
    $logdata['type'] = "suggest";
    $logdata['pathname'] = $_REQUEST['pathname'] ;
    $logdata['url'] = $_REQUEST['url'] ;
    ini_set('display_errors', '0');
    $position = 1;
    $logfile = $_SERVER['DOCUMENT_ROOT'] . "/suggest404.log";
    if (rachelLogger($logdata)) {
        header("HTTP/1.1 200 OK");
        exit;
    } else {
        error_log($ex);
        header("HTTP/1.1 500 Internal Server Error");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>RACHEL - Suggest404</title>
<link rel="stylesheet" href="/css/normalize-1.1.3.css">
<link rel="stylesheet" href="/css/style.css">
<script src="/js/jquery-1.10.2.min.js"></script>
<script>

    // onload
    $(function() {

 // button click call asks missing.php to log the request.
    $("#suggest404").on('click', function() {
        var pathname = window.location.pathname;
        var url = window.location.href;
        $.ajax({
            url: "/missing.php?suggest404=1&pathname="+pathname+"&url="+url,
            success: function(data){
                alert("<?php echo $lang['suggest404_ok']; ?>");
                $("#suggest_result").html("<?php echo $lang['suggest404_ok']; ?>");
                $("#suggest_result").css('color','green');
            },
            error: function(){
                alert("<?php echo $lang['suggest404_failed']; ?>");
                $("#suggest_result").html("<?php echo $lang['suggest404_failed']; ?>");
                $("#suggest_result").css('color','red');
            }
        });
    });

    });
</script>
</head>

<body>

<div id="content">
   <div style='margin: 50px 0 50px 0; padding: 10px; border: 1px solid red; background: #fee;'>
    <h2><?php echo $lang['suggest404_h2_message']; ?></h2>
    <p><?php echo $lang['suggest404_suggest_message']; ?></p>
        <button id='suggest404'><?php echo $lang['suggest404'] ?></button>
        <span id="suggest_result"></span>
   </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/about.html"); ?>

</body>
</html>
