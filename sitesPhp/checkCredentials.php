

<html>
    <body>
        <div>
            <p>

<?php
                      $usernameDur = "2231be6dd9c150cca7ae069c14c208b22b4e72c7c1d91a861d94eb2b4bb38f06";
                      $passwordDur = "6a05baa165a57fc448bbac95fe5bce2456a39323cc8fe3a6bed872ec043261c6";
                  
                      $username = $_POST['username'];
                      $password = $_POST['password'];
                  
                  
                      if(hash("sha256",$username) == $usernameDur && hash("sha256",$password) == $passwordDur){
                          echo("Bienvenu ".$username.", vous etes connecté");
                      }
                      else{
                          
                          echo("login failed");
                      }
                      
                ?>
                </p>
                    </div>
                    </body>
                    </html>