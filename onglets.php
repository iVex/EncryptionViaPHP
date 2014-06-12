<?php
if($id==1)
{
    ?>
        <style type="text/css" media="screen">
            .one a{color: #343131;}
            .one:after{content: " ";display: block;width: 0;height: 0;border-left: 12px solid transparent;border-right: 12px solid transparent;border-bottom: 12px solid #f0f0f0;margin: 15px auto 0 auto;}
            .two a{color:#a6a5a5;}
            .two a:hover{color: #343131;}
            .three {color:#a6a5a5;}
            .four {color:#FFF}
        </style>
    <?php
}
else if($id==2)
{
    ?>
    <style type="text/css" media="screen">
        .one a{color: #a6a5a5;}
        .one a:hover{color: #343131;}
        .two a{color:#343131;}
        .two:after{content: " ";display: block;width: 0;height: 0;border-left: 12px solid transparent;border-right: 12px solid transparent;border-bottom: 12px solid #f0f0f0;margin: 15px auto 0 auto;}
        .three {color:#a6a5a5;}
        .four{color: #FFF}
    </style>
    <?php
}
else if ($id == 3)
{
    ?>
    <style type="text/css" media="screen">
        .one a{color: #a6a5a5;}
        .one a:hover{color: #343131;}
        .two a{color:#a6a5a5;}
        .two a:hover{color: #343131;}
        .three {color:#343131;}
        .three:after{content: " ";display: block;width: 0;height: 0;border-left: 12px solid transparent;border-right: 12px solid transparent;border-bottom: 12px solid #f0f0f0;margin: 15px auto 0 auto;}
        .four {color:#FFF;}
    </style>
    <?php
}
else
{
    ?>
    <style type="text/css" media="screen">
        .one a{color: #a6a5a5;}
        .one a:hover{color: #a6a5a5;}
        .two a{color:#a6a5a5;}
        .three {color:#a6a5a5;}
        .four {color:#343131;}
        .four:after{content: " ";display: block;width: 0;height: 0;border-left: 12px solid transparent;border-right: 12px solid transparent;border-bottom: 12px solid #f0f0f0;margin: 15px auto 0 auto;}
    </style>
    <?php
}
?>
<div id="onglets">
    <div class="onglets">
        <div class="one onglet">
            <a href="index">Encryption</a>
        </div>
        <div class="two onglet">
            <a href="decrypt.php">Decryption</a>
        </div>
        <div class="three onglet" >
            <p>Results</p>
        </div>
        <div class="four onglet">
            <p>About</p>
        </div>
    </div>
</div>