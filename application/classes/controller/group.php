<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Group extends Controller {

	public function action_index()
	{
        $groups = ORM::factory('group')->find_all();
        $view = View::factory('group/list');
        $view->groups123 = $groups;
        $this->response->body($view);
	}

    public function action_create()
    {
        if ($this->request->method() == 'POST'){
            $group = ORM::factory('group');
            $group->name = $this->request->post('name');
            $group->save();
            $this->request->redirect('/group/read/'.$group->id);
        } else {
            $view = View::factory('group/create');
            $this->response->body($view);
        }
    }

    public function action_read()
    {

        $group_id = $this->request->param('id');
        $group = ORM::factory('group', $group_id);
        $session = Session::instance();
        $session->set('group_id',$group_id);
        $stud_id=$session->get('stud_id');
        echo 'Группа '.$group->name.'</br>';
        $s=ORM::factory('student',$stud_id);
        if($s->is_admin!=0){
            echo '<a href="/group/delete/'.$group->id.'">Удалить группу</a>';
            echo '<br>';
            echo '<a href="/group/update/'.$group->id.'">Изменить группу</a>';
            echo '<br>';
        }
        $students = ORM::factory('student')->find_all();
        foreach ($students as $student){

            if($student->group_id == $group_id){
            echo '<a href="/student/read/'.$student->id.'">'.$student->name.'</a>';
            echo '<br>';
            }
        }
        if($s->is_admin!=0){
        echo '<a href="/student/create">Добавить студента</a>';
        }
        echo '<a href="/group/index/">Список групп</a>';
        if($stud_id==NULL){
            echo '<br>';
            echo '<a href="/security/login/">Войти</a>';
        }
        echo '<br>';

    }

    public function action_update()
    {
        $group_id = $this->request->param('id');

        $group = ORM::factory('group',$group_id);
        echo 'Группа'.$group->name.'<br>';

        if($this->request->method() == 'POST'){
            $name=$this->request->post('name');
            $group->name=$name;
            $group->save();
           $this->request->redirect('/group/read/'.$group->id);
        }
        else{
            $view = View::factory('group/update');
            $view->group_id = $group_id;
            $this->response->body($view);
        }


    }

    public function action_delete()
    {
        $group_id = $this->request->param('id');
        $group = ORM::factory('group', $group_id);
        $group->delete();
        $this->request->redirect('/group');
    }


} // End Welcome
