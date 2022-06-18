<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Institucioneducativa $institucioneducativa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Institucioneducativa'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="institucioneducativa form content">
            <?= $this->Form->create($institucioneducativa) ?>
            <fieldset>
                <legend><?= __('Add Institucioneducativa') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('ciudad');
                    echo $this->Form->control('estado');
                    echo $this->Form->control('pais');
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
