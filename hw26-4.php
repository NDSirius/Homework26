<!DOCTYPE html>
<html>
<head>
    <title>Homework</title>
</head>
<body>
    <form name="work" method="post">
        <label>Enter your login</label><br>
        <input type="text" name="login" required/><br>
        <label>Emter your password</label><br>
        <input type="text" name="password" required/><br>
        <label>Enter your email</label><br>
        <input type="text" name="email" required/><br>
        <label>Enter information about yourself</label><br>
        <input type="text" name="information"/><br>
        <input type="submit" name="send" value="Send"/>
    </form>
</body>
</html>
<?php
if(!empty($_POST['login'])) {
    if(preg_match('/^[a-zA-Z0-9]{1,15}$/',$_POST['login']))
    {
       echo 'Login validated' . "<br>";
    }
    else{
        echo 'Login length no more than 15 characters' . "<br>";
    }
}
if(!empty($_POST['password']))
{
    if(preg_match('/[-A-Za-zА-Яа-я0-9_,]{8,}$/',$_POST['password']))
    {
        echo 'Password validated' . "<br>";
    }
    else{
        echo 'Password must be at least 8 characters';
    }
}
if(!empty($_POST['email']))
    {
        if(!preg_match('/^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/',$email))
            {
                echo 'Email validated' . "<br>";
            }
        else{
        echo 'Email is incorrectly entered' . "<br>";
        }
    }
$information = $_POST['information'];
function lower($letters)
{
    return strtolower($letters[0]);
}
echo preg_replace_callback('/[A-Z]+/','lower',$information);
/*
if(!empty($_POST['information']))
{
         echo (preg_replace('/[A-Z]+/','',$_POST['information']));

}*/