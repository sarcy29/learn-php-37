<?php
    include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>How to show database data on a website using MySQLi</title>
</head>
<body>
    <?php
        $sql = "SELECT * FROM admin WHERE user_first='Sarcy';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['user_uid'] . "<br>";
            }
        }
    ?>
</body>
</html>