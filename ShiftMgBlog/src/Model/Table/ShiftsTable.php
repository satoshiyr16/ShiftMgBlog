<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Shifts Model
 *
 * @method \App\Model\Entity\Shift newEmptyEntity()
 * @method \App\Model\Entity\Shift newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Shift[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Shift get($primaryKey, $options = [])
 * @method \App\Model\Entity\Shift findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Shift patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Shift[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Shift|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shift saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shift[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Shift[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Shift[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Shift[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ShiftsTable extends Table
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

        $this->setTable('shifts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('company')
            ->maxLength('company', 100)
            ->requirePresence('company', 'create')
            ->notEmptyString('company');

        $validator
            ->integer('time')
            ->requirePresence('time', 'create')
            ->notEmptyString('time');

        $validator
            ->integer('subtle')
            ->requirePresence('subtle', 'create')
            ->notEmptyString('subtle');

        $validator
            ->integer('money')
            ->allowEmptyString('money');

        $validator
            ->integer('rest')
            ->allowEmptyString('rest');

        return $validator;
    }
}
