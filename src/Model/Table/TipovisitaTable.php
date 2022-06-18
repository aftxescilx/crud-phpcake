<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipovisita Model
 *
 * @method \App\Model\Entity\Tipovisitum newEmptyEntity()
 * @method \App\Model\Entity\Tipovisitum newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tipovisitum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tipovisitum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tipovisitum findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tipovisitum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tipovisitum[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tipovisitum|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipovisitum saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipovisitum[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tipovisitum[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tipovisitum[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tipovisitum[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TipovisitaTable extends Table
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

        $this->setTable('tipovisita');
        $this->setDisplayField('idTipoVisita');
        $this->setPrimaryKey('idTipoVisita');
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
            ->scalar('nombre')
            ->maxLength('nombre', 50)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

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
