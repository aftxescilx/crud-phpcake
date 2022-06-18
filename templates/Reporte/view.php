<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reporte $reporte
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Reporte'), ['action' => 'edit', $reporte->idReporte], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Reporte'), ['action' => 'delete', $reporte->idReporte], ['confirm' => __('Are you sure you want to delete # {0}?', $reporte->idReporte), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Reporte'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Reporte'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reporte view content">
            <h3><?= h($reporte->idReporte) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($reporte->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($reporte->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdReporte') ?></th>
                    <td><?= $this->Number->format($reporte->idReporte) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCaso') ?></th>
                    <td><?= $this->Number->format($reporte->idCaso) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleadoEntrega') ?></th>
                    <td><?= $this->Number->format($reporte->idEmpleadoEntrega) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleadoRecibe') ?></th>
                    <td><?= $this->Number->format($reporte->idEmpleadoRecibe) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $reporte->idUsuarioCrea === null ? '' : $this->Number->format($reporte->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $reporte->idUsuarioModifica === null ? '' : $this->Number->format($reporte->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaEntrega') ?></th>
                    <td><?= h($reporte->fechaEntrega) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($reporte->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($reporte->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
