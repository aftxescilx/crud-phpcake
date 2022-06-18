<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstrumentoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstrumentoTable Test Case
 */
class InstrumentoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InstrumentoTable
     */
    protected $Instrumento;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Instrumento',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Instrumento') ? [] : ['className' => InstrumentoTable::class];
        $this->Instrumento = $this->getTableLocator()->get('Instrumento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Instrumento);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InstrumentoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
