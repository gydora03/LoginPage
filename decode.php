<?php 
    
    $psw_file_1 = fopen("password.txt", "r") or exit("Unable to open file!");

    $keys = array(5, -14, 31, -9, 3);
    $count = 0;
    $decodedText = "";

    while (!feof($psw_file_1)) {

        $char = fgetc($psw_file_1);
        $hexchar = bin2hex($char);

        if ($hexchar == "0a") {
            $decodedText = $decodedText . " ";
            $count = 0;
        } else {
            $asciichar = chr(hexdec($hexchar) - $keys[$count]);
            $decodedText = $decodedText . $asciichar; 
            $count++;   
        }

        if ($count == 5) {
            $count = 0;
        }
        
    }

    fclose($psw_file_1);

?>