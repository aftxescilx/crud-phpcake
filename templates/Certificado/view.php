<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Certificado $certificado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Certificado'), ['action' => 'edit', $certificado->idCertificado], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Certificado'), ['action' => 'delete', $certificado->idCertificado], ['confirm' => __('Are you sure you want to delete # {0}?', $certificado->idCertificado), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Certificado'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Certificado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="certificado view content">
            <h3><?= h($certificado->idCertificado) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($certificado->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ciudad') ?></th>
                    <td><?= h($certificado->ciudad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pais') ?></th>
                    <td><?= h($certificado->pais) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= h($certificado->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCertificado') ?></th>
                    <td><?= $this->Number->format($certificado->idCertificado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdInstitucion') ?></th>
                    <td><?= $this->Number->format($certificado->idInstitucion) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoCertificado') ?></th>
                    <td><?= $this->Number->format($certificado->idTipoCertificado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdEmpleado') ?></th>
                    <td><?= $this->Number->format($certificado->idEmpleado) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioCrea') ?></th>
                    <td><?= $certificado->idUsuarioCrea === null ? '' : $this->Number->format($certificado->idUsuarioCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUsuarioModifica') ?></th>
                    <td><?= $certificado->idUsuarioModifica === null ? '' : $this->Number->format($certificado->idUsuarioModifica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($certificado->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaCrea') ?></th>
                    <td><?= h($certificado->fechaCrea) ?></td>
                </tr>
                <tr>
                    <th><?= __('FechaModifica') ?></th>
                    <td><?= h($certificado->fechaModifica) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
