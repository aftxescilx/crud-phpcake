<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CertificadoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CertificadoTable Test Case
 */
class CertificadoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CertificadoTable
     */
    protected $Certificado;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Certificado',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Certificado') ? [] : ['className' => CertificadoTable::class];
        $this->Certificado = $this->getTableLocator()->get('Certificado', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Certificado);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CertificadoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
