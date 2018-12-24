<?php
    $server="localhost";
    $user="root";
    $bd="chat_ajax";
    $con = new mysqli($server,$user,"",$bd);

    function resetDate($date){
        return date('g:i a', strtotime($date));
    }
?>