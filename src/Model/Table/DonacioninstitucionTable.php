<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Donacioninstitucion Model
 *
 * @method \App\Model\Entity\Donacioninstitucion newEmptyEntity()
 * @method \App\Model\Entity\Donacioninstitucion newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Donacioninstitucion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Donacioninstitucion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Donacioninstitucion findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Donacioninstitucion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Donacioninstitucion[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Donacioninstitucion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Donacioninstitucion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Donacioninstitucion[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donacioninstitucion[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donacioninstitucion[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donacioninstitucion[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DonacioninstitucionTable extends Table
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

        $this->setTable('donacioninstitucion');
        $this->setDisplayField('idDonacionInstitucion');
        $this->setPrimaryKey('idDonacionInstitucion');
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
            ->integer('idDonacion')
            ->requirePresence('idDonacion', 'create')
            ->notEmptyString('idDonacion');

        $validator
            ->integer('idInstitucion')
            ->requirePresence('idInstitucion', 'create')
            ->notEmptyString('idInstitucion');

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
