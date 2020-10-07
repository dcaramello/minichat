<?php
try {
  $db = new PDO('mysql:host=localhost; dbname=minichat_php', 'dim', 'dim');
}
catch (PDOException $e) {
  print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

if(!empty($_POST) && isset($_POST["envoyer"])):
  $query = $db->prepare(
    "INSERT INTO minichat_table(pseudo, message)
    VALUES(:pseudo, :message)"
  );

  $result = $query->execute([
    "pseudo" => $_POST["pseudo"],
    "message" => $_POST["message"]
  ]);
endif;

header('Location: minichat.php');
?>
