<?php
$isim = $_POST['isim'] ?? 'Misafir';
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Sorular</title>
  <link rel="stylesheet" href="stil.css">
</head>
<body>
  <div class="kutu">
    <h2> <?php echo htmlspecialchars($isim); ?> Şimdi Sorular Başlıyor:</h2>
    <form action="sonuc.php" method="post">
      <input type="hidden" name="isim" value="<?php echo htmlspecialchars($isim); ?>">

      <p>1. En sevdiğim hayvan?</p>
      <input type="radio" name="soru1" value="kedi" required> Kedi<br>
      <input type="radio" name="soru1" value="köpek" required> Köpek<br>
      <input type="radio" name="soru1" value="balık" required> Balık<br><br>

      <p>2. Sabahları ne içerim?</p>
      <input type="radio" name="soru2" value="çay" required> Çay<br>
      <input type="radio" name="soru2" value="kahve" required> Kahve<br>
      <input type="radio" name="soru2" value="su" required> Su<br><br>

      <p>3. En sevdiğim renk?</p>
      <input type="radio" name="soru3" value="mavi" required> Mavi<br>
      <input type="radio" name="soru3" value="kırmızı" required> Kırmızı<br>
      <input type="radio" name="soru3" value="siyah" required> Siyah<br><br>
      
      <p>4. En sevdiğim müzik türü?</p>
	  <input type="radio" name="soru4" value="pop" required> Pop<br>
	  <input type="radio" name="soru4" value="rap" required> Rap<br>
      <input type="radio" name="soru4" value="blues" required> Blues<br>
      
	<p>5. Benim en sevdiğim yemek hangisi?</p>
	<input type="radio" name="soru5" value="lahmacun" required> Lahmacun<br>
	<input type="radio" name="soru5" value="mantı" required> Mantı<br>
	<input type="radio" name="soru5" value="sushi" required> Sushi<br><br>

      <button type="submit">Sonucu Göster 🚀</button>
    </form>
  </div>
</body>
</html>