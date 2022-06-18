<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamentoreactivo $departamentoreactivo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Departamentoreactivo'), ['action' => 'edit', $departamentoreactivo->idDepartamentoReactivo], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Departamentoreactivo'), ['action' => 'delete', $departamentoreactivo->idDepartamentoReactivo], ['confirm' => __('Are you sure you want to delete # {0}?', $departamentoreactivo->idDepartamentoReactivo), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Departamentoreactivo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Departamentoreactivo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="departamentoreactivo view content">
            <h3><?= h($departamentoreactivo->idDepartamentoReactivo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Lote') ?></th>
                    <td><?= h($departamentoreactivo->lote) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($departamentoreactivo->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($departamentoreactivo->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdDepartamentoReactivo') ?></th>
                    <td><?= $this->Number->format($departamentoreactivo->idDepartamentoReactivo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdDepartamento') ?></th>
                    <td><?= $this->Number->format($departamentoreactivo->idDepartamento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdReactivo') ?></th>
                    <td><?= $this->Number->format($departamentoreactivo->idReactivo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $departamentoreactivo->idUsuarioCrea === null ? '' : $this->Number->format($departamentoreactivo->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $departamentoreactivo->idUsuarioModifica === null ? '' : $this->Number->format($departamentoreactivo->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaEmpaque') ?></th>
                    <td><?= h($departamentoreactivo->fechaEmpaque) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCaducidad') ?></th>
                    <td><?= h($departamentoreactivo->fechaCaducidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($departamentoreactivo->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($departamentoreactivo->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
