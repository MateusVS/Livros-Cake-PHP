<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LivrosgenerosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LivrosgenerosTable Test Case
 */
class LivrosgenerosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LivrosgenerosTable
     */
    public $Livrosgeneros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Livrosgeneros',
        'app.Livros',
        'app.Generos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Livrosgeneros') ? [] : ['className' => LivrosgenerosTable::class];
        $this->Livrosgeneros = TableRegistry::getTableLocator()->get('Livrosgeneros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Livrosgeneros);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
