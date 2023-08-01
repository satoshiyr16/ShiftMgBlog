<!DOCTYPE html>
<head>
</head>
<body>
  <div class="shift-area">
    <div class="shift-content-area">
    <?php foreach($shifts as $shift): ?>
      <h3 class="company"><?= $shift->company ?></h3>
      <p class="time">働いた時間：<?= $shift->time ?>時間</p>
      <p class="rest">休憩時間：<?= $shift->rest ?>時間</p>
      <p class="subtle">時給：<?= $shift->hourly_wage ?>円</p>
      <h4 class="money">合計：<?= $shift->total_money ?>円</h4>
    <?php endforeach; ?>
    </div>
  </div>
</body>
</html>
