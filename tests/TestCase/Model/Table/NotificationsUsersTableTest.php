<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotificationsUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotificationsUsersTable Test Case
 */
class NotificationsUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NotificationsUsersTable
     */
    public $NotificationsUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.notifications_users',
        'app.notifications',
        'app.users',
        'app.communes',
        'app.regions',
        'app.emergencies',
        'app.missions',
        'app.tasks',
        'app.problems',
        'app.requests',
        'app.abilities',
        'app.abilities_tasks',
        'app.abilities_users',
        'app.docs',
        'app.docs_tasks',
        'app.tasks_users',
        'app.emails',
        'app.messages',
        'app.messages_users',
        'app.phones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('NotificationsUsers') ? [] : ['className' => 'App\Model\Table\NotificationsUsersTable'];
        $this->NotificationsUsers = TableRegistry::get('NotificationsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NotificationsUsers);

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
