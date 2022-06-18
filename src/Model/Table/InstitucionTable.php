<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Institucion Model
 *
 * @method \App\Model\Entity\Institucion newEmptyEntity()
 * @method \App\Model\Entity\Institucion newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Institucion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Institucion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Institucion findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Institucion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Institucion[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Institucion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Institucion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Institucion[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Institucion[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Institucion[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Institucion[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InstitucionTable extends Table
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

        $this->setTable('institucion');
        $this->setDisplayField('idInstitucion');
        $this->setPrimaryKey('idInstitucion');
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
            ->maxLength('nombre', 100)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('codigo')
            ->maxLength('codigo', 6)
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

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
            ->integer('idTipoInstitucion')
            ->requirePresence('idTipoInstitucion', 'create')
            ->notEmptyString('idTipoInstitucion');

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
