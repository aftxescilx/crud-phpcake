<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donacioninstitucion[]|\Cake\Collection\CollectionInterface $donacioninstitucion
 */
?>
<div class="donacioninstitucion index content">
    <?= $this->Html->link(__('New Donacioninstitucion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Donacioninstitucion') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idDonacionInstitucion') ?></th>
                    <th><?= $this->Paginator->sort('idDonacion') ?></th>
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
                <?php foreach ($donacioninstitucion as $donacioninstitucion): ?>
                <tr>
                    <td><?= $this->Number->format($donacioninstitucion->idDonacionInstitucion) ?></td>
                    <td><?= $this->Number->format($donacioninstitucion->idDonacion) ?></td>
                    <td><?= $this->Number->format($donacioninstitucion->idInstitucion) ?></td>
                    <td><?= h($donacioninstitucion->estatus) ?></td>
                    <td><?= $donacioninstitucion->idUsuarioCrea === null ? '' : $this->Number->format($donacioninstitucion->idUsuarioCrea) ?></td>
                    <td><?= h($donacioninstitucion->fechaCrea) ?></td>
                    <td><?= $donacioninstitucion->idUsuarioModifica === null ? '' : $this->Number->format($donacioninstitucion->idUsuarioModifica) ?></td>
                    <td><?= h($donacioninstitucion->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $donacioninstitucion->idDonacionInstitucion]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $donacioninstitucion->idDonacionInstitucion]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $donacioninstitucion->idDonacionInstitucion], ['confirm' => __('Are you sure you want to delete # {0}?', $donacioninstitucion->idDonacionInstitucion)]) ?>
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
