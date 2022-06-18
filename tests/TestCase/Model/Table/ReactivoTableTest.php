<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReactivoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReactivoTable Test Case
 */
class ReactivoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReactivoTable
     */
    protected $Reactivo;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Reactivo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Reactivo') ? [] : ['className' => ReactivoTable::class];
        $this->Reactivo = $this->getTableLocator()->get('Reactivo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Reactivo);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ReactivoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
