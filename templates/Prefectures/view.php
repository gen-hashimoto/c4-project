<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prefecture $prefecture
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Prefecture'), ['action' => 'edit', $prefecture->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Prefecture'), ['action' => 'delete', $prefecture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prefecture->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Prefectures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Prefecture'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="prefectures view content">
            <h3><?= h($prefecture->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($prefecture->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jis Code') ?></th>
                    <td><?= h($prefecture->jis_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($prefecture->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($prefecture->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($prefecture->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
