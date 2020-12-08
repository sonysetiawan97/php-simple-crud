<?php

set_include_path('C:\xampp\htdocs\php\php-simple-crud');
include('crud/get.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="crud/post.php" method="POST">
        <input type="text" name="fname">
        <button>submit</button>
    </form>

    <table>

        <tr>
            <th>Name</th>
        </tr>

        <?php
        foreach($data as $value){
            ?>
            <tr><td><?php echo($value['fname']) ?></td></tr>
            <?php
        }
        ?>

    </table>

</body>

</html>