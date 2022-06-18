<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reactivo $reactivo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Reactivo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reactivo form content">
            <?= $this->Form->create($reactivo) ?>
            <fieldset>
                <legend><?= __('Add Reactivo') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('formula');
                    echo $this->Form->control('tipo');
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
