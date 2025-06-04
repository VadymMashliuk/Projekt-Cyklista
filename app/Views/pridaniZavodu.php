<?php
$this->extend('sablonaStranek/sablonaStranky');
$this->section('section');
?>
<title>Přidání závodu</title>
<?= form_open('ulozeniZavodu') ?>
<div class="mb-3">
	<input type="hidden" name="sex" value="W">
	<label for="sel1" class="form-label">Vyberte rok závodu</label>
	<select class="form-select" id="sel1" name="sellist1">
      <option>2024</option>
      <option>2023</option>
      <option>2022</option>
      <option>2021</option>
	  <option>2020</option>
	  <option>2019</option>
	  <option>2018</option>
	  <option>2017</option>
	  <option>2016</option>
	  <option>2015</option>
    </select>
	<label for="sel1" class="form-label">Zadejte název závodu</label>
	<input type="text" name="real_name" class="form-control">
	<label for="sel1" class="form-label">Vyberte datum zahájení závodu</label>
	<input type="date" name="start_date" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Uložit</button>
<?= form_close() ?>
<?= $this->endSection() ?>