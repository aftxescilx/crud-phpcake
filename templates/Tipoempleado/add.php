<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoempleado $tipoempleado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Tipoempleado'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipoempleado form content">
            <?= $this->Form->create($tipoempleado) ?>
            <fieldset>
                <legend><?= __('Add Tipoempleado') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('sueldoBase');
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
