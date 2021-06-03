<html>
<head>  
    <title>PHP login system</title>  
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
<body>
    <div style="display: flex; margin: auto; flex-direction: column; width: 100%; align-items: center">
        <h1>Login</h1>  
        <form name="f1" action = "auth.php" onsubmit = "return validation()" method = "POST">
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="username" name  = "username" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "text" id ="password" name  = "password" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>
    <script>
        function validation()
        {
            var id=document.f1.user.value;
            var ps=document.f1.pass.value;
            if(id.length=="" && ps.length=="") {
                alert("User Name and Password fields are empty");
                return false;
            }
            else
            {
                if(id.length=="") {
                    alert("User Name is empty");
                    return false;
                }
                if (ps.length=="") {
                alert("Password field is empty");
                return false;
                }
            }
        }
    </script>
</body>
</html>

<?php

    $usernameDur = "d8e49a96c404c2ddb1aafd450d42cbdc447c07a080c74d2e3d183eb74b602ed3";
    $passwordDur = "81ce6f4a91476e10c4a2e48c0a2fb6945928f8c6e8b1e7812b9f0a3cf6272faf";

    $username = $_POST['username'];
    $password = $_POST['password'];

    echo(hash("sha256","marcAntoine"));
    echo "<br>";
    echo(hash("sha256","Antoine1916!"));
    echo "<br>";


    if(hash("sha256",$username) == $usernameDur && hash("sha256",$password) == $passwordDur){
        echo("Bienvenu ".$username.", vous etes connecté");
    }
    else{
        echo("login failed, veillez réessayer");
        echo(hash("Antoine1916!"));
    }