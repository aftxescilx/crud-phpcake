<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empleado Model
 *
 * @method \App\Model\Entity\Empleado newEmptyEntity()
 * @method \App\Model\Entity\Empleado newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Empleado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empleado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Empleado findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Empleado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Empleado[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empleado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleado[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleado[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleado[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empleado[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmpleadoTable extends Table
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

        $this->setTable('empleado');
        $this->setDisplayField('idEmpleado');
        $this->setPrimaryKey('idEmpleado');
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
            ->scalar('numero')
            ->maxLength('numero', 5)
            ->requirePresence('numero', 'create')
            ->notEmptyString('numero');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 50)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('apellidoPaterno')
            ->maxLength('apellidoPaterno', 50)
            ->requirePresence('apellidoPaterno', 'create')
            ->notEmptyString('apellidoPaterno');

        $validator
            ->scalar('apellidoMaterno')
            ->maxLength('apellidoMaterno', 50)
            ->allowEmptyString('apellidoMaterno');

        $validator
            ->scalar('genero')
            ->maxLength('genero', 5)
            ->requirePresence('genero', 'create')
            ->notEmptyString('genero');

        $validator
            ->scalar('ciudad')
            ->maxLength('ciudad', 50)
            ->requirePresence('ciudad', 'create')
            ->notEmptyString('ciudad');

        $validator
            ->scalar('pais')
            ->maxLength('pais', 50)
            ->requirePresence('pais', 'create')
            ->notEmptyString('pais');

        $validator
            ->dateTime('fechaNacimiento')
            ->requirePresence('fechaNacimiento', 'create')
            ->notEmptyDateTime('fechaNacimiento');

        $validator
            ->scalar('rfc')
            ->maxLength('rfc', 13)
            ->requirePresence('rfc', 'create')
            ->notEmptyString('rfc');

        $validator
            ->scalar('dni')
            ->maxLength('dni', 13)
            ->requirePresence('dni', 'create')
            ->notEmptyString('dni');

        $validator
            ->integer('idTipoEmpleado')
            ->requirePresence('idTipoEmpleado', 'create')
            ->notEmptyString('idTipoEmpleado');

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
