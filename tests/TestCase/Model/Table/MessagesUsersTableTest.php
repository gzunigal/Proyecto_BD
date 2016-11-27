<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MessagesUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MessagesUsersTable Test Case
 */
class MessagesUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MessagesUsersTable
     */
    public $MessagesUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.messages_users',
        'app.messages',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MessagesUsers') ? [] : ['className' => 'App\Model\Table\MessagesUsersTable'];
        $this->MessagesUsers = TableRegistry::get('MessagesUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MessagesUsers);

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
