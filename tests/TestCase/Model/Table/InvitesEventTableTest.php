<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InvitesEventTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InvitesEventTable Test Case
 */
class InvitesEventTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InvitesEventTable
     */
    public $InvitesEvent;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.invites_event'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('InvitesEvent') ? [] : ['className' => 'App\Model\Table\InvitesEventTable'];
        $this->InvitesEvent = TableRegistry::get('InvitesEvent', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InvitesEvent);

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
