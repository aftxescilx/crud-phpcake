<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visitum $visitum
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Visita'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="visita form content">
            <?= $this->Form->create($visitum) ?>
            <fieldset>
                <legend><?= __('Add Visitum') ?></legend>
                <?php
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('idTipoVisita');
                    echo $this->Form->control('idVisitante');
                    echo $this->Form->control('idPase');
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
