<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateShifts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('shifts');
        $table
            ->addColumn('company','string',[
                'limit' => 100,
                'null' => false
            ])
            ->addColumn('time','integer',[
                'limit' => 100,
                'null' => false
            ])
            ->addColumn('hourly_wage','integer',[
                'limit' => 50,
                'null' => false
            ])
            ->addColumn('money','integer',[
                'null' => true,
                'default' => null
            ])
            ->addColumn('rest','integer',[
                'limit' => 150,
                'null' => true
            ])
            ->addColumn('created','datetime')
            ->addColumn('modified','datetime')
            ->create();
    }
}
