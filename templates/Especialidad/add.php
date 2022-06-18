<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Especialidad $especialidad
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Especialidad'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="especialidad form content">
            <?= $this->Form->create($especialidad) ?>
            <fieldset>
                <legend><?= __('Add Especialidad') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('idDepartamento');
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
