<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoinstitucionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoinstitucionTable Test Case
 */
class TipoinstitucionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoinstitucionTable
     */
    protected $Tipoinstitucion;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipoinstitucion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipoinstitucion') ? [] : ['className' => TipoinstitucionTable::class];
        $this->Tipoinstitucion = $this->getTableLocator()->get('Tipoinstitucion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipoinstitucion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipoinstitucionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
