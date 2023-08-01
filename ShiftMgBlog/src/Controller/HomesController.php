<?php
namespace App\Controller;
use Cake\I18n\FrozenTime;

class HomesController extends AppController{

  public function index(){
    $this->loadModel('Shifts');

    $shifts = $this->Shifts->find('all');

    $this->set(compact('shifts'));
  }

  public function posts(){
    $this->loadModel('Shifts');

    $shift = $this->Shifts->newEmptyEntity();

    if ($this->request->is('post')) {
        $shiftData = $this->request->getData();
        $shift = $this->Shifts->patchEntity($shift, $shiftData);

        $companies = $this->request->getData('company');
        $shift->company = $companies;
        $workedHours = $this->request->getData('worked_hours');
        $shift->time = intval($workedHours);
        $hourlyWages = $this->request->getData('hourly_wage');
        $shift->hourly_wage = intval($hourlyWages);
        $restHours = $this->request->getData('rest_hours');
        $shift->rest = intval($restHours);

        $totalMoney = ($workedHours - $restHours) * $hourlyWages;

        $shift->total_money = intval($totalMoney);

        $shift->created = new FrozenTime();

        if ($this->Shifts->save($shift)) {

            $this->Flash->success(__('成功'));
            return $this->redirect(['action' => 'index']);
        } else {
          $errors = $shift->getErrors();
          debug($errors);
            $this->Flash->error(__('失敗'));
        }
    }

    // ビューにデータを渡す
    $this->set('shift', $shift);
  }
}
