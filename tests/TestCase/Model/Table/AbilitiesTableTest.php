<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AbilitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AbilitiesTable Test Case
 */
class AbilitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AbilitiesTable
     */
    public $Abilities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.abilities',
        'app.tasks',
        'app.abilities_tasks',
        'app.users',
        'app.abilities_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Abilities') ? [] : ['className' => 'App\Model\Table\AbilitiesTable'];
        $this->Abilities = TableRegistry::get('Abilities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Abilities);

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
