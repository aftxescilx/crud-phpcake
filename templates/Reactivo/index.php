<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reactivo[]|\Cake\Collection\CollectionInterface $reactivo
 */
?>
<div class="reactivo index content">
    <?= $this->Html->link(__('New Reactivo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Reactivo') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idReactivo') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('formula') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reactivo as $reactivo): ?>
                <tr>
                    <td><?= $this->Number->format($reactivo->idReactivo) ?></td>
                    <td><?= h($reactivo->nombre) ?></td>
                    <td><?= h($reactivo->formula) ?></td>
                    <td><?= h($reactivo->tipo) ?></td>
                    <td><?= h($reactivo->estatus) ?></td>
                    <td><?= $reactivo->idUsuarioCrea === null ? '' : $this->Number->format($reactivo->idUsuarioCrea) ?></td>
                    <td><?= h($reactivo->fechaCrea) ?></td>
                    <td><?= $reactivo->idUsuarioModifica === null ? '' : $this->Number->format($reactivo->idUsuarioModifica) ?></td>
                    <td><?= h($reactivo->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $reactivo->idReactivo]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reactivo->idReactivo]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reactivo->idReactivo], ['confirm' => __('Are you sure you want to delete # {0}?', $reactivo->idReactivo)]) ?>
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
