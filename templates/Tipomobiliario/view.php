<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipomobiliario $tipomobiliario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipomobiliario'), ['action' => 'edit', $tipomobiliario->idTipoMobiliario], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipomobiliario'), ['action' => 'delete', $tipomobiliario->idTipoMobiliario], ['confirm' => __('Are you sure you want to delete # {0}?', $tipomobiliario->idTipoMobiliario), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipomobiliario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipomobiliario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipomobiliario view content">
            <h3><?= h($tipomobiliario->idTipoMobiliario) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tipomobiliario->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($tipomobiliario->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoMobiliario') ?></th>
                    <td><?= $this->Number->format($tipomobiliario->idTipoMobiliario) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $tipomobiliario->idUsuarioCrea === null ? '' : $this->Number->format($tipomobiliario->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $tipomobiliario->idUsuarioModifica === null ? '' : $this->Number->format($tipomobiliario->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($tipomobiliario->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($tipomobiliario->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
