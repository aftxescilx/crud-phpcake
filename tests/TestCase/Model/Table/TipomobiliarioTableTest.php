<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipomobiliarioTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipomobiliarioTable Test Case
 */
class TipomobiliarioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipomobiliarioTable
     */
    protected $Tipomobiliario;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipomobiliario',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipomobiliario') ? [] : ['className' => TipomobiliarioTable::class];
        $this->Tipomobiliario = $this->getTableLocator()->get('Tipomobiliario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipomobiliario);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipomobiliarioTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
