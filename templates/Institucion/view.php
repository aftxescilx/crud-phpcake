<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Institucion $institucion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Institucion'), ['action' => 'edit', $institucion->idInstitucion], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Institucion'), ['action' => 'delete', $institucion->idInstitucion], ['confirm' => __('Are you sure you want to delete # {0}?', $institucion->idInstitucion), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Institucion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Institucion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="institucion view content">
            <h3><?= h($institucion->idInstitucion) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($institucion->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($institucion->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ciudad') ?></th>
                    <td><?= h($institucion->ciudad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pais') ?></th>
                    <td><?= h($institucion->pais) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($institucion->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdInstitucion') ?></th>
                    <td><?= $this->Number->format($institucion->idInstitucion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoInstitucion') ?></th>
                    <td><?= $this->Number->format($institucion->idTipoInstitucion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $institucion->idUsuarioCrea === null ? '' : $this->Number->format($institucion->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $institucion->idUsuarioModifica === null ? '' : $this->Number->format($institucion->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($institucion->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($institucion->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
