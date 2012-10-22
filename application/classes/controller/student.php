<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Student extends Controller {

    public function action_index()
    {
        $students = ORM::factory('student')->find_all();
        $view = View::factory('student/list');
        $view->students = $students;
        $this->response->body($view);
    }

    public function action_create()
    {
        if ($this->request->method() == 'POST'){

            $student = ORM::factory('student');
            $password = $this->request->post('password');
            $password1 = $this->request->post('password1');
            if($password1!= $password){
                $this->request->redirect('student/create');

            }
            $student->name = $this->request->post('name');
            $student->phone = $this->request->post('phone');
            $student->email = $this->request->post('email');
            $student->password=$password;
            $session = Session::instance();
            $group_id = $session->get('group_id');
            echo $group_id;
            $session->delete('group_id');
            $student->is_admin = 0;
           // $group_id = $this->request->param('id');
            $student->group_id = $group_id;
            $student->save();
            $this->request->redirect('/group/read/'.$group_id);
        } else {
            $view = View::factory('student/create');
            $this->response->body($view);
        }
    }

    public function action_read()
    {
        $session = Session::instance();
        $stud_id = $session->get('stud_id');
        $student_id = $this->request->param('id');
        $student = ORM::factory('student', $student_id);
        $student1= ORM::factory('student', $stud_id);
        echo 'Студент'.' '.$student->name.'</br>';
        echo 'Номер телефона'.' '.$student->phone.'<br>';
        echo 'Почта'.' '.$student->email.'<br>';
        if($student1->is_admin!=0){
            echo '<a href="/student/delete/'.$student->id.'">Удалить</a>';
            echo '<br>';
        }
        if($stud_id == $student->id or $student1->is_admin!=0){
        echo '<a href="/student/update/'.$student->id.'">Изменить</a>';
        echo '<br>';
        }
        echo '<a href="/group/read/'.$student->group_id.'">В группу</a>';
        echo '<br>';
        if($stud_id!=NUll){
            echo '<a href="/security/exit/">Выйти('.$student1->name.')</a>';
        }
    }

    public function action_update()
    {
        $student_id = $this->request->param('id');

        $student = ORM::factory('student',$student_id);

        if($this->request->method() == 'POST'){

            $password = $this->request->post('password');
            $password1 = $this->request->post('password1');
            if($password1!= $password){
                $this->request->redirect('student/update');

            }
            $name=$this->request->post('name');
            $phone=$this->request->post('phone');
            $email=$this->request->post('email');
            $student->id=$student_id;
            $student->name=$name;
            $student->phone=$phone;
            $student->email=$email;
            $student->password=$password;
            $student->save();
            $this->request->redirect('/student/read/'.$student->id);
        }
        else{
            $view = View::factory('student/update');
            $view->student_id = $student_id;
            $this->response->body($view);
        }


    }

    public function action_delete()
    {
        $student_id = $this->request->param('id');
        $student = ORM::factory('student', $student_id);
        $group_id=$student->group_id;
        $student->delete();
        $this->request->redirect('/group/read/'.$group_id);
    }


} // End Welcome
