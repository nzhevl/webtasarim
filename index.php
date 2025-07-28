<!-- index.php -->
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Arkadaşlık Testi</title>
  <link rel="stylesheet" href="stil.css">
  <style type="text/css">
  .auto-style1 {
	  font-family: "Bahnschrift SemiBold SemiConden";
  }
  </style>
</head>

<body>
  <div class="kutu">
    <h1 class="auto-style1">Arkadaşlık Testine Hoş Geldin!</h1>
    <form action="hosgeldin.php" method="post">
      <label>Adın ne?</label><br>
      <input type="text" name="isim" required>
      <br><br>
      <button type="submit">Teste Başla 🎉</button>
    </form>
  </div>
</body>
</html>