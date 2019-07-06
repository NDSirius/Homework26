<!DOCTYPE html>
<html>
<head>
    <title>Homework</title>
</head>
<body>
    <form name="hw26-1" method="post">
        <label>Enter something</label><br>
        <input type="txt" name="something"/><br>
        <input type="submit" name="send" value="Send"/>
    </form>
</body>
</html>
<?php
if(isset($_POST["send"])) {
    $id = $_POST['something'];
    if (preg_match('/^[0-9]{1,5}$/', $id)) {
        echo "String contains number $id";
    } else {
        echo 'ERROR!';
    }
}
