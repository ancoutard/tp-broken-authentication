<?php
    $a = session_id("c3c1e5tun1dd3s3s51on");
    if(empty($a)) session_start();
?>

<div style="display: flex; margin: auto; flex-direction: column; width: 100%; align-items: center">
    <h1>Level 1</h1>
    <p>Retrouver l'id de session. Plusieurs solutions sont possibles</p>
    <form name="s1" action="session1.php" method="POST"
          style="display: flex; flex-direction: column">
        <input name="msg" placeholder="Votre message"/>
        <button type="submit" style="margin-top: 0.25rem;">Envoyer</button>
    </form>
    <div style="display: flex; margin: auto; flex-direction: column; width: 100%; align-items: center">
        <?php
            echo "<p>".$_POST['msg']."</p>";
        ?>
    </div>
</div>
