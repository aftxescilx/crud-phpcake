<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipovisitum $tipovisitum
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipovisitum'), ['action' => 'edit', $tipovisitum->idTipoVisita], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipovisitum'), ['action' => 'delete', $tipovisitum->idTipoVisita], ['confirm' => __('Are you sure you want to delete # {0}?', $tipovisitum->idTipoVisita), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipovisita'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipovisitum'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipovisita view content">
            <h3><?= h($tipovisitum->idTipoVisita) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tipovisitum->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($tipovisitum->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoVisita') ?></th>
                    <td><?= $this->Number->format($tipovisitum->idTipoVisita) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $tipovisitum->idUsuarioCrea === null ? '' : $this->Number->format($tipovisitum->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipovisitum->idUsuarioModifica === null ? '' : $this->Number->format($tipovisitum->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipovisitum->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipovisitum->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
