<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleadoequipo $empleadoequipo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Empleadoequipo'), ['action' => 'edit', $empleadoequipo->idEmpleadoEquipo], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Empleadoequipo'), ['action' => 'delete', $empleadoequipo->idEmpleadoEquipo], ['confirm' => __('Are you sure you want to delete # {0}?', $empleadoequipo->idEmpleadoEquipo), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Empleadoequipo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Empleadoequipo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empleadoequipo view content">
            <h3><?= h($empleadoequipo->idEmpleadoEquipo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($empleadoequipo->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleadoEquipo') ?></th>
                    <td><?= $this->Number->format($empleadoequipo->idEmpleadoEquipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleado') ?></th>
                    <td><?= $this->Number->format($empleadoequipo->idEmpleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEquipo') ?></th>
                    <td><?= $this->Number->format($empleadoequipo->idEquipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $empleadoequipo->idUsuarioCrea === null ? '' : $this->Number->format($empleadoequipo->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $empleadoequipo->idUsuarioModifica === null ? '' : $this->Number->format($empleadoequipo->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($empleadoequipo->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($empleadoequipo->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
