<?php include 'includes/header.php';
$id=3;
include 'onglets.php';
if (!empty($_POST['encr']) && !empty($_POST['mdp'])) 
{
    ?>
    <div id="results"><p><?php
        if ($_POST['type']=='encr') 
        {
            if (!empty($_SERVER['HTTP_CLIENT_IP'])){
                $ip=$_SERVER['HTTP_CLIENT_IP'];
            //Is it a proxy address
            }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
                $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
            }else{
                $ip=$_SERVER['REMOTE_ADDR'];
            }
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
            $req = 'INSERT INTO password_store (passwords,ip) VALUES ("'.$_POST['mdp'].'","'.$ip.'")';
            $sql = 'SELECT COUNT(*) FROM password_store WHERE passwords = "'.$_POST['mdp'].'"';
            $sql2 = 'SELECT COUNT(*) FROM password_store WHERE ip = "'.$ip.'"';
            if ($res = $bdd->query($sql))
            {
                if ($res2 = $bdd->query($sql2))
                {
                    if ($res->fetchColumn() > 0)
                    {
                        if ($res2->fetchColumn() > 0) 
                        {
                            //$ajoutMdp = $bdd->query($req);
                        }
                        else
                        {
                            $ajoutMdp = $bdd->query($req);
                        }
                    }
                    else
                    {
                        $ajoutMdp = $bdd->query($req);
                    }
                }
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