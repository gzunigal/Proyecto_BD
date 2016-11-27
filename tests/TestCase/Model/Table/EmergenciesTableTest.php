<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmergenciesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmergenciesTable Test Case
 */
class EmergenciesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmergenciesTable
     */
    public $Emergencies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.emergencies',
        'app.users',
        'app.communes',
        'app.regions',
        'app.missions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Emergencies') ? [] : ['className' => 'App\Model\Table\EmergenciesTable'];
        $this->Emergencies = TableRegistry::get('Emergencies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Emergencies);

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
