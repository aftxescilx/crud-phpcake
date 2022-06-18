<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaseTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaseTable Test Case
 */
class PaseTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PaseTable
     */
    protected $Pase;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Pase',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pase') ? [] : ['className' => PaseTable::class];
        $this->Pase = $this->getTableLocator()->get('Pase', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pase);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PaseTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
