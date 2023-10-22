<?php 
    session_start();
    echo($_SESSION['selected_post_id']);
    echo("<script>console.log(sessionStorage.getItem('selected_post_id'));</script>");
?>