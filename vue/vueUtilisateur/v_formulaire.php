<link rel="icon" href="https://institutionsaintaspais.fr/wp-content/uploads/2022/04/mini-sa-1.png" sizes="32x32"/>

<?php
if(!isset($_SESSION['email'])){
?>

<style>
body {
  background-image: url('imglogin.jpg');
}
</style>

<div class="container">
        <div class="row">
            <div class="col-6">
                    <form method="Post" action="index.php?ctl=utilisateur&action=validConnect" class="box"> 
                        <img class="logo" src="vue/images/logo.png">
                            <h1>Bienvenue</h1> 
                                <p class="text-muted">Veuillez rentrer vos identifiants</p> 
                                    <?php if(isset($_GET['msg'])) { echo "<p style='color: #b1b8ff; text-align: center;'>".$_GET['msg']."</p>";} ?>
                                        <input type="text" name="email" placeholder="Email" required="required"> 
                                            <input type="password" name="password" placeholder="Mot-de-passe" required="required"> 
                                                <input type="submit" name="" value="Login" href="#"> 
                                                </div>
                                                    <div class="col-6">
                                                        <img class="car" src="vue/images/voiture.gif">
                                                    </div>
                                                </div>

<?php
}
?>