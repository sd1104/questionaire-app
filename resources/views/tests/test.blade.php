<?php

  $pageFlag = 0;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/app.css">
  <title>Test.test.blade.php</title>
</head>
<body>
  <?php if($pageFlag === 0): ?>
    <div>
      <h2>Hello New World</h2>
      <p>Hello! This is Test Page.</p>
      @foreach($values as $value)
        {{ $value->id}}
        <br>
        {{ $value->name }}
        <br>
        {{ $value->age }}
        <br>
        {{ $value->hobby }}
      @endforeach
    </div>
  <?php endif; ?>
</body>
</html>