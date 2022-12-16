<?php
// Check if php-curl librar is install or not.
function input_check(){
    if(! in_array ('curl', get_loaded_extensions()))
        echo '<script>alert("Oops. The PHP-Curl library is not available.")</script>';
}

// Check if output format is valid or not.
function output_check($output){
    if ( $output == "")
        echo '<script>alert("Ooops. It appears that the GPU instance or Triton server has been deactivated temporarily. Please contact admin.")</script>';
}

?>