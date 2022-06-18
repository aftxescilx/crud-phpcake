<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleadoinstitucion $empleadoinstitucion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Empleadoinstitucion'), ['action' => 'edit', $empleadoinstitucion->idEmpleadoInstitucion], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Empleadoinstitucion'), ['action' => 'delete', $empleadoinstitucion->idEmpleadoInstitucion], ['confirm' => __('Are you sure you want to delete # {0}?', $empleadoinstitucion->idEmpleadoInstitucion), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Empleadoinstitucion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Empleadoinstitucion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empleadoinstitucion view content">
            <h3><?= h($empleadoinstitucion->idEmpleadoInstitucion) ?></h3>
            <table>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($empleadoinstitucion->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleadoInstitucion') ?></th>
                    <td><?= $this->Number->format($empleadoinstitucion->idEmpleadoInstitucion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleado') ?></th>
                    <td><?= $this->Number->format($empleadoinstitucion->idEmpleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdInstitucion') ?></th>
                    <td><?= $this->Number->format($empleadoinstitucion->idInstitucion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $empleadoinstitucion->idUsuarioCrea === null ? '' : $this->Number->format($empleadoinstitucion->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $empleadoinstitucion->idUsuarioModifica === null ? '' : $this->Number->format($empleadoinstitucion->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaInicio') ?></th>
                    <td><?= h($empleadoinstitucion->fechaInicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaFinal') ?></th>
                    <td><?= h($empleadoinstitucion->fechaFinal) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($empleadoinstitucion->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($empleadoinstitucion->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
