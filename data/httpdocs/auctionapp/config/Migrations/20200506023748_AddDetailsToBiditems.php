<?php
use Migrations\AbstractMigration;

class AddDetailsToBiditems extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('biditems');
        $table->addColumn('details', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => false,
        ]);
        $table->update();
    }
}
