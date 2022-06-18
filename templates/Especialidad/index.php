<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Especialidad[]|\Cake\Collection\CollectionInterface $especialidad
 */
?>
<div class="especialidad index content">
    <?= $this->Html->link(__('New Especialidad'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Especialidad') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idEspecialidad') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('idDepartamento') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($especialidad as $especialidad): ?>
                <tr>
                    <td><?= $this->Number->format($especialidad->idEspecialidad) ?></td>
                    <td><?= h($especialidad->nombre) ?></td>
                    <td><?= h($especialidad->descripcion) ?></td>
                    <td><?= $this->Number->format($especialidad->idDepartamento) ?></td>
                    <td><?= h($especialidad->estatus) ?></td>
                    <td><?= $especialidad->idUsuarioCrea === null ? '' : $this->Number->format($especialidad->idUsuarioCrea) ?></td>
                    <td><?= h($especialidad->fechaCrea) ?></td>
                    <td><?= $especialidad->idUsuarioModifica === null ? '' : $this->Number->format($especialidad->idUsuarioModifica) ?></td>
                    <td><?= h($especialidad->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $especialidad->idEspecialidad]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $especialidad->idEspecialidad]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $especialidad->idEspecialidad], ['confirm' => __('Are you sure you want to delete # {0}?', $especialidad->idEspecialidad)]) ?>
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
