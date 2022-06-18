<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reactivo $reactivo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Reactivo'), ['action' => 'edit', $reactivo->idReactivo], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Reactivo'), ['action' => 'delete', $reactivo->idReactivo], ['confirm' => __('Are you sure you want to delete # {0}?', $reactivo->idReactivo), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Reactivo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Reactivo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reactivo view content">
            <h3><?= h($reactivo->idReactivo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($reactivo->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Formula') ?></th>
                    <td><?= h($reactivo->formula) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($reactivo->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($reactivo->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdReactivo') ?></th>
                    <td><?= $this->Number->format($reactivo->idReactivo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $reactivo->idUsuarioCrea === null ? '' : $this->Number->format($reactivo->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $reactivo->idUsuarioModifica === null ? '' : $this->Number->format($reactivo->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($reactivo->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($reactivo->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
