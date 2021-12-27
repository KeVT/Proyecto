<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\XdTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\XdTable Test Case
 */
class XdTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\XdTable
     */
    public $Xd;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Xd',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Xd') ? [] : ['className' => XdTable::class];
        $this->Xd = TableRegistry::getTableLocator()->get('Xd', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Xd);

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
