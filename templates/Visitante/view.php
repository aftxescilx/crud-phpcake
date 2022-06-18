<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visitante $visitante
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Visitante'), ['action' => 'edit', $visitante->idVisitante], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Visitante'), ['action' => 'delete', $visitante->idVisitante], ['confirm' => __('Are you sure you want to delete # {0}?', $visitante->idVisitante), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Visitante'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Visitante'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="visitante view content">
            <h3><?= h($visitante->idVisitante) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($visitante->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('ApellidoPaterno') ?></th>
                    <td><?= h($visitante->apellidoPaterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('ApellidoMaterno') ?></th>
                    <td><?= h($visitante->apellidoMaterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($visitante->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($visitante->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dni') ?></th>
                    <td><?= h($visitante->dni) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($visitante->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdVisitante') ?></th>
                    <td><?= $this->Number->format($visitante->idVisitante) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $visitante->idUsuarioCrea === null ? '' : $this->Number->format($visitante->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $visitante->idUsuarioModifica === null ? '' : $this->Number->format($visitante->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaNacimiento') ?></th>
                    <td><?= h($visitante->fechaNacimiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($visitante->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($visitante->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
