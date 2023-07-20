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

        // 新しい記事の作成
        $shift = $this->Shifts->patchEntity($shift, $shiftData);

        $shift->created = new FrozenTime();

        if ($this->Shifts->save($shift)) {

            $this->Flash->success(__('成功'));
            return $this->redirect(['action' => 'index']);
        } else {

            $this->Flash->error(__('失敗パオーン'));
        }
    }

    // ビューにデータを渡す
    $this->set('shift', $shift);
  }
}
