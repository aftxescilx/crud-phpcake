<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipopase $tipopase
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipopase->idTipoPase],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipopase->idTipoPase), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tipopase'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipopase form content">
            <?= $this->Form->create($tipopase) ?>
            <fieldset>
                <legend><?= __('Edit Tipopase') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
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
