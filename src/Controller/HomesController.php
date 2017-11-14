<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Client;
use Cake\Event\Event;
use Cake\Http\Response;
use Cake\Mailer\Email;

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

class HomesController extends AppController
{
    // public function index()
    // {
    //     $students = $this->paginate($this->Students);

    //     $this->set(compact('students'));
    //     $this->set('_serialize', ['students']);
    // }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function index()
    {
        $this->viewBuilder()->layout('home');
    
    }

    /**
     * Edit method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $student = $this->Students->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $student = $this->Students->patchEntity($student, $this->request->getData());
            if ($this->Students->save($student)) {
                $this->Flash->success(__('The student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student could not be saved. Please, try again.'));
        }
        $this->set(compact('student'));
        $this->set('_serialize', ['student']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $student = $this->Students->get($id);
        if ($this->Students->delete($student)) {
            $this->Flash->success(__('The student has been deleted.'));
        } else {
            $this->Flash->error(__('The student could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }




    public function authenticateAndSaveFirstData(){
            

        $this->viewBuilder()->layout('');
        //FLOW:
        // step 1: Get post data, crawl Daa => get respone at sinhvien/kqhoctap
        // step 2: Check respone, if fail return 0
        // step 3: if not fail, save the point in the first time into database
        // extra: if radio value is 1 => set email to save is: massv.@gm.uit.edu.vn
        // radio value is 2 => email to save = email value

        $this->loadModel('Students');
        //Step1:
        $student = $this->request->data;
         if($student['mssv']== null || $student['password']== null){
            echo 0;
            exit;
        }

        //Step 2:
        $http = new Client([
          'host' => 'daa.uit.edu.vn',
          'scheme' => 'https',
          'ssl_verify_peer' => false,
          'ssl_verify_depth' => false,
          'ssl_verify_host' => false
        ]);

        $respone = $http->post('/sinhvien/kqhoctap',[ 'name' => $student['mssv'], 'pass' => $student['password'], 'form_build_id'=>'', 'form_id' => 'user_login_block' ]);
        $respone = $http->get('/sinhvien/kqhoctap')->body();

        if(strpos($respone, 'Truy cập bị từ chối') !== false){
            echo 0;
            exit;
        }
        else {

            // $new_student = $this->Students->newEntity();
            // $new_student->student_code = $student['mssv'];
            // $new_student->student_password = base64_encode($student['password']);
            // if($student['mail'] != null){
            //     $new_student->student_email = $student['mail'];
            // }
            // else $new_student->student_email = $student['mssv'].'@gm.uit.edu.vn';
            // $new_student->student_html_point = '';
            // if ($this->Students->save($new_student)) {

                echo 1;
        // }
    }


    }
}