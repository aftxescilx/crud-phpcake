<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipopase[]|\Cake\Collection\CollectionInterface $tipopase
 */
?>
<div class="tipopase index content">
    <?= $this->Html->link(__('New Tipopase'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipopase') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoPase') ?></th>
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
                <?php foreach ($tipopase as $tipopase): ?>
                <tr>
                    <td><?= $this->Number->format($tipopase->idTipoPase) ?></td>
                    <td><?= h($tipopase->nombre) ?></td>
                    <td><?= h($tipopase->estatus) ?></td>
                    <td><?= $tipopase->idUsuarioCrea === null ? '' : $this->Number->format($tipopase->idUsuarioCrea) ?></td>
                    <td><?= h($tipopase->fechaCrea) ?></td>
                    <td><?= $tipopase->idUsuarioModifica === null ? '' : $this->Number->format($tipopase->idUsuarioModifica) ?></td>
                    <td><?= h($tipopase->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipopase->idTipoPase]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipopase->idTipoPase]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipopase->idTipoPase], ['confirm' => __('Are you sure you want to delete # {0}?', $tipopase->idTipoPase)]) ?>
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
