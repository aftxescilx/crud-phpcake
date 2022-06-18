<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Caso[]|\Cake\Collection\CollectionInterface $caso
 */
?>
<div class="caso index content">
    <?= $this->Html->link(__('New Caso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Caso') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idCaso') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th><?= $this->Paginator->sort('fechaInicio') ?></th>
                    <th><?= $this->Paginator->sort('fechaCierre') ?></th>
                    <th><?= $this->Paginator->sort('idEquipo') ?></th>
                    <th><?= $this->Paginator->sort('idEspecialidad') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($caso as $caso): ?>
                <tr>
                    <td><?= $this->Number->format($caso->idCaso) ?></td>
                    <td><?= h($caso->codigo) ?></td>
                    <td><?= h($caso->estado) ?></td>
                    <td><?= h($caso->fechaInicio) ?></td>
                    <td><?= h($caso->fechaCierre) ?></td>
                    <td><?= $this->Number->format($caso->idEquipo) ?></td>
                    <td><?= $this->Number->format($caso->idEspecialidad) ?></td>
                    <td><?= h($caso->estatus) ?></td>
                    <td><?= $caso->idUsuarioCrea === null ? '' : $this->Number->format($caso->idUsuarioCrea) ?></td>
                    <td><?= h($caso->fechaCrea) ?></td>
                    <td><?= $caso->idUsuarioModifica === null ? '' : $this->Number->format($caso->idUsuarioModifica) ?></td>
                    <td><?= h($caso->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $caso->idCaso]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $caso->idCaso]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $caso->idCaso], ['confirm' => __('Are you sure you want to delete # {0}?', $caso->idCaso)]) ?>
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
