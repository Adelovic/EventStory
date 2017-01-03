<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InvitesFriendTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InvitesFriendTable Test Case
 */
class InvitesFriendTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InvitesFriendTable
     */
    public $InvitesFriend;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.invites_friend'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('InvitesFriend') ? [] : ['className' => 'App\Model\Table\InvitesFriendTable'];
        $this->InvitesFriend = TableRegistry::get('InvitesFriend', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InvitesFriend);

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
