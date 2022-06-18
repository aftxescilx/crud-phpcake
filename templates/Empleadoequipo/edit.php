<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleadoequipo $empleadoequipo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $empleadoequipo->idEmpleadoEquipo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $empleadoequipo->idEmpleadoEquipo), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Empleadoequipo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empleadoequipo form content">
            <?= $this->Form->create($empleadoequipo) ?>
            <fieldset>
                <legend><?= __('Edit Empleadoequipo') ?></legend>
                <?php
                    echo $this->Form->control('idEmpleado');
                    echo $this->Form->control('idEquipo');
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
