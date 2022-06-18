<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipomobiliario[]|\Cake\Collection\CollectionInterface $tipomobiliario
 */
?>
<div class="tipomobiliario index content">
    <?= $this->Html->link(__('New Tipomobiliario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipomobiliario') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoMobiliario') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipomobiliario as $tipomobiliario): ?>
                <tr>
                    <td><?= $this->Number->format($tipomobiliario->idTipoMobiliario) ?></td>
                    <td><?= h($tipomobiliario->nombre) ?></td>
                    <td><?= h($tipomobiliario->estatus) ?></td>
                    <td><?= $tipomobiliario->idUsuarioCrea === null ? '' : $this->Number->format($tipomobiliario->idUsuarioCrea) ?></td>
                    <td><?= h($tipomobiliario->fechaCrea) ?></td>
                    <td><?= $tipomobiliario->idUsuarioModifica === null ? '' : $this->Number->format($tipomobiliario->idUsuarioModifica) ?></td>
                    <td><?= h($tipomobiliario->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipomobiliario->idTipoMobiliario]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipomobiliario->idTipoMobiliario]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipomobiliario->idTipoMobiliario], ['confirm' => __('Are you sure you want to delete # {0}?', $tipomobiliario->idTipoMobiliario)]) ?>
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
