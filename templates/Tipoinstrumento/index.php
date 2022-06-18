<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoinstrumento[]|\Cake\Collection\CollectionInterface $tipoinstrumento
 */
?>
<div class="tipoinstrumento index content">
    <?= $this->Html->link(__('New Tipoinstrumento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipoinstrumento') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoInstrumento') ?></th>
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
                <?php foreach ($tipoinstrumento as $tipoinstrumento): ?>
                <tr>
                    <td><?= $this->Number->format($tipoinstrumento->idTipoInstrumento) ?></td>
                    <td><?= h($tipoinstrumento->nombre) ?></td>
                    <td><?= h($tipoinstrumento->estatus) ?></td>
                    <td><?= $tipoinstrumento->idUsuarioCrea === null ? '' : $this->Number->format($tipoinstrumento->idUsuarioCrea) ?></td>
                    <td><?= h($tipoinstrumento->fechaCrea) ?></td>
                    <td><?= $tipoinstrumento->idUsuarioModifica === null ? '' : $this->Number->format($tipoinstrumento->idUsuarioModifica) ?></td>
                    <td><?= h($tipoinstrumento->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipoinstrumento->idTipoInstrumento]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoinstrumento->idTipoInstrumento]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoinstrumento->idTipoInstrumento], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoinstrumento->idTipoInstrumento)]) ?>
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
