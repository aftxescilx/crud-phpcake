<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipocertificado $tipocertificado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipocertificado'), ['action' => 'edit', $tipocertificado->idTipoCertificado], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipocertificado'), ['action' => 'delete', $tipocertificado->idTipoCertificado], ['confirm' => __('Are you sure you want to delete # {0}?', $tipocertificado->idTipoCertificado), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipocertificado'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipocertificado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipocertificado view content">
            <h3><?= h($tipocertificado->idTipoCertificado) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tipocertificado->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($tipocertificado->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoCertificado') ?></th>
                    <td><?= $this->Number->format($tipocertificado->idTipoCertificado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $tipocertificado->idUsuarioCrea === null ? '' : $this->Number->format($tipocertificado->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipocertificado->idUsuarioModifica === null ? '' : $this->Number->format($tipocertificado->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipocertificado->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipocertificado->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
