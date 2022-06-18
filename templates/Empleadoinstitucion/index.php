<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleadoinstitucion[]|\Cake\Collection\CollectionInterface $empleadoinstitucion
 */
?>
<div class="empleadoinstitucion index content">
    <?= $this->Html->link(__('New Empleadoinstitucion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Empleadoinstitucion') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idEmpleadoInstitucion') ?></th>
                    <th><?= $this->Paginator->sort('idEmpleado') ?></th>
                    <th><?= $this->Paginator->sort('idInstitucion') ?></th>
                    <th><?= $this->Paginator->sort('fechaInicio') ?></th>
                    <th><?= $this->Paginator->sort('fechaFinal') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empleadoinstitucion as $empleadoinstitucion): ?>
                <tr>
                    <td><?= $this->Number->format($empleadoinstitucion->idEmpleadoInstitucion) ?></td>
                    <td><?= $this->Number->format($empleadoinstitucion->idEmpleado) ?></td>
                    <td><?= $this->Number->format($empleadoinstitucion->idInstitucion) ?></td>
                    <td><?= h($empleadoinstitucion->fechaInicio) ?></td>
                    <td><?= h($empleadoinstitucion->fechaFinal) ?></td>
                    <td><?= h($empleadoinstitucion->estatus) ?></td>
                    <td><?= $empleadoinstitucion->idUsuarioCrea === null ? '' : $this->Number->format($empleadoinstitucion->idUsuarioCrea) ?></td>
                    <td><?= h($empleadoinstitucion->fechaCrea) ?></td>
                    <td><?= $empleadoinstitucion->idUsuarioModifica === null ? '' : $this->Number->format($empleadoinstitucion->idUsuarioModifica) ?></td>
                    <td><?= h($empleadoinstitucion->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $empleadoinstitucion->idEmpleadoInstitucion]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empleadoinstitucion->idEmpleadoInstitucion]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empleadoinstitucion->idEmpleadoInstitucion], ['confirm' => __('Are you sure you want to delete # {0}?', $empleadoinstitucion->idEmpleadoInstitucion)]) ?>
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
