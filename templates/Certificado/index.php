<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Certificado[]|\Cake\Collection\CollectionInterface $certificado
 */
?>
<div class="certificado index content">
    <?= $this->Html->link(__('New Certificado'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Certificado') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idCertificado') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('idInstitucion') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('ciudad') ?></th>
                    <th><?= $this->Paginator->sort('pais') ?></th>
                    <th><?= $this->Paginator->sort('idTipoCertificado') ?></th>
                    <th><?= $this->Paginator->sort('idEmpleado') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($certificado as $certificado): ?>
                <tr>
                    <td><?= $this->Number->format($certificado->idCertificado) ?></td>
                    <td><?= h($certificado->codigo) ?></td>
                    <td><?= $this->Number->format($certificado->idInstitucion) ?></td>
                    <td><?= h($certificado->fecha) ?></td>
                    <td><?= h($certificado->ciudad) ?></td>
                    <td><?= h($certificado->pais) ?></td>
                    <td><?= $this->Number->format($certificado->idTipoCertificado) ?></td>
                    <td><?= $this->Number->format($certificado->idEmpleado) ?></td>
                    <td><?= h($certificado->estatus) ?></td>
                    <td><?= $certificado->idUsuarioCrea === null ? '' : $this->Number->format($certificado->idUsuarioCrea) ?></td>
                    <td><?= h($certificado->fechaCrea) ?></td>
                    <td><?= $certificado->idUsuarioModifica === null ? '' : $this->Number->format($certificado->idUsuarioModifica) ?></td>
                    <td><?= h($certificado->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $certificado->idCertificado]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $certificado->idCertificado]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $certificado->idCertificado], ['confirm' => __('Are you sure you want to delete # {0}?', $certificado->idCertificado)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
