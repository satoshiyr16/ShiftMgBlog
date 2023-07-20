<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Shifts seed.
 */
class ShiftsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            'company' => 'サンプル',
            'time' => 8,
            'subtle' => 1200,
            'money' => 10000,
            'rest' => 1,
            'created' => '2023-07-20 22:00:00',
            'modified' => '2023-07-20 22:00:00',
        ];

        $table = $this->table('shifts');
        $table->insert($data)->save();
    }
}
