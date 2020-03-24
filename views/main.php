<div class="dashcorp">
    <div class="row">
        <?php require_once("dashBoard.php"); ?>
        <?php
        if ($connected) {
            require_once("table.php");
        } else {
            require_once("connexion.php");
        }
        ?>
    </div>
</div>