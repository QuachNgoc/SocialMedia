<?php

session_start();

if (isset($_GET['id']) && isset($_SESSION['userId']) && ($_SESSION['userLevel'] == 0))
{
    require 'dbh.inc.php';
    $blog_id = $_GET['id'];

    $sql = "delete from blogs where blog_id=?;";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql))
    {
        header("Location: ../hub.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $blog_id);

        mysqli_stmt_execute($stmt);
        header("Location: ../hub.php");
        exit();
    }
    
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
}

else
{
    header("Location: ../hub.php");
    exit();
}
