<?php
    session_id("c3c1e5tun1dd3s3s51on");
    session_start();
?>
<div style="display: flex; margin: auto; flex-direction: column; width: 100%; align-items: center">
    <h1>Level 1</h1>
    <form style="display: flex; flex-direction: column">
        <?php
            session_start();
            echo $_SESSION;
        ?>
    </form>
</div>

<?php
    echo $_SESSION;