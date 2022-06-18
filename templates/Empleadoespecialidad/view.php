<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleadoespecialidad $empleadoespecialidad
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Empleadoespecialidad'), ['action' => 'edit', $empleadoespecialidad->idEmpleadoEspecialidad], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Empleadoespecialidad'), ['action' => 'delete', $empleadoespecialidad->idEmpleadoEspecialidad], ['confirm' => __('Are you sure you want to delete # {0}?', $empleadoespecialidad->idEmpleadoEspecialidad), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Empleadoespecialidad'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Empleadoespecialidad'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empleadoespecialidad view content">
            <h3><?= h($empleadoespecialidad->idEmpleadoEspecialidad) ?></h3>
            <table>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($empleadoespecialidad->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleadoEspecialidad') ?></th>
                    <td><?= $this->Number->format($empleadoespecialidad->idEmpleadoEspecialidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleado') ?></th>
                    <td><?= $this->Number->format($empleadoespecialidad->idEmpleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEspecialidad') ?></th>
                    <td><?= $this->Number->format($empleadoespecialidad->idEspecialidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $empleadoespecialidad->idUsuarioCrea === null ? '' : $this->Number->format($empleadoespecialidad->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $empleadoespecialidad->idUsuarioModifica === null ? '' : $this->Number->format($empleadoespecialidad->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($empleadoespecialidad->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($empleadoespecialidad->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
