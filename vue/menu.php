<style>
body {
  background-image: url('https://zupimages.net/up/23/14/9qo5.jpg');
  background-size: 100%;
}
</style>

<body>
  <?php
  if(isset($_SESSION['email']) && !isset($_GET['action']))
  {
    include 'vue/vueRecherche/formRecherche.php';
    include 'vueMaps/carte.php';
  }
  ?>
</body>