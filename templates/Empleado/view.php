<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleado $empleado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Empleado'), ['action' => 'edit', $empleado->idEmpleado], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Empleado'), ['action' => 'delete', $empleado->idEmpleado], ['confirm' => __('Are you sure you want to delete # {0}?', $empleado->idEmpleado), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Empleado'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Empleado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empleado view content">
            <h3><?= h($empleado->idEmpleado) ?></h3>
            <table>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($empleado->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($empleado->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('ApellidoPaterno') ?></th>
                    <td><?= h($empleado->apellidoPaterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('ApellidoMaterno') ?></th>
                    <td><?= h($empleado->apellidoMaterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Genero') ?></th>
                    <td><?= h($empleado->genero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ciudad') ?></th>
                    <td><?= h($empleado->ciudad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pais') ?></th>
                    <td><?= h($empleado->pais) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rfc') ?></th>
                    <td><?= h($empleado->rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dni') ?></th>
                    <td><?= h($empleado->dni) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($empleado->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleado') ?></th>
                    <td><?= $this->Number->format($empleado->idEmpleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoEmpleado') ?></th>
                    <td><?= $this->Number->format($empleado->idTipoEmpleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $empleado->idUsuarioCrea === null ? '' : $this->Number->format($empleado->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $empleado->idUsuarioModifica === null ? '' : $this->Number->format($empleado->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaNacimiento') ?></th>
                    <td><?= h($empleado->fechaNacimiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($empleado->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($empleado->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
