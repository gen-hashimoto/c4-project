<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Prefecture> $prefectures
 */
?>
<div class="prefectures index content">
    <?= $this->Html->link(__('New Prefecture'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3>■<?= __('Prefectures') ?>■</h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('jis_code') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prefectures as $prefecture): ?>
                <tr>
                    <td><?= $this->Number->format($prefecture->id) ?></td>
            <td><?= h($prefecture->name) ?></td>
            <td><?= h($prefecture->jis_code) ?></td>
            <td><?= h($prefecture->created) ?></td>
            <td><?= h($prefecture->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $prefecture->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prefecture->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prefecture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prefecture->id)]) ?>
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
