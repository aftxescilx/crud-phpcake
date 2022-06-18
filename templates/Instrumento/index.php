<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Instrumento[]|\Cake\Collection\CollectionInterface $instrumento
 */
?>
<div class="instrumento index content">
    <?= $this->Html->link(__('New Instrumento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Instrumento') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idInstrumento') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('idTipoInstrumento') ?></th>
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
                <?php foreach ($instrumento as $instrumento): ?>
                <tr>
                    <td><?= $this->Number->format($instrumento->idInstrumento) ?></td>
                    <td><?= h($instrumento->codigo) ?></td>
                    <td><?= $this->Number->format($instrumento->idTipoInstrumento) ?></td>
                    <td><?= $this->Number->format($instrumento->idDepartamento) ?></td>
                    <td><?= h($instrumento->estatus) ?></td>
                    <td><?= $instrumento->idUsuarioCrea === null ? '' : $this->Number->format($instrumento->idUsuarioCrea) ?></td>
                    <td><?= h($instrumento->fechaCrea) ?></td>
                    <td><?= $instrumento->idUsuarioModifica === null ? '' : $this->Number->format($instrumento->idUsuarioModifica) ?></td>
                    <td><?= h($instrumento->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $instrumento->idInstrumento]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $instrumento->idInstrumento]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $instrumento->idInstrumento], ['confirm' => __('Are you sure you want to delete # {0}?', $instrumento->idInstrumento)]) ?>
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
