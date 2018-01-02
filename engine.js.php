<?php include(dirname(__FILE__) . "/template.php"); ?>
<script>

// onload
$(function() {
	enableSuggest404();
	disableSuggest404();
}); // end onload


 // button click calls this to set missing.php to 404 and 403 error messages
function enableSuggest404() {
    $("#enableSuggest404Button").on('click', function() {
            $.ajax({
                url: "<?php echo $templ['engine_web_loc']; ?>?enableSuggest404=1",
                success: function(data){
                    //alert("<?php echo $templ['enableSuggest404_ok']; ?>");
                    $("#suggest404Div").css('border', '1px solid green');
                    $("#suggest404Div").css('background', 'MintCream');
                    $("#suggest404Status").html("<?php echo $templ['enableSuggest404_ok']; ?>");
                    $("#suggest404Status").css('color','green');
                    $("#enableSuggest404Button").hide();
                    $("#suggest404Info").html("<?php echo "<p>{$templ['suggest404_blurb']}</p>"; ?>");
                    $("#disableSuggest404Button").show();
                },
                error: function(){
                    alert("<?php echo $templ['enableSuggest404_failed']; ?>");
                }
            });
    });
}

 // button click calls this to remove suggest404 settings
function disableSuggest404 () {
    $("#disableSuggest404Button").on('click', function() {
        $.ajax({
            url: "<?php echo $templ['engine_web_loc']; ?>?disableSuggest404=1",
            success: function(data){
                //alert("<?php echo $templ['disableSuggest404_ok']; ?>");
                $("#suggest404Div").css('border', '1px solid red');
                $("#suggest404Div").css('background', '#fee');
                $("#suggest404Status").html("<?php echo $templ['disableSuggest404_ok']; ?>");
                $("#suggest404Status").css('color','Crimson');
                $("#disableSuggest404Button").hide();
                $("#enableSuggest404Button").show();
                $("#suggest404Info").html("<?php echo "<p>{$templ['suggest404_blurb']}</p>"; ?>");
            },
            error: function(){
                alert("<?php echo $templ['disableSuggest404_failed']; ?>");
            }
            });
        });
}

</script>
