<?php
$this->extend('sablonaStranek/sablonaStranky');
$this->section('section');
?>

<div class="container-xl">
    <title>Závody ženské kategorie</title>
    <div class="card shadow-sm">
        <?php
        $tlacitko = array('type' => 'button',
        'class' => 'btn btn-success');
        echo anchor('pridaniZavodu', 'Přidat závod', $tlacitko);
        ?>
        <div class="card-header bg-primary text-white">
            <h3 class="card-title mb-0">Závody ženské kategorie</h3>
        </div>
        <div class="card-body p-0">
            <?php
            $table = new \CodeIgniter\View\Table();
            
            $headers = [
                ['data' => 'Rok', 'class' => 'text-center'],
                'Závod',
                ['data' => 'Začátek', 'class' => 'text-center'],
                ['data' => 'Konec', 'class' => 'text-center'],
                ['data' => 'Logo', 'class' => 'text-center'],
                ['data' => 'Země', 'class' => 'text-center']
            ];
            $table->setHeading($headers);
            
            $template = [
                'table_open' => '<table class="table table-bordered table-hover mb-0">',
                'thead_open' => '<thead class="thead-light">',
                'thead_close' => '</thead>',
                'heading_row_start' => '<tr>',
                'heading_row_end' => '</tr>',
                'heading_cell_start' => '<th class="align-middle">',
                'heading_cell_end' => '</th>',
                'tbody_open' => '<tbody>',
                'tbody_close' => '</tbody>',
                'row_start' => '<tr class="align-middle">',
                'row_end' => '</tr>',
                'cell_start' => '<td class="align-middle">',
                'cell_end' => '</td>',
                'row_alt_start' => '<tr class="align-middle">',
                'row_alt_end' => '</tr>',
                'cell_alt_start' => '<td class="align-middle">',
                'cell_alt_end' => '</td>',
                'table_close' => '</table>'
            ];
            
            $table->setTemplate($template);
            
            foreach ($zavodyZenskeKategorie as $row) {
				$year =  ['data' => $row->year, 'class' => 'text-center'];
				$start_date = ['data' => date('d.m.Y', strtotime($row->start_date)), 'class' => 'text-center'];
				$end_date = ['data' => date('d.m.Y', strtotime($row->end_date)), 'class' => 'text-center'];
                $zeme = '<span class="fi fi-'.$row->country.'"></span>';
                $table->addRow($year,
                    $row->real_name,
                    $start_date,
                    $end_date,
                    [
                        'data' => $row->logo ? '<img src="' . base_url()."/Loga"."/".esc($row->logo) . '" alt="Logo" class="img-fluid" style="max-height: 40px;">' : '-',
                        'class' => 'text-center'
                    ],
                    $zeme);
            }
            
            echo $table->generate();
            ?>
        </div>
        <div class="card-footer bg-light">
            <small class="text-muted">Poslední aktualizace: <?= date('d.m.Y H:i') ?></small>
        </div>
    </div>
</div>

<?= $this->endSection() ?>