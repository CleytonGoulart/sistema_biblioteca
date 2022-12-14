<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TesteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TesteTable Test Case
 */
class TesteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TesteTable
     */
    protected $Teste;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Teste',
        'app.Livros',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Teste') ? [] : ['className' => TesteTable::class];
        $this->Teste = $this->getTableLocator()->get('Teste', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Teste);

        parent::tearDown();
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
