<?php include 'includes/header.php';
$id=3;
include 'onglets.php';
if (!empty($_POST['encr']) && !empty($_POST['mdp'])) {
    ?>
    <div id="results"><p><?php
    if ($_POST['type']=='encr') {
         $resCr = crypter($_POST['mdp'], $_POST['encr']);
         if(strlen($resCr) >= 50)
         {
            for ($i=0; $i <= intval(strlen($resCr)/50); $i++) {
                echo substr($resCr, $i*50, 50)."<br/>";
            }
         }
         else
         {
            echo $resCr;
         }
    }
    else
    {
        $resDecr = decrypter($_POST['mdp'], $_POST['encr']);
        if(strlen($resDecr) > 60)
         {
            for ($i=0; $i <= intval(strlen($resDecr)/60); $i++) {
                echo substr($resDecr, $i*60, strpos($resDecr, ' ', 60))."<br/>";
            }
         }
         else
         {
            echo $resDecr;
         }
    }
    ?></p></div>
    <?php
}
include 'includes/footer.php'; ?>