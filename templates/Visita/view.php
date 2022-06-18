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
            <?= $this->Html->link(__('Edit Visitum'), ['action' => 'edit', $visitum->idVisita], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Visitum'), ['action' => 'delete', $visitum->idVisita], ['confirm' => __('Are you sure you want to delete # {0}?', $visitum->idVisita), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Visita'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Visitum'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="visita view content">
            <h3><?= h($visitum->idVisita) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($visitum->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($visitum->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdVisita') ?></th>
                    <td><?= $this->Number->format($visitum->idVisita) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoVisita') ?></th>
                    <td><?= $this->Number->format($visitum->idTipoVisita) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdVisitante') ?></th>
                    <td><?= $this->Number->format($visitum->idVisitante) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdPase') ?></th>
                    <td><?= $this->Number->format($visitum->idPase) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $visitum->idUsuarioCrea === null ? '' : $this->Number->format($visitum->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $visitum->idUsuarioModifica === null ? '' : $this->Number->format($visitum->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($visitum->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($visitum->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($visitum->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
