<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LivrosFixture
 */
class LivrosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'editora_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'categoria_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nome' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'assunto' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'autor' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'situacao_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cadastrado_por' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'modificado_por' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'editora_id' => ['type' => 'index', 'columns' => ['editora_id'], 'length' => []],
            'categoria_id' => ['type' => 'index', 'columns' => ['categoria_id'], 'length' => []],
            'situacao_id' => ['type' => 'index', 'columns' => ['situacao_id'], 'length' => []],
            'cadastrado_por' => ['type' => 'index', 'columns' => ['cadastrado_por'], 'length' => []],
            'modificado_por' => ['type' => 'index', 'columns' => ['modificado_por'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'livros_ibfk_5' => ['type' => 'foreign', 'columns' => ['modificado_por'], 'references' => ['usuarios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'livros_ibfk_4' => ['type' => 'foreign', 'columns' => ['cadastrado_por'], 'references' => ['usuarios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'livros_ibfk_3' => ['type' => 'foreign', 'columns' => ['situacao_id'], 'references' => ['situacoes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'livros_ibfk_2' => ['type' => 'foreign', 'columns' => ['categoria_id'], 'references' => ['categorias', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'livros_ibfk_1' => ['type' => 'foreign', 'columns' => ['editora_id'], 'references' => ['editoras', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'editora_id' => 1,
                'categoria_id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'assunto' => 'Lorem ipsum dolor sit amet',
                'autor' => 'Lorem ipsum dolor sit amet',
                'situacao_id' => 1,
                'cadastrado_por' => 1,
                'created' => '2022-09-30 11:40:25',
                'modificado_por' => 1,
                'modified' => '2022-09-30 11:40:25',
            ],
        ];
        parent::init();
    }
}
