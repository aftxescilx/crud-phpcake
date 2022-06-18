<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipoempleado Model
 *
 * @method \App\Model\Entity\Tipoempleado newEmptyEntity()
 * @method \App\Model\Entity\Tipoempleado newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tipoempleado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tipoempleado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tipoempleado findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tipoempleado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tipoempleado[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tipoempleado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipoempleado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipoempleado[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tipoempleado[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tipoempleado[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tipoempleado[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TipoempleadoTable extends Table
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

        $this->setTable('tipoempleado');
        $this->setDisplayField('idTipoEmpleado');
        $this->setPrimaryKey('idTipoEmpleado');
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
            ->scalar('descripcion')
            ->maxLength('descripcion', 200)
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        $validator
            ->decimal('sueldoBase')
            ->requirePresence('sueldoBase', 'create')
            ->notEmptyString('sueldoBase');

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
