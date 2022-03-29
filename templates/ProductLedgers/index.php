<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductLedger[]|\Cake\Collection\CollectionInterface $productLedgers
 */
?>
<div class="productLedgers index content">
    <?= $this->Html->link(__('New Product Ledger'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Product Ledgers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('product_code') ?></th>
                    <th><?= $this->Paginator->sort('in_out') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th><?= $this->Paginator->sort('amount') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productLedgers as $productLedger): ?>
                <tr>
                    <td><?= $this->Number->format($productLedger->id) ?></td>
                    <td><?= h($productLedger->date) ?></td>
                    <td><?= h($productLedger->product_code) ?></td>
                    <td><?= h($productLedger->in_out) ?></td>
                    <td><?= $this->Number->format($productLedger->quantity) ?></td>
                    <td><?= $this->Number->format($productLedger->amount) ?></td>
                    <td><?= h($productLedger->created) ?></td>
                    <td><?= h($productLedger->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productLedger->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productLedger->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productLedger->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productLedger->id)]) ?>
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
