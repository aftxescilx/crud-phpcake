<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donacioninstitucion $donacioninstitucion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Donacioninstitucion'), ['action' => 'edit', $donacioninstitucion->idDonacionInstitucion], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Donacioninstitucion'), ['action' => 'delete', $donacioninstitucion->idDonacionInstitucion], ['confirm' => __('Are you sure you want to delete # {0}?', $donacioninstitucion->idDonacionInstitucion), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Donacioninstitucion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Donacioninstitucion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donacioninstitucion view content">
            <h3><?= h($donacioninstitucion->idDonacionInstitucion) ?></h3>
            <table>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($donacioninstitucion->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdDonacionInstitucion') ?></th>
                    <td><?= $this->Number->format($donacioninstitucion->idDonacionInstitucion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdDonacion') ?></th>
                    <td><?= $this->Number->format($donacioninstitucion->idDonacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdInstitucion') ?></th>
                    <td><?= $this->Number->format($donacioninstitucion->idInstitucion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $donacioninstitucion->idUsuarioCrea === null ? '' : $this->Number->format($donacioninstitucion->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $donacioninstitucion->idUsuarioModifica === null ? '' : $this->Number->format($donacioninstitucion->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($donacioninstitucion->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($donacioninstitucion->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
