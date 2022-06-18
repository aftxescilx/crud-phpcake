<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Caso $caso
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Caso'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="caso form content">
            <?= $this->Form->create($caso) ?>
            <fieldset>
                <legend><?= __('Add Caso') ?></legend>
                <?php
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('estado');
                    echo $this->Form->control('fechaInicio');
                    echo $this->Form->control('fechaCierre', ['empty' => true]);
                    echo $this->Form->control('idEquipo');
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
