<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoempleado[]|\Cake\Collection\CollectionInterface $tipoempleado
 */
?>
<div class="tipoempleado index content">
    <?= $this->Html->link(__('New Tipoempleado'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipoempleado') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoEmpleado') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('sueldoBase') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipoempleado as $tipoempleado): ?>
                <tr>
                    <td><?= $this->Number->format($tipoempleado->idTipoEmpleado) ?></td>
                    <td><?= h($tipoempleado->nombre) ?></td>
                    <td><?= h($tipoempleado->descripcion) ?></td>
                    <td><?= $this->Number->format($tipoempleado->sueldoBase) ?></td>
                    <td><?= h($tipoempleado->estatus) ?></td>
                    <td><?= $tipoempleado->idUsuarioCrea === null ? '' : $this->Number->format($tipoempleado->idUsuarioCrea) ?></td>
                    <td><?= h($tipoempleado->fechaCrea) ?></td>
                    <td><?= $tipoempleado->idUsuarioModifica === null ? '' : $this->Number->format($tipoempleado->idUsuarioModifica) ?></td>
                    <td><?= h($tipoempleado->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipoempleado->idTipoEmpleado]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoempleado->idTipoEmpleado]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoempleado->idTipoEmpleado], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoempleado->idTipoEmpleado)]) ?>
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
