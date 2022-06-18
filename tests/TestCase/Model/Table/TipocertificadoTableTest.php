<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipocertificadoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipocertificadoTable Test Case
 */
class TipocertificadoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipocertificadoTable
     */
    protected $Tipocertificado;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipocertificado',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipocertificado') ? [] : ['className' => TipocertificadoTable::class];
        $this->Tipocertificado = $this->getTableLocator()->get('Tipocertificado', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipocertificado);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipocertificadoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
