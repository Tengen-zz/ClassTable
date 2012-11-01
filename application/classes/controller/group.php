<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Group extends Controller_Site {

	public function action_index()
	{
        $session = Session::instance();
        $stud_id = $session->get('stud_id');
        $student= ORM::factory('student',$stud_id);
        $is_admin=$student->is_admin;
        $groups = ORM::factory('group')->find_all();
        $view = View::factory('group/list');
        $view->isadmin = $is_admin;
        $view->groups123 = $groups;
        //$this->response->body($view);
	    $this->template->body = $view;
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
            $this->template->body = $view;
        }
    }

    public function action_read()
    {
        $group_id = $this->request->param('id');
        $group = ORM::factory('group', $group_id);
        $session = Session::instance();
        $session->set('group_id',$group_id);
        $stud_id=$session->get('stud_id');

        $s=ORM::factory('student',$stud_id);
        $view = View::factory('group/studlist');
        $view->group = $group;
        $view->group_id= $group->id;
        $view->is_admin= $s->is_admin;
        $students = ORM::factory('student')->find_all();
        $view->students=$students;
        $view->stud_id=$stud_id;
        $this->template->body = $view;

        $view1 = View::factory('raspisanie/list');
        $this->template->body = $view1;

    }

    public function action_update()
    {
        $group_id = $this->request->param('id');

        $group = ORM::factory('group',$group_id);
        $view = View::factory('group/update');
        $view->group=$group;
        if($this->request->method() == 'POST'){
            $name=$this->request->post('name');
            $group->name=$name;
            $group->save();
           $this->request->redirect('/group/read/'.$group->id);
        }
        else{
            $view = View::factory('group/update');
            $view->group = $group;
            $view->group_id = $group_id;
            $this->template->body = $view;
        }
        $this->template->body = $view;

    }

    public function action_delete()
    {
        $group_id = $this->request->param('id');
        $group = ORM::factory('group', $group_id);
        $group->delete();
        $this->request->redirect('/group');
    }


} // End Welcome
