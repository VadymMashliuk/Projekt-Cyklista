<?php
$this->extend('sablonaStranek/sablonaStranky');
$this->section('section');
?>
<title>Výběr roku</title>
<div class="container mt-4">
    <h2>ročníky závodů</h2>
    <div class="list-group mt-3">
        <?php foreach ($roky as $rok): ?>
            <a href="<?= base_url('hlavniStranka/'.$rok->year) ?>" 
               class="list-group-item list-group-item-action">
                <?= $rok->year ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>