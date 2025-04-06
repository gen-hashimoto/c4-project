<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RostersFixture
 */
class RostersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'users_id' => 1,
                'start_time' => '2025-04-07 07:06:05',
                'end_time' => '2025-04-07 07:06:05',
                'status' => 1,
                'reason' => 'Lorem ipsum dolor sit amet',
                'deleted' => '2025-04-07 07:06:05',
                'created' => 1743977165,
                'modified' => 1743977165,
                'created_user' => 'Lorem ipsum dolor sit amet',
                'modified_user' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
