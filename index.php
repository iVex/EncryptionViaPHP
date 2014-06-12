<?php include 'includes/header.php';
$id=1;
include 'onglets.php';
?>
<div id="form_encrypt">
    <form action="results.php" method="post" accept-charset="utf-8">
            <input type="password" name="mdp" placeholder="Password"><br/>
            <input type="hidden" name="type" value="encr">
            <textarea name="encr" placeholder="Encrypt your text"></textarea><br/>
            <button type="submit">Submit</button>
    </form>
</div>
<?php
//echo '<div style="text-align: center;margin-top: 50px">'.'I HAVE YOUR IP ADDRESS: '.$_SERVER["REMOTE_ADDR"].'<div>';
include 'includes/footer.php';
?>