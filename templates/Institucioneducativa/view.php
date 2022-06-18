<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Institucioneducativa $institucioneducativa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Institucioneducativa'), ['action' => 'edit', $institucioneducativa->idInstitucionEducativa], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Institucioneducativa'), ['action' => 'delete', $institucioneducativa->idInstitucionEducativa], ['confirm' => __('Are you sure you want to delete # {0}?', $institucioneducativa->idInstitucionEducativa), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Institucioneducativa'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Institucioneducativa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="institucioneducativa view content">
            <h3><?= h($institucioneducativa->idInstitucionEducativa) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($institucioneducativa->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ciudad') ?></th>
                    <td><?= h($institucioneducativa->ciudad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($institucioneducativa->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pais') ?></th>
                    <td><?= h($institucioneducativa->pais) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($institucioneducativa->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdInstitucionEducativa') ?></th>
                    <td><?= $this->Number->format($institucioneducativa->idInstitucionEducativa) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $institucioneducativa->idUsuarioCrea === null ? '' : $this->Number->format($institucioneducativa->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $institucioneducativa->idUsuarioModifica === null ? '' : $this->Number->format($institucioneducativa->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($institucioneducativa->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($institucioneducativa->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
