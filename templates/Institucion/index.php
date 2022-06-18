<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Institucion[]|\Cake\Collection\CollectionInterface $institucion
 */
?>
<div class="institucion index content">
    <?= $this->Html->link(__('New Institucion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Institucion') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idInstitucion') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('ciudad') ?></th>
                    <th><?= $this->Paginator->sort('pais') ?></th>
                    <th><?= $this->Paginator->sort('idTipoInstitucion') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($institucion as $institucion): ?>
                <tr>
                    <td><?= $this->Number->format($institucion->idInstitucion) ?></td>
                    <td><?= h($institucion->nombre) ?></td>
                    <td><?= h($institucion->codigo) ?></td>
                    <td><?= h($institucion->ciudad) ?></td>
                    <td><?= h($institucion->pais) ?></td>
                    <td><?= $this->Number->format($institucion->idTipoInstitucion) ?></td>
                    <td><?= h($institucion->estatus) ?></td>
                    <td><?= $institucion->idUsuarioCrea === null ? '' : $this->Number->format($institucion->idUsuarioCrea) ?></td>
                    <td><?= h($institucion->fechaCrea) ?></td>
                    <td><?= $institucion->idUsuarioModifica === null ? '' : $this->Number->format($institucion->idUsuarioModifica) ?></td>
                    <td><?= h($institucion->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $institucion->idInstitucion]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $institucion->idInstitucion]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $institucion->idInstitucion], ['confirm' => __('Are you sure you want to delete # {0}?', $institucion->idInstitucion)]) ?>
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
