<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoinstrumento $tipoinstrumento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipoinstrumento'), ['action' => 'edit', $tipoinstrumento->idTipoInstrumento], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipoinstrumento'), ['action' => 'delete', $tipoinstrumento->idTipoInstrumento], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoinstrumento->idTipoInstrumento), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipoinstrumento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipoinstrumento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipoinstrumento view content">
            <h3><?= h($tipoinstrumento->idTipoInstrumento) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tipoinstrumento->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($tipoinstrumento->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoInstrumento') ?></th>
                    <td><?= $this->Number->format($tipoinstrumento->idTipoInstrumento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $tipoinstrumento->idUsuarioCrea === null ? '' : $this->Number->format($tipoinstrumento->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipoinstrumento->idUsuarioModifica === null ? '' : $this->Number->format($tipoinstrumento->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipoinstrumento->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipoinstrumento->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
