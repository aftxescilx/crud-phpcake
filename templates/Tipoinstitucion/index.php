<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoinstitucion[]|\Cake\Collection\CollectionInterface $tipoinstitucion
 */
?>
<div class="tipoinstitucion index content">
    <?= $this->Html->link(__('New Tipoinstitucion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipoinstitucion') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoInstitucion') ?></th>
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
                <?php foreach ($tipoinstitucion as $tipoinstitucion): ?>
                <tr>
                    <td><?= $this->Number->format($tipoinstitucion->idTipoInstitucion) ?></td>
                    <td><?= h($tipoinstitucion->nombre) ?></td>
                    <td><?= h($tipoinstitucion->estatus) ?></td>
                    <td><?= $tipoinstitucion->idUsuarioCrea === null ? '' : $this->Number->format($tipoinstitucion->idUsuarioCrea) ?></td>
                    <td><?= h($tipoinstitucion->fechaCrea) ?></td>
                    <td><?= $tipoinstitucion->idUsuarioModifica === null ? '' : $this->Number->format($tipoinstitucion->idUsuarioModifica) ?></td>
                    <td><?= h($tipoinstitucion->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipoinstitucion->idTipoInstitucion]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoinstitucion->idTipoInstitucion]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoinstitucion->idTipoInstitucion], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoinstitucion->idTipoInstitucion)]) ?>
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
