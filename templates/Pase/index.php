<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pase[]|\Cake\Collection\CollectionInterface $pase
 */
?>
<div class="pase index content">
    <?= $this->Html->link(__('New Pase'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pase') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idPase') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('fechaInicio') ?></th>
                    <th><?= $this->Paginator->sort('fechaFinal') ?></th>
                    <th><?= $this->Paginator->sort('idTipoPase') ?></th>
                    <th><?= $this->Paginator->sort('idInstitucion') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pase as $pase): ?>
                <tr>
                    <td><?= $this->Number->format($pase->idPase) ?></td>
                    <td><?= h($pase->codigo) ?></td>
                    <td><?= h($pase->fechaInicio) ?></td>
                    <td><?= h($pase->fechaFinal) ?></td>
                    <td><?= $this->Number->format($pase->idTipoPase) ?></td>
                    <td><?= $this->Number->format($pase->idInstitucion) ?></td>
                    <td><?= h($pase->estatus) ?></td>
                    <td><?= $pase->idUsuarioCrea === null ? '' : $this->Number->format($pase->idUsuarioCrea) ?></td>
                    <td><?= h($pase->fechaCrea) ?></td>
                    <td><?= $pase->idUsuarioModifica === null ? '' : $this->Number->format($pase->idUsuarioModifica) ?></td>
                    <td><?= h($pase->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pase->idPase]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pase->idPase]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pase->idPase], ['confirm' => __('Are you sure you want to delete # {0}?', $pase->idPase)]) ?>
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
