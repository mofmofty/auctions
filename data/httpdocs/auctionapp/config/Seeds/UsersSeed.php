<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'username' => 'admin',
                'password' => '$2y$10$kbWPVVYMtySrJQpWrhIJQugaw0B4MgRUasbtLCN54C08rd2D/AZXW',
                'role' => 'admin',
            ],
            [
                'id' => '2',
                'username' => 'taro',
                'password' => '$2y$10$2TGFf4eXjrNjpW4j7CplROd3e.46XncJv7kx8Els8QhWX10tbgIX.',
                'role' => 'user',
            ],
            [
                'id' => '3',
                'username' => 'hana',
                'password' => '$2y$10$RrYssGHVnSjOxXkLt3eZZ.Z8n8x8Xzdjo8wPpyS1Hgtd9fJ4wH..O',
                'role' => 'user',
            ],
            [
                'id' => '4',
                'username' => 'jiro',
                'password' => '$2y$10$KeVDE1xRf37oXSuczuEKcuPDjvylcmzpdbZcsxuIVDQJzvQO/avSe',
                'role' => 'user',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
