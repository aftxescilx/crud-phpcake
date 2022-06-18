<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Caso $caso
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Caso'), ['action' => 'edit', $caso->idCaso], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Caso'), ['action' => 'delete', $caso->idCaso], ['confirm' => __('Are you sure you want to delete # {0}?', $caso->idCaso), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Caso'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Caso'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="caso view content">
            <h3><?= h($caso->idCaso) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($caso->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($caso->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($caso->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCaso') ?></th>
                    <td><?= $this->Number->format($caso->idCaso) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEquipo') ?></th>
                    <td><?= $this->Number->format($caso->idEquipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEspecialidad') ?></th>
                    <td><?= $this->Number->format($caso->idEspecialidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $caso->idUsuarioCrea === null ? '' : $this->Number->format($caso->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $caso->idUsuarioModifica === null ? '' : $this->Number->format($caso->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaInicio') ?></th>
                    <td><?= h($caso->fechaInicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCierre') ?></th>
                    <td><?= h($caso->fechaCierre) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($caso->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($caso->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
