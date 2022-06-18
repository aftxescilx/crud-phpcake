<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleadoespecialidad[]|\Cake\Collection\CollectionInterface $empleadoespecialidad
 */
?>
<div class="empleadoespecialidad index content">
    <?= $this->Html->link(__('New Empleadoespecialidad'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Empleadoespecialidad') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idEmpleadoEspecialidad') ?></th>
                    <th><?= $this->Paginator->sort('idEmpleado') ?></th>
                    <th><?= $this->Paginator->sort('idEspecialidad') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empleadoespecialidad as $empleadoespecialidad): ?>
                <tr>
                    <td><?= $this->Number->format($empleadoespecialidad->idEmpleadoEspecialidad) ?></td>
                    <td><?= $this->Number->format($empleadoespecialidad->idEmpleado) ?></td>
                    <td><?= $this->Number->format($empleadoespecialidad->idEspecialidad) ?></td>
                    <td><?= h($empleadoespecialidad->estatus) ?></td>
                    <td><?= $empleadoespecialidad->idUsuarioCrea === null ? '' : $this->Number->format($empleadoespecialidad->idUsuarioCrea) ?></td>
                    <td><?= h($empleadoespecialidad->fechaCrea) ?></td>
                    <td><?= $empleadoespecialidad->idUsuarioModifica === null ? '' : $this->Number->format($empleadoespecialidad->idUsuarioModifica) ?></td>
                    <td><?= h($empleadoespecialidad->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $empleadoespecialidad->idEmpleadoEspecialidad]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empleadoespecialidad->idEmpleadoEspecialidad]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empleadoespecialidad->idEmpleadoEspecialidad], ['confirm' => __('Are you sure you want to delete # {0}?', $empleadoespecialidad->idEmpleadoEspecialidad)]) ?>
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
