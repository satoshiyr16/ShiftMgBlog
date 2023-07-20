<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ShiftsFixture
 */
class ShiftsFixture extends TestFixture
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
                'company' => 'Lorem ipsum dolor sit amet',
                'time' => 1,
                'subtle' => 1,
                'money' => 1,
                'rest' => 1,
                'created' => '2023-07-20 21:44:21',
                'modified' => '2023-07-20 21:44:21',
            ],
        ];
        parent::init();
    }
}
