<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipo $equipo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Equipo'), ['action' => 'edit', $equipo->idEquipo], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Equipo'), ['action' => 'delete', $equipo->idEquipo], ['confirm' => __('Are you sure you want to delete # {0}?', $equipo->idEquipo), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Equipo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Equipo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="equipo view content">
            <h3><?= h($equipo->idEquipo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($equipo->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($equipo->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEquipo') ?></th>
                    <td><?= $this->Number->format($equipo->idEquipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $equipo->idUsuarioCrea === null ? '' : $this->Number->format($equipo->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $equipo->idUsuarioModifica === null ? '' : $this->Number->format($equipo->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($equipo->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($equipo->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
