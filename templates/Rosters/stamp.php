<div class="rosters form" style="text-align: center;">
    <?php
    $this->start('title');
    echo '勤怠システム';
    $this->end();
    ?>
    <?php
    // 認証情報からアカウントIDを取得する。認証情報が取得できない場合はNULL。
    $auth = $this->request->getSession()->read('Auth');
    $account = is_null($auth) ? NULL : $auth->account;
    ?>
    <div style="width:500px; margin-left:auto; margin-right:auto;">
        <?= $this->Flash->render() ?>
        <?= $this->Form->create() ?>
        <?= __('アカウントIDを入力して打刻して下さい。') ?>
        <?= $this->Form->control('account', ['require' => true, 'label' => '', 'value' => $account]) ?>
        <?= $this->Form->button('出勤', ['value' => 'sta', 'name' => 'kubun']) ?>
        <?= $this->Form->button('退勤', ['value' => 'end', 'name' => 'kubun']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>