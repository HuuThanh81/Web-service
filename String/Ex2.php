<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $LastName = '';
    $FirstName = '';
    $result = '';
    if(isset($_POST["first"]) && isset($_POST["last"])){
        $LastName = $_POST["last"];
        $FirstName = $_POST["first"];
        $F = ucfirst(strtolower($LastName));
        $L = ucfirst(strtolower($FirstName));
        $result = "$L $F";
   }

    ?>
    <form method="POST">
    <input type="text" placeholder="First Name" name="first"></input>
    <input type="text" placeholder="Last Name" name="last"></input>
    <button type="submit">submit</button>
    </form>

    <?php
    echo '<p>'.$result.'</p>';
    ?>
    
</body>
</html>



