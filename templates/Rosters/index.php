<?php

use Cake\I18n\FrozenTime;

$month = range(0, 12);
unset($month[0]);

if (empty($condition)) {
    $default_year = (new FrozenTime())->i18nFormat('YYYY');
    $default_day = (new FrozenTime())->i18nFormat('M');
} else {
    $default_year = $condition['year'];
    $default_day = $condition['month'];
}

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Roster> $rosters
 */
?>
<div class="rosters index content">
    <h3><?= __('勤務表') ?></h3>
    <?= $this->Form->create() ?>
    <div style="float: left; padding-right: 10px;">
        <?= $this->Form->select('year', $years, ['value' => $default_year]) ?>
    </div>
    <div style="float: left; padding: 7px 10px 5px 0px;">年</div>
    <div style="float: left; padding-right: 10px;">
        <?= $this->Form->select('month', $month, ['value' => $default_day]) ?>
    </div>
    <div style="float: left; padding: 7px 10px 5px 0px;">月</div>
    <div style="float: left;">
        <?= $this->Form->button(__('search')) ?>
    </div>
    <?= $this->Form->end() ?>
    <div class="table-responsive">
        <?php if (isset($rosters)) { ?>
            <table>
                <thead>
                    <tr>
                        <th><?= __('day') ?></th>
                        <th><?= __('start_time') ?></th>
                        <th><?= __('end_time') ?></th>
                        <th><?= __('status') ?></th>
                        <th><?= __('reason') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rosters as $key => $roster) { ?>
                        <tr>
                            <td><?= h((new FrozenTime($condition['year'] . '-' . $condition['month'] . '-' . $key))->i18nFormat('d日（E）')) ?></td>
                            <td><?= empty($roster->start_time) ? '' : h($roster->start_time->i18nFormat('HH:mm')) ?></td>
                            <td><?= empty($roster->end_time) ? '' : h($roster->end_time->i18nFormat('HH:mm')) ?></td>
                            <td><?= empty($roster->status) ? '' : $this->Number->format($roster->status) ?></td>
                            <td><?= empty($roster->reason) ? '' : h($roster->reason) ?></td>
                            <td class="actions">
                                <?= empty($roster) ? '' : $this->Html->link(__('Edit'), ['action' => 'edit', $roster->id]) ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>
    </div>
</div>