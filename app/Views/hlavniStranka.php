<?php
$this->extend('sablonaStranek/sablonaStranky');
$this->section('section')
?>
<p class="">text blabla</p>
<?php
$table = new \CodeIgniter\View\Table();
$pole = array('Rok', 'Závod', 'Datum zahájení', 'Datum ukončení', 'Logo', 'Země');
$table->setHeading($pole);
$sablonaTabulky = array('table_open'=> '<table class="table table-bordered">',
'thead_open'=> '<thead>',
'thead_close'=> '</thead>',
'heading_row_start'=> '<tr>',
'heading_row_end'=>' </tr>',
'heading_cell_start'=> '<th>',
'heading_cell_end' => '</th>',
'tbody_open' => '<tbody>',
'tbody_close' => '</tbody>',
'row_start' => '<tr>',
'row_end'  => '</tr>',
'cell_start' => '<td>',
'cell_end' => '</td>',
'row_alt_start' => '<tr>',
'row_alt_end' => '</tr>',
'cell_alt_start' => '<td>',
'cell_alt_end' => '</td>',
'table_close' => '</table>');
$table->setTemplate($sablonaTabulky);
foreach ($zavodyZenskeKategorie as $row)
{
	$table->addRow($row->year,
	$row->real_name,
	$row->start_date,
	$row->end_date,
	'blabla',
	'blabla');
}
echo $table->generate();
?>
<?= $this->endSection() ?>