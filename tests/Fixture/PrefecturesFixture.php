<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PrefecturesFixture
 */
class PrefecturesFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'jis_code' => 'Lo',
                'created' => '2025-04-06 22:46:41',
                'modified' => '2025-04-06 22:46:41',
            ],
        ];
        parent::init();
    }
}
