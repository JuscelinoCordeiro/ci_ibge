<?php
if (!defined('BASEPATH')) {
    exit('Acesso direto ao arquivo não autorizado, log gerado!');
}
?>
<script type="text/javascript" language="JavaScript" src="<?= base_url('assets/js/inc/js_tela_inc.js') ?>"></script>

<div class="row" id="total">
    <!--	<h1>Tela Inicial</h1>-->
    <div class="col-md-3"></div>

    <div class="col-md-6" id="corpo">
        <h2 class="text-success">Estados da região <?= $regiao ?></h2>
        <table class=" table table-bordered table-striped text-center">
            <thead class="text-center">
                <tr>
                    <th class="text-center"> ORD </th>
                    <th class="text-center"> ESTADO </th>
                    <th class="text-center"> UF </th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($estRegiao->result() as $linha) {
                    echo "<tr>
                        <td> $i </td>
                        <td> $linha->NM_UF </td>
                        <td> $linha->SIGLA_UF </td>
                        </tr> ";
                    $i++;
                } ?>
            </tbody>
        </table>
        <?php // if (isset($muniEstado)) { // echo '<pre>' ; 
        //print_r($muniEstado); // echo '</pre>' ; // } 
        ?>

    </div>
    <!--div corpo-->
</div>
<!--div total-->