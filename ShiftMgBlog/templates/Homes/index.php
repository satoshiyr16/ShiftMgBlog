<!DOCTYPE html>
<head>
</head>
<body>
  <div class="shift-area">
    <div class="shift-content-area">
    <?php foreach($shifts as $shift): ?>
      <h3 class="company"><?= $shift->company ?></h3>
      <p class="subtle">時給：<?= $shift->subtle ?>円</p>
      <p class="time">働いた時間：<?= $shift->time ?>時間</p>
      <p class="rest">休憩時間：<?= $shift->rest ?>時間</p>
      <h4 class="money">合計：<?= $shift->money ?></h4>
    <?php endforeach; ?>
    <h1>テスト</h1>
    </div>
  </div>
</body>
</html>
