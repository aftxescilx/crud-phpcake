<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Instrumento $instrumento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Instrumento'), ['action' => 'edit', $instrumento->idInstrumento], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Instrumento'), ['action' => 'delete', $instrumento->idInstrumento], ['confirm' => __('Are you sure you want to delete # {0}?', $instrumento->idInstrumento), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Instrumento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Instrumento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="instrumento view content">
            <h3><?= h($instrumento->idInstrumento) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($instrumento->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($instrumento->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdInstrumento') ?></th>
                    <td><?= $this->Number->format($instrumento->idInstrumento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoInstrumento') ?></th>
                    <td><?= $this->Number->format($instrumento->idTipoInstrumento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdDepartamento') ?></th>
                    <td><?= $this->Number->format($instrumento->idDepartamento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $instrumento->idUsuarioCrea === null ? '' : $this->Number->format($instrumento->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $instrumento->idUsuarioModifica === null ? '' : $this->Number->format($instrumento->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($instrumento->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($instrumento->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
