<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reporte[]|\Cake\Collection\CollectionInterface $reporte
 */
?>
<div class="reporte index content">
    <?= $this->Html->link(__('New Reporte'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Reporte') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idReporte') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('idCaso') ?></th>
                    <th><?= $this->Paginator->sort('fechaEntrega') ?></th>
                    <th><?= $this->Paginator->sort('idEmpleadoEntrega') ?></th>
                    <th><?= $this->Paginator->sort('idEmpleadoRecibe') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reporte as $reporte): ?>
                <tr>
                    <td><?= $this->Number->format($reporte->idReporte) ?></td>
                    <td><?= h($reporte->codigo) ?></td>
                    <td><?= $this->Number->format($reporte->idCaso) ?></td>
                    <td><?= h($reporte->fechaEntrega) ?></td>
                    <td><?= $this->Number->format($reporte->idEmpleadoEntrega) ?></td>
                    <td><?= $this->Number->format($reporte->idEmpleadoRecibe) ?></td>
                    <td><?= h($reporte->estatus) ?></td>
                    <td><?= $reporte->idUsuarioCrea === null ? '' : $this->Number->format($reporte->idUsuarioCrea) ?></td>
                    <td><?= h($reporte->fechaCrea) ?></td>
                    <td><?= $reporte->idUsuarioModifica === null ? '' : $this->Number->format($reporte->idUsuarioModifica) ?></td>
                    <td><?= h($reporte->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $reporte->idReporte]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reporte->idReporte]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reporte->idReporte], ['confirm' => __('Are you sure you want to delete # {0}?', $reporte->idReporte)]) ?>
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
