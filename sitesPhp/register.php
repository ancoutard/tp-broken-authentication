
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

?>  