<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipoinstitucion Model
 *
 * @method \App\Model\Entity\Tipoinstitucion newEmptyEntity()
 * @method \App\Model\Entity\Tipoinstitucion newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tipoinstitucion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tipoinstitucion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tipoinstitucion findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tipoinstitucion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tipoinstitucion[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tipoinstitucion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipoinstitucion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipoinstitucion[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tipoinstitucion[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tipoinstitucion[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tipoinstitucion[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TipoinstitucionTable extends Table
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

        $this->setTable('tipoinstitucion');
        $this->setDisplayField('idTipoInstitucion');
        $this->setPrimaryKey('idTipoInstitucion');
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
