<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donacion $donacion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Donacion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donacion form content">
            <?= $this->Form->create($donacion) ?>
            <fieldset>
                <legend><?= __('Add Donacion') ?></legend>
                <?php
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('valor');
                    echo $this->Form->control('idBeneficiario');
                    echo $this->Form->control('estatus');
                    echo $this->Form->control('idUsuarioCrea');
                    echo $this->Form->control('fechaCrea', ['empty' => true]);
                    echo $this->Form->control('idUsuarioModifica');
                    echo $this->Form->control('fechaModifica', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
