<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empleadoinstitucion Model
 *
 * @method \App\Model\Entity\Empleadoinstitucion newEmptyEntity()
 * @method \App\Model\Entity\Empleadoinstitucion newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Empleadoinstitucion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empleadoinstitucion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Empleadoinstitucion findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Empleadoinstitucion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Empleadoinstitucion[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empleadoinstitucion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleadoinstitucion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleadoinstitucion[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleadoinstitucion[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleadoinstitucion[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleadoinstitucion[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmpleadoinstitucionTable extends Table
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

        $this->setTable('empleadoinstitucion');
        $this->setDisplayField('idEmpleadoInstitucion');
        $this->setPrimaryKey('idEmpleadoInstitucion');
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
            ->integer('idEmpleado')
            ->requirePresence('idEmpleado', 'create')
            ->notEmptyString('idEmpleado');

        $validator
            ->integer('idInstitucion')
            ->requirePresence('idInstitucion', 'create')
            ->notEmptyString('idInstitucion');

        $validator
            ->dateTime('fechaInicio')
            ->requirePresence('fechaInicio', 'create')
            ->notEmptyDateTime('fechaInicio');

        $validator
            ->dateTime('fechaFinal')
            ->allowEmptyDateTime('fechaFinal');

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
