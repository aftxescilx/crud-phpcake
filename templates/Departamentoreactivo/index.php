<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamentoreactivo[]|\Cake\Collection\CollectionInterface $departamentoreactivo
 */
?>
<div class="departamentoreactivo index content">
    <?= $this->Html->link(__('New Departamentoreactivo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Departamentoreactivo') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idDepartamentoReactivo') ?></th>
                    <th><?= $this->Paginator->sort('idDepartamento') ?></th>
                    <th><?= $this->Paginator->sort('idReactivo') ?></th>
                    <th><?= $this->Paginator->sort('lote') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('fechaEmpaque') ?></th>
                    <th><?= $this->Paginator->sort('fechaCaducidad') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($departamentoreactivo as $departamentoreactivo): ?>
                <tr>
                    <td><?= $this->Number->format($departamentoreactivo->idDepartamentoReactivo) ?></td>
                    <td><?= $this->Number->format($departamentoreactivo->idDepartamento) ?></td>
                    <td><?= $this->Number->format($departamentoreactivo->idReactivo) ?></td>
                    <td><?= h($departamentoreactivo->lote) ?></td>
                    <td><?= h($departamentoreactivo->codigo) ?></td>
                    <td><?= h($departamentoreactivo->fechaEmpaque) ?></td>
                    <td><?= h($departamentoreactivo->fechaCaducidad) ?></td>
                    <td><?= h($departamentoreactivo->estatus) ?></td>
                    <td><?= $departamentoreactivo->idUsuarioCrea === null ? '' : $this->Number->format($departamentoreactivo->idUsuarioCrea) ?></td>
                    <td><?= h($departamentoreactivo->fechaCrea) ?></td>
                    <td><?= $departamentoreactivo->idUsuarioModifica === null ? '' : $this->Number->format($departamentoreactivo->idUsuarioModifica) ?></td>
                    <td><?= h($departamentoreactivo->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $departamentoreactivo->idDepartamentoReactivo]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $departamentoreactivo->idDepartamentoReactivo]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $departamentoreactivo->idDepartamentoReactivo], ['confirm' => __('Are you sure you want to delete # {0}?', $departamentoreactivo->idDepartamentoReactivo)]) ?>
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
