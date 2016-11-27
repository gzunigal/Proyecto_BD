<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TasksUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TasksUsersTable Test Case
 */
class TasksUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TasksUsersTable
     */
    public $TasksUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tasks_users',
        'app.tasks',
        'app.missions',
        'app.emergencies',
        'app.users',
        'app.communes',
        'app.regions',
        'app.problems',
        'app.requests',
        'app.abilities',
        'app.abilities_tasks',
        'app.abilities_users',
        'app.docs',
        'app.docs_tasks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TasksUsers') ? [] : ['className' => 'App\Model\Table\TasksUsersTable'];
        $this->TasksUsers = TableRegistry::get('TasksUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TasksUsers);

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
