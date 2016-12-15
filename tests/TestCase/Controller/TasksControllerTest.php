<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TasksController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TasksController Test Case
 */
class TasksControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tasks',
        'app.missions',
        'app.emergencies',
        'app.users',
        'app.communes',
        'app.regions',
        'app.emails',
        'app.messages',
        'app.messages_users',
        'app.phones',
        'app.requests',
        'app.abilities',
        'app.abilities_tasks',
        'app.abilities_users',
        'app.notifications',
        'app.notifications_users',
        'app.tasks_users',
        'app.problems',
        'app.docs',
        'app.docs_tasks'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
