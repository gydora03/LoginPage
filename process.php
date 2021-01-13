<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>

    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">

    <script type="text/javascript" src="process.js"></script>
</head>
<body>
    
    <?php 
        require "index.html";

        $link = mysqli_connect("sql209.epizy.com", "epiz_27347235", "SeYZruA7uZ4XSLE") 
                or die("Failed to connect to database");
        mysqli_select_db($link, "epiz_27347235_adatok") 
                or die("Failed to select the database");
        
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sqlEmail = "SELECT Sor FROM tabla WHERE Username='$email'";
        $resultEmail = mysqli_query($link, $sqlEmail) or die( mysqli_error($link));


        if (mysqli_num_rows($resultEmail) > 0) {
            while ($rowEmail = mysqli_fetch_assoc($resultEmail)) {
                $emailResults = $rowEmail['Sor'];
            }

            include 'decode.php';

            $decodedText_cutted = strstr($decodedText, $email."*");
            $first_start_pos = strpos($decodedText_cutted, "*") + 1;
            $password_decoded = "";

            while ($decodedText_cutted[$first_start_pos] != " ") {
                $password_decoded = $password_decoded . $decodedText_cutted[$first_start_pos];
                $first_start_pos++;
            }

            if ($password == $password_decoded) {

                $sql = "SELECT Titkos FROM tabla WHERE Username='$email'";
                $result = mysqli_query($link, $sql) or die( mysqli_error($link));
    
                while ($row = mysqli_fetch_assoc($result)) {
                    $color = $row['Titkos'];
                }

                ?>
                <script type="text/JavaScript">
                    var color = "<?php echo $color; ?>";
                    changeBackgroundImage(color);
                </script>
                <?php                
        
            } else { 
                echo 
                '<script type="text/JavaScript">
                    passwordWarning();
                </script>';
            }

        } else {
            echo
            '<script type="text/JavaScript">
                emailWarning();
            </script>';
        }

        mysqli_close($link);
 
    ?>

</body>
</html>