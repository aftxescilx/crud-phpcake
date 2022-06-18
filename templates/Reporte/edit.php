<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reporte $reporte
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reporte->idReporte],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reporte->idReporte), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Reporte'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reporte form content">
            <?= $this->Form->create($reporte) ?>
            <fieldset>
                <legend><?= __('Edit Reporte') ?></legend>
                <?php
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('idCaso');
                    echo $this->Form->control('fechaEntrega');
                    echo $this->Form->control('idEmpleadoEntrega');
                    echo $this->Form->control('idEmpleadoRecibe');
                    // echo $this->Form->control('estatus');
                    // echo $this->Form->control('idUsuarioCrea');
                    // echo $this->Form->control('fechaCrea', ['empty' => true]);
                    // echo $this->Form->control('idUsuarioModifica');
                    // echo $this->Form->control('fechaModifica', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
