<?php
$this->extend('sablonaStranek/sablonaStranky');
$this->section('section');
?>
<title>Přidání závodu</title>
<?= form_open('ulozeniZavodu') ?>
<div class="mb-3">
	<input type="hidden" name="sex" value="W">
	<label for="sel1" class="form-label">Vyberte rok závodu</label>
	<select class="form-select" id="sel1" name="year">
		<option selected disabled>-----</option>
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
	<label for="sel1" class="form-label">Vyberte datum ukončení závodu</label>
	<input type="date" name="end_date" class="form-control">
	<label for="sel1" class="form-label">Vyberte kategorii</label>
	<select class="form-select" id="sel1" name="category">
		<option selected disabled>-----</option>
      	<option>U</option>
      	<option>E</option>
	  	<option>J</option>
	  	<option>U23</option>
    </select>
	<label for="browser" class="form-label">Vyberte stát</label>
    <input class="form-control" list="browsers" name="country" id="browser">
    <datalist id="browsers">
		<option selected disabled>-----</option>
		<?php
		foreach ($zavodyZenskeKategorie as $row)
		{
			?>
			<option value="<?= $row->country ?>">
			<?php
		}
		?>
    </datalist>
</div>
<button type="submit" class="btn btn-primary">Uložit</button>
<?= form_close() ?>
<?= $this->endSection() ?>