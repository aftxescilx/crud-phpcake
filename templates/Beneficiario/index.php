<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Beneficiario[]|\Cake\Collection\CollectionInterface $beneficiario
 */
?>
<div class="beneficiario index content">
    <?= $this->Html->link(__('New Beneficiario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Beneficiario') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idBeneficiario') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('rfc') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($beneficiario as $beneficiario): ?>
                <tr>
                    <td><?= $this->Number->format($beneficiario->idBeneficiario) ?></td>
                    <td><?= h($beneficiario->nombre) ?></td>
                    <td><?= h($beneficiario->rfc) ?></td>
                    <td><?= h($beneficiario->estatus) ?></td>
                    <td><?= $beneficiario->idUsuarioCrea === null ? '' : $this->Number->format($beneficiario->idUsuarioCrea) ?></td>
                    <td><?= h($beneficiario->fechaCrea) ?></td>
                    <td><?= $beneficiario->idUsuarioModifica === null ? '' : $this->Number->format($beneficiario->idUsuarioModifica) ?></td>
                    <td><?= h($beneficiario->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $beneficiario->idBeneficiario]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $beneficiario->idBeneficiario]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $beneficiario->idBeneficiario], ['confirm' => __('Are you sure you want to delete # {0}?', $beneficiario->idBeneficiario)]) ?>
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
