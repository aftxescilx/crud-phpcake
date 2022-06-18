<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoinstitucion $tipoinstitucion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipoinstitucion'), ['action' => 'edit', $tipoinstitucion->idTipoInstitucion], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipoinstitucion'), ['action' => 'delete', $tipoinstitucion->idTipoInstitucion], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoinstitucion->idTipoInstitucion), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipoinstitucion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipoinstitucion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipoinstitucion view content">
            <h3><?= h($tipoinstitucion->idTipoInstitucion) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tipoinstitucion->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($tipoinstitucion->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoInstitucion') ?></th>
                    <td><?= $this->Number->format($tipoinstitucion->idTipoInstitucion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $tipoinstitucion->idUsuarioCrea === null ? '' : $this->Number->format($tipoinstitucion->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipoinstitucion->idUsuarioModifica === null ? '' : $this->Number->format($tipoinstitucion->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipoinstitucion->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipoinstitucion->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
