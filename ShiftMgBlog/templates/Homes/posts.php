<?= $this->Form->create($shift) ?>
<?= $this->Form->control('会社名') ?>
<?= $this->Form->control('働いた時間') ?>
<?= $this->Form->control('時給') ?>
<?= $this->Form->control('休憩時間') ?>
<?= $this->Form->button(__('投稿')) ?>
<?= $this->Form->end() ?>
