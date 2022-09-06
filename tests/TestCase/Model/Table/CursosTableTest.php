<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CursosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CursosTable Test Case
 */
class CursosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CursosTable
     */
    protected $Cursos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Cursos',
        'app.Situacoes',
        'app.AgendaCursos',
        'app.CursoDisciplinas',
        'app.Alunos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cursos') ? [] : ['className' => CursosTable::class];
        $this->Cursos = $this->getTableLocator()->get('Cursos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Cursos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}