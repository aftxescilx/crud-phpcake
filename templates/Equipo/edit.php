<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipo $equipo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $equipo->idEquipo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $equipo->idEquipo), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Equipo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="equipo form content">
            <?= $this->Form->create($equipo) ?>
            <fieldset>
                <legend><?= __('Edit Equipo') ?></legend>
                <?php
                    echo $this->Form->control('codigo');
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
