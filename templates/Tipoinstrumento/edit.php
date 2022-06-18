<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoinstrumento $tipoinstrumento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipoinstrumento->idTipoInstrumento],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoinstrumento->idTipoInstrumento), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tipoinstrumento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipoinstrumento form content">
            <?= $this->Form->create($tipoinstrumento) ?>
            <fieldset>
                <legend><?= __('Edit Tipoinstrumento') ?></legend>
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
