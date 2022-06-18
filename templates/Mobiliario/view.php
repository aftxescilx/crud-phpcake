<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mobiliario $mobiliario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Mobiliario'), ['action' => 'edit', $mobiliario->idMobiliario], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Mobiliario'), ['action' => 'delete', $mobiliario->idMobiliario], ['confirm' => __('Are you sure you want to delete # {0}?', $mobiliario->idMobiliario), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Mobiliario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Mobiliario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mobiliario view content">
            <h3><?= h($mobiliario->idMobiliario) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($mobiliario->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($mobiliario->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdMobiliario') ?></th>
                    <td><?= $this->Number->format($mobiliario->idMobiliario) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoMobiliario') ?></th>
                    <td><?= $this->Number->format($mobiliario->idTipoMobiliario) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdDepartamento') ?></th>
                    <td><?= $this->Number->format($mobiliario->idDepartamento) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $mobiliario->idUsuarioCrea === null ? '' : $this->Number->format($mobiliario->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $mobiliario->idUsuarioModifica === null ? '' : $this->Number->format($mobiliario->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($mobiliario->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($mobiliario->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
