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
            <?= $this->Html->link(__('Edit Tipopase'), ['action' => 'edit', $tipopase->idTipoPase], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipopase'), ['action' => 'delete', $tipopase->idTipoPase], ['confirm' => __('Are you sure you want to delete # {0}?', $tipopase->idTipoPase), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipopase'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipopase'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipopase view content">
            <h3><?= h($tipopase->idTipoPase) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tipopase->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($tipopase->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoPase') ?></th>
                    <td><?= $this->Number->format($tipopase->idTipoPase) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $tipopase->idUsuarioCrea === null ? '' : $this->Number->format($tipopase->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipopase->idUsuarioModifica === null ? '' : $this->Number->format($tipopase->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipopase->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipopase->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
