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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prefecture->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prefecture->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Prefectures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="prefectures form content">
            <?= $this->Form->create($prefecture) ?>
            <fieldset>
                <legend><?= __('Edit Prefecture') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('jis_code');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
