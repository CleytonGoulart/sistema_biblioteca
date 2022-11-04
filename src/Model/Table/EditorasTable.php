<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Editoras Model
 *
 * @property \App\Model\Table\SituacoesTable&\Cake\ORM\Association\BelongsTo $Situacoes
 * @property \App\Model\Table\LivrosTable&\Cake\ORM\Association\HasMany $Livros
 *
 * @method \App\Model\Entity\Editora newEmptyEntity()
 * @method \App\Model\Entity\Editora newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Editora[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Editora get($primaryKey, $options = [])
 * @method \App\Model\Entity\Editora findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Editora patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Editora[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Editora|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Editora saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Editora[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Editora[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Editora[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Editora[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EditorasTable extends Table
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

        $this->setTable('editoras');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Situacoes', [
            'foreignKey' => 'situacao_id',
        ]);
        $this->hasMany('Livros', [
            'foreignKey' => 'editora_id',
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
        $rules->add($rules->existsIn(['situacao_id'], 'Situacoes'), ['errorField' => 'situacao_id']);

        return $rules;
    }
}
