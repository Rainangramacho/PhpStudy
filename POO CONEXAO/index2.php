<?php
include 'dbh.inc.php';
include 'user.inc.php';
include 'viewuser.inc.php';
?>


<!DOCTYPE html>

<html>
<head>
</head>

<body>
    <?php
        $users = new ViewUser();
        $users->showAllUsers();
    ?>
<body>

</html>
