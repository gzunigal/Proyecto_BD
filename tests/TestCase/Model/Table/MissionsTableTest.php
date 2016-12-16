<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MissionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MissionsTable Test Case
 */
class MissionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MissionsTable
     */
    public $Missions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.missions',
        'app.emergencies',
        'app.users',
        'app.communes',
        'app.regions',
        'app.tasks',
        'app.problems',
        'app.requests',
        'app.abilities',
        'app.abilities_tasks',
        'app.abilities_users',
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
        $config = TableRegistry::exists('Missions') ? [] : ['className' => 'App\Model\Table\MissionsTable'];
        $this->Missions = TableRegistry::get('Missions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Missions);

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
