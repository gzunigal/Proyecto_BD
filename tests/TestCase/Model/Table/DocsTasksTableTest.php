<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocsTasksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocsTasksTable Test Case
 */
class DocsTasksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DocsTasksTable
     */
    public $DocsTasks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.docs_tasks',
        'app.docs',
        'app.tasks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DocsTasks') ? [] : ['className' => 'App\Model\Table\DocsTasksTable'];
        $this->DocsTasks = TableRegistry::get('DocsTasks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DocsTasks);

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
