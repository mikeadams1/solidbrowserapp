<?php
if (!isset($_GET['url'])) {
  $url = 'https://bing.com';
} else {
  $url = $_GET['url'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Solid Web App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="navbar">
    <form method="get">
      <input type="text" name="url" value="<?= htmlspecialchars($url) ?>">
      <button type="submit">Go</button>
    </form>
    <button onclick="window.history.back()">Back</button>
    <button onclick="window.location.reload()">Reload</button>
    <button onclick="window.location.assign('/')">Home</button>
  </div>
  <div class="content">
    <iframe src="<?= htmlspecialchars($url) ?>"></iframe>
  </div>
</body>
</html>
