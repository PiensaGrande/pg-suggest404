<?php namespace pg_suggest404; ?>
<?php require_once($_SERVER["DOCUMENT_ROOT"] .  "/admin/common.php"); ?>
<?php
require_once(dirname(__FILE__) . "/pg-common.php");
include(dirname(__FILE__) . "/template.php");
$error_doc_settings = "ErrorDocument 404 {$templ['web_path']}/missing.php" . PHP_EOL . "ErrorDocument 403 {$templ['web_path']}/missing.php" . PHP_EOL ;

if (isset($_REQUEST['enableSuggest404'])) {
    ini_set('display_errors', '0');
    $position = 1;
    try {
	file_put_contents("{$_SERVER['DOCUMENT_ROOT']}/admin/.apache-{$templ['dirname']}-errorDocs.conf",$error_doc_settings);
    } catch (Exception $ex) {
        error_log($ex);
        header("HTTP/1.1 500 Internal Server Error");
        exit;
    }
} else if (isset($_REQUEST['disableSuggest404'])) {
    ini_set('display_errors', '0');
    $position = 1;
    try {
        exec("rm {$_SERVER['DOCUMENT_ROOT']}/admin/.apache-{$templ['dirname']}-errorDocs.conf", $exec_out, $exec_err);
    } catch (Exception $ex) {
        error_log($ex);
        header("HTTP/1.1 500 Internal Server Error");
        exit;
    }
    header("HTTP/1.1 200 OK");
    exit;
}

// If we haven't exited by this point, we must want to display admin box.
if(!file_exists($_SERVER['DOCUMENT_ROOT'] . "/admin/.apache-{$templ['dirname']}-errorDocs.conf")) {
           echo "
            <div id='suggest404Div' style='margin: 50px 0 50px 0; padding: 10px; border: 1px solid red; background: #fee;'>
            <h4 id='suggest404Status'>{$templ['suggest404Disabled']}</h4>
            <div id='suggest404Info'><p>{$templ['suggest404_blurb']}</p></div>
            <button id='enableSuggest404Button' style=''>{$templ['enableSuggest404']}</button>
            <button id='disableSuggest404Button' style='display:none;'>{$templ['disableSuggest404']}</button>
            </div>
            ";
} else {
        $curr_settings = file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/admin/.apache-{$templ['dirname']}-errorDocs.conf");
	$curr_settings = nl2br($curr_settings);
        echo "
            <div id='suggest404Div' style='margin: 50px 0 50px 0; padding: 10px; border: 1px solid green; background: MintCream;'>
            <h4 id='suggest404Status'>{$templ['suggest404Enabled']}</h4>
            <div id='suggest404Info' style=''><p>{$curr_settings}</p></div>
            <button id='enableSuggest404Button' style='display:none;'>{$templ['enableSuggest404']}</button>
            <button id='disableSuggest404Button' style='display:inline-block;'>{$templ['disableSuggest404']}</button>
            </div>
            ";
}

?>
