<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visitante[]|\Cake\Collection\CollectionInterface $visitante
 */
?>
<div class="visitante index content">
    <?= $this->Html->link(__('New Visitante'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Visitante') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idVisitante') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('apellidoPaterno') ?></th>
                    <th><?= $this->Paginator->sort('apellidoMaterno') ?></th>
                    <th><?= $this->Paginator->sort('correo') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('fechaNacimiento') ?></th>
                    <th><?= $this->Paginator->sort('dni') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($visitante as $visitante): ?>
                <tr>
                    <td><?= $this->Number->format($visitante->idVisitante) ?></td>
                    <td><?= h($visitante->nombre) ?></td>
                    <td><?= h($visitante->apellidoPaterno) ?></td>
                    <td><?= h($visitante->apellidoMaterno) ?></td>
                    <td><?= h($visitante->correo) ?></td>
                    <td><?= h($visitante->telefono) ?></td>
                    <td><?= h($visitante->fechaNacimiento) ?></td>
                    <td><?= h($visitante->dni) ?></td>
                    <td><?= h($visitante->estatus) ?></td>
                    <td><?= $visitante->idUsuarioCrea === null ? '' : $this->Number->format($visitante->idUsuarioCrea) ?></td>
                    <td><?= h($visitante->fechaCrea) ?></td>
                    <td><?= $visitante->idUsuarioModifica === null ? '' : $this->Number->format($visitante->idUsuarioModifica) ?></td>
                    <td><?= h($visitante->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $visitante->idVisitante]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visitante->idVisitante]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $visitante->idVisitante], ['confirm' => __('Are you sure you want to delete # {0}?', $visitante->idVisitante)]) ?>
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
