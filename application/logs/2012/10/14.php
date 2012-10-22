<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-14 22:20:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-14 22:20:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-14 22:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-14 22:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-14 22:22:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: group/read/views/student/create ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-14 22:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: group/read/views/student/create ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-14 22:24:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\classes\controller\group.php [ 37 ]
2012-10-14 22:24:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\classes\controller\group.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-14 22:24:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-14 22:24:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-14 22:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-14 22:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-14 22:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL student/create was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-14 22:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL student/create was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\pm11.localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\pm11.localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\pm11.localhost\www\index.php(109): Kohana_Request->execute()
#3 {main}