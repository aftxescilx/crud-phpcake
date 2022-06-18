<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pase $pase
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pase'), ['action' => 'edit', $pase->idPase], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pase'), ['action' => 'delete', $pase->idPase], ['confirm' => __('Are you sure you want to delete # {0}?', $pase->idPase), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pase'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pase'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pase view content">
            <h3><?= h($pase->idPase) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($pase->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($pase->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdPase') ?></th>
                    <td><?= $this->Number->format($pase->idPase) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoPase') ?></th>
                    <td><?= $this->Number->format($pase->idTipoPase) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdInstitucion') ?></th>
                    <td><?= $this->Number->format($pase->idInstitucion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $pase->idUsuarioCrea === null ? '' : $this->Number->format($pase->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $pase->idUsuarioModifica === null ? '' : $this->Number->format($pase->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaInicio') ?></th>
                    <td><?= h($pase->fechaInicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaFinal') ?></th>
                    <td><?= h($pase->fechaFinal) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($pase->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($pase->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
