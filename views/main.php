<div class="dashcorp">
    <div class="row">
        <?php require_once("dashBoard.php"); ?>
        <?php
        if ($connected) {
            require_once("table.php");
        } else if ($inscription) {
            require_once("formu.php");
        } else {
            require_once("connexion.php");
        }
        ?>
    </div>
</div>