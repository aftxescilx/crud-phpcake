<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reporte Model
 *
 * @method \App\Model\Entity\Reporte newEmptyEntity()
 * @method \App\Model\Entity\Reporte newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Reporte[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Reporte get($primaryKey, $options = [])
 * @method \App\Model\Entity\Reporte findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Reporte patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Reporte[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Reporte|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reporte saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reporte[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Reporte[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Reporte[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Reporte[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ReporteTable extends Table
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

        $this->setTable('reporte');
        $this->setDisplayField('idReporte');
        $this->setPrimaryKey('idReporte');
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
            ->integer('idCaso')
            ->requirePresence('idCaso', 'create')
            ->notEmptyString('idCaso');

        $validator
            ->dateTime('fechaEntrega')
            ->requirePresence('fechaEntrega', 'create')
            ->notEmptyDateTime('fechaEntrega');

        $validator
            ->integer('idEmpleadoEntrega')
            ->requirePresence('idEmpleadoEntrega', 'create')
            ->notEmptyString('idEmpleadoEntrega');

        $validator
            ->integer('idEmpleadoRecibe')
            ->requirePresence('idEmpleadoRecibe', 'create')
            ->notEmptyString('idEmpleadoRecibe');

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
