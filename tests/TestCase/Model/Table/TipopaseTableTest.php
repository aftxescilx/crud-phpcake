<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipopaseTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipopaseTable Test Case
 */
class TipopaseTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipopaseTable
     */
    protected $Tipopase;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipopase',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipopase') ? [] : ['className' => TipopaseTable::class];
        $this->Tipopase = $this->getTableLocator()->get('Tipopase', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipopase);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipopaseTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
