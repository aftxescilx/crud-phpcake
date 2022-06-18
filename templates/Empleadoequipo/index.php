<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleadoequipo[]|\Cake\Collection\CollectionInterface $empleadoequipo
 */
?>
<div class="empleadoequipo index content">
    <?= $this->Html->link(__('New Empleadoequipo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Empleadoequipo') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idEmpleadoEquipo') ?></th>
                    <th><?= $this->Paginator->sort('idEmpleado') ?></th>
                    <th><?= $this->Paginator->sort('idEquipo') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empleadoequipo as $empleadoequipo): ?>
                <tr>
                    <td><?= $this->Number->format($empleadoequipo->idEmpleadoEquipo) ?></td>
                    <td><?= $this->Number->format($empleadoequipo->idEmpleado) ?></td>
                    <td><?= $this->Number->format($empleadoequipo->idEquipo) ?></td>
                    <td><?= h($empleadoequipo->estatus) ?></td>
                    <td><?= $empleadoequipo->idUsuarioCrea === null ? '' : $this->Number->format($empleadoequipo->idUsuarioCrea) ?></td>
                    <td><?= h($empleadoequipo->fechaCrea) ?></td>
                    <td><?= $empleadoequipo->idUsuarioModifica === null ? '' : $this->Number->format($empleadoequipo->idUsuarioModifica) ?></td>
                    <td><?= h($empleadoequipo->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $empleadoequipo->idEmpleadoEquipo]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empleadoequipo->idEmpleadoEquipo]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empleadoequipo->idEmpleadoEquipo], ['confirm' => __('Are you sure you want to delete # {0}?', $empleadoequipo->idEmpleadoEquipo)]) ?>
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
