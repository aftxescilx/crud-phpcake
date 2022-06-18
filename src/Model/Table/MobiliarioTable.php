<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mobiliario Model
 *
 * @method \App\Model\Entity\Mobiliario newEmptyEntity()
 * @method \App\Model\Entity\Mobiliario newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Mobiliario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mobiliario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mobiliario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Mobiliario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mobiliario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mobiliario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mobiliario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mobiliario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mobiliario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mobiliario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mobiliario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MobiliarioTable extends Table
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

        $this->setTable('mobiliario');
        $this->setDisplayField('idMobiliario');
        $this->setPrimaryKey('idMobiliario');
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
            ->maxLength('codigo', 5)
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

        $validator
            ->integer('idTipoMobiliario')
            ->requirePresence('idTipoMobiliario', 'create')
            ->notEmptyString('idTipoMobiliario');

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
