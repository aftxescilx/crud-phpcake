<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mobiliario[]|\Cake\Collection\CollectionInterface $mobiliario
 */
?>
<div class="mobiliario index content">
    <?= $this->Html->link(__('New Mobiliario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Mobiliario') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idMobiliario') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('idTipoMobiliario') ?></th>
                    <th><?= $this->Paginator->sort('idDepartamento') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mobiliario as $mobiliario): ?>
                <tr>
                    <td><?= $this->Number->format($mobiliario->idMobiliario) ?></td>
                    <td><?= h($mobiliario->codigo) ?></td>
                    <td><?= $this->Number->format($mobiliario->idTipoMobiliario) ?></td>
                    <td><?= $this->Number->format($mobiliario->idDepartamento) ?></td>
                    <td><?= h($mobiliario->estatus) ?></td>
                    <td><?= $mobiliario->idUsuarioCrea === null ? '' : $this->Number->format($mobiliario->idUsuarioCrea) ?></td>
                    <td><?= h($mobiliario->fechaCrea) ?></td>
                    <td><?= $mobiliario->idUsuarioModifica === null ? '' : $this->Number->format($mobiliario->idUsuarioModifica) ?></td>
                    <td><?= h($mobiliario->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mobiliario->idMobiliario]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mobiliario->idMobiliario]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mobiliario->idMobiliario], ['confirm' => __('Are you sure you want to delete # {0}?', $mobiliario->idMobiliario)]) ?>
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
