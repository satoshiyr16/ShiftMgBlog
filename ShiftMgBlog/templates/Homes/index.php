<!DOCTYPE html>
<head>
  <?= $this->Html->css('homepage.css') ?>
</head>
<body>
  <div class="shift_area">
    <?php foreach($shifts as $shift): ?>
    <div class="shift_content_area">
      <h3 class="company"><?= $shift->company ?></h3>
      <div class="worked_content_area">
        <div class="worked_content_column">
          <p class="time column">働いた時間：<?= $shift->time ?>時間</p>
          <p class="rest column">休憩時間：<?= $shift->rest ?>時間</p>
        </div>
        <div class="worked_content_column">
          <p class="subtle column">時給：<?= $shift->hourly_wage ?>円</p>
        </div>
      </div>
      <h4 class="total_money">合計：<?= $shift->total_money ?>円</h4>
    </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
