<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoinstrumentoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoinstrumentoTable Test Case
 */
class TipoinstrumentoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoinstrumentoTable
     */
    protected $Tipoinstrumento;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipoinstrumento',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipoinstrumento') ? [] : ['className' => TipoinstrumentoTable::class];
        $this->Tipoinstrumento = $this->getTableLocator()->get('Tipoinstrumento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipoinstrumento);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipoinstrumentoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
