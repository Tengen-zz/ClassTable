<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Security extends Controller {
    public function action_login(){
        if ($this->request->method() == 'POST'){

            $login=$this->request->post('name');

            $password=$this->request->post('password');
            $student = ORM::factory('student')->where('name','=',$login)->find();
            if($password == $student->password){
                $session = Session::instance();
                $session->set('stud_id',$student->id);
                $this->request->redirect('/group/read/'.$student->group_id);
            }
            else{
                $this->request->redirect('/security/login/');
            }

        } else {

            $view = View::factory('security/login');
            $this->response->body($view);
        }

    }
    public function action_exit(){
        $session = Session::instance();
        $stud_id = $session->get('stud_id');
        $student = ORM::factory('student',$stud_id);
        $group=$student->group_id;
        $session->delete('stud_id');
        $this->request->redirect('/group/read/'.$group);
    }
}

