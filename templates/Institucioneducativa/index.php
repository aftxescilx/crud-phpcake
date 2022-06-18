<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Institucioneducativa[]|\Cake\Collection\CollectionInterface $institucioneducativa
 */
?>
<div class="institucioneducativa index content">
    <?= $this->Html->link(__('New Institucioneducativa'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Institucioneducativa') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idInstitucionEducativa') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('ciudad') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th><?= $this->Paginator->sort('pais') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioCrea') ?></th>
                    <th><?= $this->Paginator->sort('fechaCrea') ?></th>
                    <th><?= $this->Paginator->sort('idUsuarioModifica') ?></th>
                    <th><?= $this->Paginator->sort('fechaModifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($institucioneducativa as $institucioneducativa): ?>
                <tr>
                    <td><?= $this->Number->format($institucioneducativa->idInstitucionEducativa) ?></td>
                    <td><?= h($institucioneducativa->nombre) ?></td>
                    <td><?= h($institucioneducativa->ciudad) ?></td>
                    <td><?= h($institucioneducativa->estado) ?></td>
                    <td><?= h($institucioneducativa->pais) ?></td>
                    <td><?= h($institucioneducativa->estatus) ?></td>
                    <td><?= $institucioneducativa->idUsuarioCrea === null ? '' : $this->Number->format($institucioneducativa->idUsuarioCrea) ?></td>
                    <td><?= h($institucioneducativa->fechaCrea) ?></td>
                    <td><?= $institucioneducativa->idUsuarioModifica === null ? '' : $this->Number->format($institucioneducativa->idUsuarioModifica) ?></td>
                    <td><?= h($institucioneducativa->fechaModifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $institucioneducativa->idInstitucionEducativa]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $institucioneducativa->idInstitucionEducativa]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $institucioneducativa->idInstitucionEducativa], ['confirm' => __('Are you sure you want to delete # {0}?', $institucioneducativa->idInstitucionEducativa)]) ?>
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
