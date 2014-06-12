<?php include 'includes/header.php';
$id=2;
include 'onglets.php';
?>
<div id="form_encrypt">
    <form action="results.php" method="post" accept-charset="utf-8">
            <input type="password" name="mdp" placeholder="Password"><br/>
            <input type="hidden" name="type" value="decr">
            <textarea name="encr" placeholder="Encrypt your text"></textarea><br/>
            <button type="submit">Submit</button>
    </form>
</div>
<?php include 'includes/footer.php'; ?>