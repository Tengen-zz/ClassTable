<? defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: User
 * Date: 22.10.12
 * Time: 14:28
 * To change this template use File | Settings | File Templates.
 */
class Controller_Site extends Controller_Template
{
    public $template;

    public function before(){
        $this->template = View::factory('masterpage');
    }
}
