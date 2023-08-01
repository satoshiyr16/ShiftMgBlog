<?= $this->Form->create($shift) ?>
<?= $this->Form->control('会社名') ?>
<?= $this->Form->control('worked_hours', ['label' => '働いた時間']) ?>
<?= $this->Form->control('hourly_wage', ['label' => '時給']) ?>
<?= $this->Form->control('rest_hours', ['label' => '休憩時間']) ?>
<?= $this->Form->button(__('投稿')) ?>
<?= $this->Form->end() ?>
