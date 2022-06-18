<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donacion[]|\Cake\Collection\CollectionInterface $donacion
 */
?>
<div class="donacion index content">
    <?= $this->Html->link(__('New Donacion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Donacion') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idDonacion') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('valor') ?></th>
                    <th><?= $this->Paginator->sort('idBeneficiario') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($donacion as $donacion): ?>
                <tr>
                    <td><?= $this->Number->format($donacion->idDonacion) ?></td>
                    <td><?= h($donacion->fecha) ?></td>
                    <td><?= $this->Number->format($donacion->valor) ?></td>
                    <td><?= $this->Number->format($donacion->idBeneficiario) ?></td>
                    <td><?= h($donacion->estatus) ?></td>
                    <td><?= $donacion->idUsuarioCrea === null ? '' : $this->Number->format($donacion->idUsuarioCrea) ?></td>
                    <td><?= h($donacion->fechaCrea) ?></td>
                    <td><?= $donacion->idUsuarioModifica === null ? '' : $this->Number->format($donacion->idUsuarioModifica) ?></td>
                    <td><?= h($donacion->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $donacion->idDonacion]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $donacion->idDonacion]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $donacion->idDonacion], ['confirm' => __('Are you sure you want to delete # {0}?', $donacion->idDonacion)]) ?>
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
