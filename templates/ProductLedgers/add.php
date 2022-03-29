<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductLedger $productLedger
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Product Ledgers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productLedgers form content">
            <?= $this->Form->create($productLedger) ?>
            <fieldset>
                <legend><?= __('Add Product Ledger') ?></legend>
                <?php
                    echo $this->Form->control('date');
                    echo $this->Form->control('product_code');
                    echo $this->Form->control('in_out');
                    echo $this->Form->control('quantity');
                    echo $this->Form->control('amount');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
