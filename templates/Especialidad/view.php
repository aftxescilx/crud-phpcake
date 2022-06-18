<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Especialidad $especialidad
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Especialidad'), ['action' => 'edit', $especialidad->idEspecialidad], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Especialidad'), ['action' => 'delete', $especialidad->idEspecialidad], ['confirm' => __('Are you sure you want to delete # {0}?', $especialidad->idEspecialidad), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Especialidad'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Especialidad'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="especialidad view content">
            <h3><?= h($especialidad->idEspecialidad) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($especialidad->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($especialidad->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($especialidad->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEspecialidad') ?></th>
                    <td><?= $this->Number->format($especialidad->idEspecialidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdDepartamento') ?></th>
                    <td><?= $this->Number->format($especialidad->idDepartamento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $especialidad->idUsuarioCrea === null ? '' : $this->Number->format($especialidad->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $especialidad->idUsuarioModifica === null ? '' : $this->Number->format($especialidad->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($especialidad->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($especialidad->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
