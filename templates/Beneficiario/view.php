<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Beneficiario $beneficiario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Beneficiario'), ['action' => 'edit', $beneficiario->idBeneficiario], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Beneficiario'), ['action' => 'delete', $beneficiario->idBeneficiario], ['confirm' => __('Are you sure you want to delete # {0}?', $beneficiario->idBeneficiario), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Beneficiario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Beneficiario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="beneficiario view content">
            <h3><?= h($beneficiario->idBeneficiario) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($beneficiario->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rfc') ?></th>
                    <td><?= h($beneficiario->rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($beneficiario->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdBeneficiario') ?></th>
                    <td><?= $this->Number->format($beneficiario->idBeneficiario) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $beneficiario->idUsuarioCrea === null ? '' : $this->Number->format($beneficiario->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $beneficiario->idUsuarioModifica === null ? '' : $this->Number->format($beneficiario->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($beneficiario->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($beneficiario->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
