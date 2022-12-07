<style>
body {
  background-image: url('https://zupimages.net/up/22/47/0ksr.jpg');
}
</style>

<body>
  <?php
  if(isset($_SESSION['email']) && !isset($_GET['action']))
  {
    include 'vueRecherche/formRecherche.php';
    include 'vueMaps/carte.php';
  }
  ?>
</body>