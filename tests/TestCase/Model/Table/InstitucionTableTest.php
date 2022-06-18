<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstitucionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstitucionTable Test Case
 */
class InstitucionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InstitucionTable
     */
    protected $Institucion;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Institucion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Institucion') ? [] : ['className' => InstitucionTable::class];
        $this->Institucion = $this->getTableLocator()->get('Institucion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Institucion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InstitucionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
