<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visitante $visitante
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $visitante->idVisitante],
                ['confirm' => __('Are you sure you want to delete # {0}?', $visitante->idVisitante), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Visitante'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="visitante form content">
            <?= $this->Form->create($visitante) ?>
            <fieldset>
                <legend><?= __('Edit Visitante') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellidoPaterno');
                    echo $this->Form->control('apellidoMaterno');
                    echo $this->Form->control('correo');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('fechaNacimiento');
                    echo $this->Form->control('dni');
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
