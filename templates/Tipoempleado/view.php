<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoempleado $tipoempleado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipoempleado'), ['action' => 'edit', $tipoempleado->idTipoEmpleado], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipoempleado'), ['action' => 'delete', $tipoempleado->idTipoEmpleado], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoempleado->idTipoEmpleado), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipoempleado'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipoempleado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipoempleado view content">
            <h3><?= h($tipoempleado->idTipoEmpleado) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tipoempleado->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($tipoempleado->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($tipoempleado->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoEmpleado') ?></th>
                    <td><?= $this->Number->format($tipoempleado->idTipoEmpleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('SueldoBase') ?></th>
                    <td><?= $this->Number->format($tipoempleado->sueldoBase) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $tipoempleado->idUsuarioCrea === null ? '' : $this->Number->format($tipoempleado->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipoempleado->idUsuarioModifica === null ? '' : $this->Number->format($tipoempleado->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipoempleado->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipoempleado->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
