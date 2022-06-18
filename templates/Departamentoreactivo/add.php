<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamentoreactivo $departamentoreactivo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Departamentoreactivo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="departamentoreactivo form content">
            <?= $this->Form->create($departamentoreactivo) ?>
            <fieldset>
                <legend><?= __('Add Departamentoreactivo') ?></legend>
                <?php
                    echo $this->Form->control('idDepartamento');
                    echo $this->Form->control('idReactivo');
                    echo $this->Form->control('lote');
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('fechaEmpaque');
                    echo $this->Form->control('fechaCaducidad');
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
