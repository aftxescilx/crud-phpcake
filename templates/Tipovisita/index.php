<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipovisitum[]|\Cake\Collection\CollectionInterface $tipovisita
 */
?>
<div class="tipovisita index content">
    <?= $this->Html->link(__('New Tipovisitum'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipovisita') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoVisita') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipovisita as $tipovisitum): ?>
                <tr>
                    <td><?= $this->Number->format($tipovisitum->idTipoVisita) ?></td>
                    <td><?= h($tipovisitum->nombre) ?></td>
                    <td><?= h($tipovisitum->estatus) ?></td>
                    <td><?= $tipovisitum->idUsuarioCrea === null ? '' : $this->Number->format($tipovisitum->idUsuarioCrea) ?></td>
                    <td><?= h($tipovisitum->fechaCrea) ?></td>
                    <td><?= $tipovisitum->idUsuarioModifica === null ? '' : $this->Number->format($tipovisitum->idUsuarioModifica) ?></td>
                    <td><?= h($tipovisitum->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipovisitum->idTipoVisita]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipovisitum->idTipoVisita]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipovisitum->idTipoVisita], ['confirm' => __('Are you sure you want to delete # {0}?', $tipovisitum->idTipoVisita)]) ?>
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
