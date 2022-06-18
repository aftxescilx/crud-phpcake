<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visitum[]|\Cake\Collection\CollectionInterface $visita
 */
?>
<div class="visita index content">
    <?= $this->Html->link(__('New Visitum'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Visita') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idVisita') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('idTipoVisita') ?></th>
                    <th><?= $this->Paginator->sort('idVisitante') ?></th>
                    <th><?= $this->Paginator->sort('idPase') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($visita as $visitum): ?>
                <tr>
                    <td><?= $this->Number->format($visitum->idVisita) ?></td>
                    <td><?= h($visitum->codigo) ?></td>
                    <td><?= h($visitum->fecha) ?></td>
                    <td><?= $this->Number->format($visitum->idTipoVisita) ?></td>
                    <td><?= $this->Number->format($visitum->idVisitante) ?></td>
                    <td><?= $this->Number->format($visitum->idPase) ?></td>
                    <td><?= h($visitum->estatus) ?></td>
                    <td><?= $visitum->idUsuarioCrea === null ? '' : $this->Number->format($visitum->idUsuarioCrea) ?></td>
                    <td><?= h($visitum->fechaCrea) ?></td>
                    <td><?= $visitum->idUsuarioModifica === null ? '' : $this->Number->format($visitum->idUsuarioModifica) ?></td>
                    <td><?= h($visitum->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $visitum->idVisita]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visitum->idVisita]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $visitum->idVisita], ['confirm' => __('Are you sure you want to delete # {0}?', $visitum->idVisita)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
