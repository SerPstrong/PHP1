<?php   
    session_start();
    include_once 'functions.php';

    if (isset($_POST['submit'])) {
        saveReview($_POST);
    }

    include_once '../view/v_reviews.php';
?>