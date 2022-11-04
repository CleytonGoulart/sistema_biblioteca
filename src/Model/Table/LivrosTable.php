<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Livros Model
 *
 * @property \App\Model\Table\EditorasTable&\Cake\ORM\Association\BelongsTo $Editoras
 * @property \App\Model\Table\CategoriasTable&\Cake\ORM\Association\BelongsTo $Categorias
 * @property \App\Model\Table\SituacoesTable&\Cake\ORM\Association\BelongsTo $Situacoes
 *
 * @method \App\Model\Entity\Livro newEmptyEntity()
 * @method \App\Model\Entity\Livro newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Livro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Livro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Livro findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Livro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Livro[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Livro|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Livro saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Livro[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Livro[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Livro[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Livro[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LivrosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('livros');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Editoras', [
            'foreignKey' => 'editora_id',
        ]);
        $this->belongsTo('Categorias', [
            'foreignKey' => 'categoria_id',
        ]);
        $this->belongsTo('Situacoes', [
            'foreignKey' => 'situacao_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmptyString('nome');

        $validator
            ->scalar('assunto')
            ->maxLength('assunto', 255)
            ->allowEmptyString('assunto');

        $validator
            ->scalar('autor')
            ->maxLength('autor', 255)
            ->allowEmptyString('autor');

        $validator
            ->integer('cadastrado_por')
            ->allowEmptyString('cadastrado_por');

        $validator
            ->integer('modificado_por')
            ->allowEmptyString('modificado_por');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['editora_id'], 'Editoras'), ['errorField' => 'editora_id']);
        $rules->add($rules->existsIn(['categoria_id'], 'Categorias'), ['errorField' => 'categoria_id']);
        $rules->add($rules->existsIn(['situacao_id'], 'Situacoes'), ['errorField' => 'situacao_id']);

        return $rules;
    }
}
