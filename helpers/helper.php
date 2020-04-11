<?php

//Redirect to page
function redirect($page = FALSE, $message = NULL, $messageType = NULL)
{
    if(is_string($page)){
        $location = $page;
    } else {
        $location = $_SERVER['SCRIPT_NAME'];
    }

    //Check for Message
    if($message != NULL){
        $_SESSION['message'] = $message;
    }

    //Check for Type
    if($messageType != NULL){
        $_SESSION['messageType'] = $messageType;
    }

    //Redirect
    header('Location: '.$location);
    exit;
}

//Display Message
function displayMessage()
{
    if(!empty($_SESSION['message'])){

        //Assign Message Var
        $message = $_SESSION['message'];

        if(!empty($_SESSION['messageType'])){
            //Assign Type Var
            $messageType = $_SESSION['messageType'];
            //Create Output
            if($messageType == "error"){
                echo '<div class="alert alert-danger">'.$message.'</div>';
            } else {
                echo '<div class="alert alert-success">'.$message.'</div>';
            }
        }
        unset($_SESSION['message']);
        unset($_SESSION['messageType']);
    } else {
        echo '';
    }
}
