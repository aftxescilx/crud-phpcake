<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donacion $donacion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Donacion'), ['action' => 'edit', $donacion->idDonacion], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Donacion'), ['action' => 'delete', $donacion->idDonacion], ['confirm' => __('Are you sure you want to delete # {0}?', $donacion->idDonacion), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Donacion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Donacion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donacion view content">
            <h3><?= h($donacion->idDonacion) ?></h3>
            <table>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($donacion->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdDonacion') ?></th>
                    <td><?= $this->Number->format($donacion->idDonacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor') ?></th>
                    <td><?= $this->Number->format($donacion->valor) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdBeneficiario') ?></th>
                    <td><?= $this->Number->format($donacion->idBeneficiario) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $donacion->idUsuarioCrea === null ? '' : $this->Number->format($donacion->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $donacion->idUsuarioModifica === null ? '' : $this->Number->format($donacion->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($donacion->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($donacion->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($donacion->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
