<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleadoespecialidad $empleadoespecialidad
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Empleadoespecialidad'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empleadoespecialidad form content">
            <?= $this->Form->create($empleadoespecialidad) ?>
            <fieldset>
                <legend><?= __('Add Empleadoespecialidad') ?></legend>
                <?php
                    echo $this->Form->control('idEmpleado');
                    echo $this->Form->control('idEspecialidad');
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
