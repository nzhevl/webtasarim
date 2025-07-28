<?php
$isim = $_POST['isim'] ?? 'Misafir';
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>HOSGELDİN</title>
  <link rel="stylesheet" href="stil.css">
</head>
<body>
  <div class="kutu">
    <h2>Merhaba <?php echo htmlspecialchars($isim); ?>! </h2>
	  <p>HAZIR MISIN?</p>
    <form action="soru.php" method="post">
      <input type="hidden" name="isim" value="<?php echo htmlspecialchars($isim); ?>">

      
      <button type="submit">Devam Et 🚀</button>
    </form>
  </div>
</body>
</html>