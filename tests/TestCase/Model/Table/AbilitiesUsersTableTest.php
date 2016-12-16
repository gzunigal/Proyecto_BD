<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AbilitiesUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AbilitiesUsersTable Test Case
 */
class AbilitiesUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AbilitiesUsersTable
     */
    public $AbilitiesUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.abilities_users',
        'app.abilities',
        'app.tasks',
        'app.missions',
        'app.emergencies',
        'app.users',
        'app.communes',
        'app.regions',
        'app.problems',
        'app.requests',
        'app.abilities_tasks',
        'app.docs',
        'app.docs_tasks',
        'app.tasks_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AbilitiesUsers') ? [] : ['className' => 'App\Model\Table\AbilitiesUsersTable'];
        $this->AbilitiesUsers = TableRegistry::get('AbilitiesUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AbilitiesUsers);

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
