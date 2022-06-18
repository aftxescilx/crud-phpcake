<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipo[]|\Cake\Collection\CollectionInterface $equipo
 */
?>
<div class="equipo index content">
    <?= $this->Html->link(__('New Equipo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Equipo') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idEquipo') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($equipo as $equipo): ?>
                <tr>
                    <td><?= $this->Number->format($equipo->idEquipo) ?></td>
                    <td><?= h($equipo->codigo) ?></td>
                    <td><?= h($equipo->estatus) ?></td>
                    <td><?= $equipo->idUsuarioCrea === null ? '' : $this->Number->format($equipo->idUsuarioCrea) ?></td>
                    <td><?= h($equipo->fechaCrea) ?></td>
                    <td><?= $equipo->idUsuarioModifica === null ? '' : $this->Number->format($equipo->idUsuarioModifica) ?></td>
                    <td><?= h($equipo->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $equipo->idEquipo]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipo->idEquipo]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipo->idEquipo], ['confirm' => __('Are you sure you want to delete # {0}?', $equipo->idEquipo)]) ?>
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
