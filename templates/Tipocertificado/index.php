<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipocertificado[]|\Cake\Collection\CollectionInterface $tipocertificado
 */
?>
<div class="tipocertificado index content">
    <?= $this->Html->link(__('New Tipocertificado'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipocertificado') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoCertificado') ?></th>
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
                <?php foreach ($tipocertificado as $tipocertificado): ?>
                <tr>
                    <td><?= $this->Number->format($tipocertificado->idTipoCertificado) ?></td>
                    <td><?= h($tipocertificado->nombre) ?></td>
                    <td><?= h($tipocertificado->estatus) ?></td>
                    <td><?= $tipocertificado->idUsuarioCrea === null ? '' : $this->Number->format($tipocertificado->idUsuarioCrea) ?></td>
                    <td><?= h($tipocertificado->fechaCrea) ?></td>
                    <td><?= $tipocertificado->idUsuarioModifica === null ? '' : $this->Number->format($tipocertificado->idUsuarioModifica) ?></td>
                    <td><?= h($tipocertificado->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipocertificado->idTipoCertificado]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipocertificado->idTipoCertificado]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipocertificado->idTipoCertificado], ['confirm' => __('Are you sure you want to delete # {0}?', $tipocertificado->idTipoCertificado)]) ?>
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
