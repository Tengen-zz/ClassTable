<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
        //Object Relational Mapping

        //create
//        $group = ORM::factory('group');
//        $group->name = 'pm-03';
//        $group->save();

//  update
//        $user = ORM::factory('group', 18);
//        if ($user->loaded()){
//        $user->name = 'asdasdasd';
//        $user->save();
//            echo $user->name;
//        } else {
//            echo "not found";
//        }

        //delete
        //$user->delete();


        $students = ORM::factory('student')->find_all();

           /* foreach($students as $student){
                echo  $student->id .'='. $student->name.'=';
                echo '<br>';
            }
           */


        //$this->response->body('hello, world!');
	}

    public function action_list()
    {
        echo "action_list!";
    }

    public function action_create()
    {
        echo "action_create";
    }


} // End Welcome
