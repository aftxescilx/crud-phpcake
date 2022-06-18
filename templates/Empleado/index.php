<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleado[]|\Cake\Collection\CollectionInterface $empleado
 */
?>
<div class="empleado index content">
    <?= $this->Html->link(__('New Empleado'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Empleado') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idEmpleado') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('apellidoPaterno') ?></th>
                    <th><?= $this->Paginator->sort('apellidoMaterno') ?></th>
                    <th><?= $this->Paginator->sort('genero') ?></th>
                    <th><?= $this->Paginator->sort('ciudad') ?></th>
                    <th><?= $this->Paginator->sort('pais') ?></th>
                    <th><?= $this->Paginator->sort('fechaNacimiento') ?></th>
                    <th><?= $this->Paginator->sort('rfc') ?></th>
                    <th><?= $this->Paginator->sort('dni') ?></th>
                    <th><?= $this->Paginator->sort('idTipoEmpleado') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empleado as $empleado): ?>
                <tr>
                    <td><?= $this->Number->format($empleado->idEmpleado) ?></td>
                    <td><?= h($empleado->numero) ?></td>
                    <td><?= h($empleado->nombre) ?></td>
                    <td><?= h($empleado->apellidoPaterno) ?></td>
                    <td><?= h($empleado->apellidoMaterno) ?></td>
                    <td><?= h($empleado->genero) ?></td>
                    <td><?= h($empleado->ciudad) ?></td>
                    <td><?= h($empleado->pais) ?></td>
                    <td><?= h($empleado->fechaNacimiento) ?></td>
                    <td><?= h($empleado->rfc) ?></td>
                    <td><?= h($empleado->dni) ?></td>
                    <td><?= $this->Number->format($empleado->idTipoEmpleado) ?></td>
                    <td><?= h($empleado->estatus) ?></td>
                    <td><?= $empleado->idUsuarioCrea === null ? '' : $this->Number->format($empleado->idUsuarioCrea) ?></td>
                    <td><?= h($empleado->fechaCrea) ?></td>
                    <td><?= $empleado->idUsuarioModifica === null ? '' : $this->Number->format($empleado->idUsuarioModifica) ?></td>
                    <td><?= h($empleado->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $empleado->idEmpleado]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empleado->idEmpleado]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empleado->idEmpleado], ['confirm' => __('Are you sure you want to delete # {0}?', $empleado->idEmpleado)]) ?>
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
