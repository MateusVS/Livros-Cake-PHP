<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LivrosgenerosFixture
 */
class LivrosgenerosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'livros_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'generos_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'livros_id' => ['type' => 'index', 'columns' => ['livros_id'], 'length' => []],
            'generos_id' => ['type' => 'index', 'columns' => ['generos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'livrosgeneros_ibfk_1' => ['type' => 'foreign', 'columns' => ['livros_id'], 'references' => ['livros', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'livrosgeneros_ibfk_2' => ['type' => 'foreign', 'columns' => ['generos_id'], 'references' => ['generos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'livros_id' => 1,
                'generos_id' => 1
            ],
        ];
        parent::init();
    }
}
