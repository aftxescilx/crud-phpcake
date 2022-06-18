<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Instrumento Model
 *
 * @method \App\Model\Entity\Instrumento newEmptyEntity()
 * @method \App\Model\Entity\Instrumento newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Instrumento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Instrumento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Instrumento findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Instrumento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Instrumento[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Instrumento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Instrumento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Instrumento[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Instrumento[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Instrumento[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Instrumento[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InstrumentoTable extends Table
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

        $this->setTable('instrumento');
        $this->setDisplayField('idInstrumento');
        $this->setPrimaryKey('idInstrumento');
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
            ->scalar('codigo')
            ->maxLength('codigo', 6)
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

        $validator
            ->integer('idTipoInstrumento')
            ->requirePresence('idTipoInstrumento', 'create')
            ->notEmptyString('idTipoInstrumento');

        $validator
            ->integer('idDepartamento')
            ->requirePresence('idDepartamento', 'create')
            ->notEmptyString('idDepartamento');

        $validator
            ->scalar('estatus')
            ->allowEmptyString('estatus');

        $validator
            ->integer('idUsuarioCrea')
            ->allowEmptyString('idUsuarioCrea');

        $validator
            ->dateTime('fechaCrea')
            ->allowEmptyDateTime('fechaCrea');

        $validator
            ->integer('idUsuarioModifica')
            ->allowEmptyString('idUsuarioModifica');

        $validator
            ->dateTime('fechaModifica')
            ->allowEmptyDateTime('fechaModifica');

        return $validator;
    }
}
