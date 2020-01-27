<?php
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');
    }
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    }

$link = mysqli_connect("localhost", "answer", "", "my_answer");
mysqli_set_charset($link, "utf8");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["t"])){
    
    $sql = "SELECT * FROM answers WHERE question LIKE ? LIMIT 1"; // we do not want duplicate answers, as we have limited html space!
    
    if($stmt = mysqli_prepare($link, $sql)){
        header("Access-Control-Allow-Origin: *");
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        $param_term = '%'. $_REQUEST["t"] . '%';
        
        if(mysqli_stmt_execute($stmt)){

            $result = mysqli_stmt_get_result($stmt);
            
            if(mysqli_num_rows($result) > 0){
                header("Access-Control-Allow-Origin: *");

                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p id='risposta'>". $row["risposta"] . "</p>";
                }
            } else{
                echo "";
            }
        } else{
            echo "" ;
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($link);
?> 

