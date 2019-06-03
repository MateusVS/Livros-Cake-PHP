<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AutoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AutoresTable Test Case
 */
class AutoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AutoresTable
     */
    public $Autores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Autores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Autores') ? [] : ['className' => AutoresTable::class];
        $this->Autores = TableRegistry::getTableLocator()->get('Autores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Autores);

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
}
