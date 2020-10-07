
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Minichat</title>
  </head>
  <body class="container">

    <h1 class="text-light komika">Minichat</h1>
    <form class="col-8" action="minichat_post.php" method="POST">
      <div class="form-group">
        <label class="text-light komika">Pseudo</label>
        <input type="text" class="form-control col-6" name="pseudo">
      </div>
      <div class="form-group">
        <label class="text-light komika">Message</label>
        <textarea class="form-control col-8" name="message" rows="3"></textarea>
      </div>
      <input type="submit" name="envoyer" class="btn btn-success mb-5" value="envoyer">
    </form>

<?php
try {
  $db = new PDO('mysql:host=localhost; dbname=minichat_php', 'dim', 'dim');
}
catch (PDOException $e) {
  print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
$query = $db -> query("SELECT * FROM minichat_table");
$posts = $query -> fetchAll(PDO::FETCH_ASSOC);


?>
<?php foreach ($posts as $key => $post):
?>

  <div class="card border-dark mb-3" style="max-width: 18rem;">
    <div class="card-header"><?php echo $post["pseudo"]; ?></div>
    <div class="card-body text-dark">
      <p class="card-text"><?php echo $post["message"]; ?></p>
    </div>
  </div>

<?php
endforeach;
?>
  </body>
</html>
