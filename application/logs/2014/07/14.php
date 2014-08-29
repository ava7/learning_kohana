<?php defined('SYSPATH') OR die('No direct script access.'); ?>
2014-07-14 19:33:05 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_Auth::hash() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\login.php [ 24 ] in D:\xampp\htdocs\kohana\application\classes\Controller\login.php:24
2014-07-14 19:33:05 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(24): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\\xampp\\htdocs...', 24, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\login.php:24
2014-07-14 19:41:34 --- CRITICAL: ErrorException [ 1 ]: Class Orm contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (Kohana_Auth::_login, Kohana_Auth::password, Kohana_Auth::check_password) ~ APPPATH\classes\auth\orm.php [ 10 ] in file:line
2014-07-14 19:41:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 19:41:48 --- CRITICAL: ErrorException [ 2048 ]: Declaration of Orm::login() should be compatible with Kohana_Auth::login($username, $password, $remember = false) ~ APPPATH\classes\auth\orm.php [ 10 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\Core.php:511
2014-07-14 19:41:48 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\Core.php(511): Kohana_Core::error_handler(2048, 'Declaration of ...', 'D:\\xampp\\htdocs...', 10, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Auth_Orm')
#3 D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php(37): spl_autoload_call('Auth_Orm')
#4 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(8): Kohana_Auth::instance()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Login->before()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\Core.php:511
2014-07-14 19:42:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH\auth\classes\Kohana\Auth.php [ 37 ] in file:line
2014-07-14 19:42:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 19:42:34 --- CRITICAL: ErrorException [ 1 ]: Cannot instantiate abstract class Auth_Orm ~ MODPATH\auth\classes\Kohana\Auth.php [ 37 ] in file:line
2014-07-14 19:42:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 19:43:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH\auth\classes\Kohana\Auth.php [ 37 ] in file:line
2014-07-14 19:43:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 19:43:31 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_Auth::hash() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\login.php [ 24 ] in D:\xampp\htdocs\kohana\application\classes\Controller\login.php:24
2014-07-14 19:43:31 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(24): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\\xampp\\htdocs...', 24, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\login.php:24
2014-07-14 19:46:56 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-14 19:46:56 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(7): Kohana_ORM::factory('User')
#8 D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php(92): Auth_Orm->_login('ava@ava7.eu', 'parolanema', false)
#9 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(35): Kohana_Auth->login('ava@ava7.eu', 'parolanema')
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#13 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#16 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-14 19:47:33 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-14 19:47:33 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(7): Kohana_ORM::factory('User')
#8 D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php(92): Auth_Orm->_login('ava@ava7.eu', 'parolanema', false)
#9 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(35): Kohana_Auth->login('ava@ava7.eu', 'parolanema')
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#13 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#16 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-14 19:47:56 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-14 19:47:56 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#5 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(7): Kohana_ORM::factory('User')
#6 D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php(92): Auth_Orm->_login('ava@ava7.eu', 'parolanema', false)
#7 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(35): Kohana_Auth->login('ava@ava7.eu', 'parolanema')
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-14 19:48:20 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-14 19:48:20 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(7): Kohana_ORM::factory('User')
#8 D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php(92): Auth_Orm->_login('ava@ava7.eu', 'parolanema', false)
#9 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(35): Kohana_Auth->login('ava@ava7.eu', 'parolanema')
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#13 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#16 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-14 19:55:29 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-14 19:55:29 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(7): Kohana_ORM::factory('User')
#8 D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php(92): Auth_Orm->_login('ava@ava7.eu', 'parolanema', false)
#9 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(35): Kohana_Auth->login('ava@ava7.eu', 'parolanema')
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#13 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#16 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-14 20:13:52 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-14 20:13:52 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 D:\xampp\htdocs\kohana\application\classes\auth\orm.php(7): Kohana_ORM::factory('User')
#8 D:\xampp\htdocs\kohana\modules\auth\classes\Kohana\Auth.php(92): Auth_Orm->_login('ava@ava7.eu', 'parolanema', false)
#9 D:\xampp\htdocs\kohana\application\classes\Controller\login.php(35): Kohana_Auth->login('ava@ava7.eu', 'parolanema')
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#13 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#16 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-14 20:21:37 --- CRITICAL: ErrorException [ 1 ]: Class 'Team' not found ~ APPPATH\classes\Controller\team.php [ 7 ] in file:line
2014-07-14 20:21:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 20:21:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Team' not found ~ APPPATH\classes\Controller\team.php [ 7 ] in file:line
2014-07-14 20:21:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 20:21:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Team' not found ~ APPPATH\classes\Controller\team.php [ 7 ] in file:line
2014-07-14 20:21:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 20:21:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Team' not found ~ APPPATH\classes\Controller\team.php [ 7 ] in file:line
2014-07-14 20:21:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 20:21:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Team' not found ~ APPPATH\classes\Controller\team.php [ 7 ] in file:line
2014-07-14 20:21:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 20:22:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Team' not found ~ APPPATH\classes\Controller\team.php [ 7 ] in file:line
2014-07-14 20:22:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 20:22:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Team::find_all() ~ APPPATH\classes\Controller\team.php [ 8 ] in file:line
2014-07-14 20:22:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 20:22:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Team::all() ~ APPPATH\classes\Controller\team.php [ 8 ] in file:line
2014-07-14 20:22:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 20:22:36 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-14 20:22:36 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('teams')
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(7): Kohana_ORM->__construct()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-14 20:23:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Team::all() ~ APPPATH\classes\Controller\team.php [ 8 ] in file:line
2014-07-14 20:23:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 20:33:33 --- CRITICAL: ErrorException [ 1 ]: Class 'Team' not found ~ APPPATH\classes\Controller\team.php [ 28 ] in file:line
2014-07-14 20:33:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 20:33:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Team::save() ~ APPPATH\classes\Controller\team.php [ 30 ] in file:line
2014-07-14 20:33:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 20:34:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Team::save() ~ APPPATH\classes\Controller\team.php [ 30 ] in file:line
2014-07-14 20:34:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 20:36:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Team::save() ~ APPPATH\classes\Controller\team.php [ 30 ] in file:line
2014-07-14 20:36:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 20:36:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Team::save() ~ APPPATH\classes\Controller\team.php [ 30 ] in file:line
2014-07-14 20:36:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 20:36:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Team::save() ~ APPPATH\classes\Controller\team.php [ 30 ] in file:line
2014-07-14 20:36:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 20:37:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Team::save() ~ APPPATH\classes\Controller\team.php [ 30 ] in file:line
2014-07-14 20:37:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 20:39:42 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-14 20:39:42 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('team')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(28): Kohana_ORM::factory('Team')
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_store()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-14 20:39:56 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-14 20:39:56 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('team')
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(28): Kohana_ORM::factory('Team')
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_store()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-14 20:40:16 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-14 20:40:16 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('team')
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(28): Kohana_ORM::factory('Team')
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_store()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1668
2014-07-14 20:48:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: validation ~ APPPATH\classes\Controller\team.php [ 36 ] in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:36
2014-07-14 20:48:56 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 36, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_store()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:36
2014-07-14 21:01:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::id() ~ APPPATH\classes\Controller\team.php [ 50 ] in file:line
2014-07-14 21:01:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 21:01:35 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$id ~ APPPATH\classes\Controller\team.php [ 50 ] in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:50
2014-07-14 21:01:35 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 50, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:50
2014-07-14 21:01:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: team ~ APPPATH\views\team\edit.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\team\edit.php:3
2014-07-14 21:01:43 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\team\edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(51): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\team\edit.php:3
2014-07-14 21:01:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::id() ~ APPPATH\classes\Controller\team.php [ 50 ] in file:line
2014-07-14 21:01:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 21:02:00 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$id ~ APPPATH\classes\Controller\team.php [ 50 ] in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:50
2014-07-14 21:02:00 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 50, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:50
2014-07-14 21:02:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\team.php [ 52 ] in file:line
2014-07-14 21:02:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 21:02:24 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Team::action_edit(), called in D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\team.php [ 48 ] in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:48
2014-07-14 21:02:24 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(48): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\\xampp\\htdocs...', 48, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:48
2014-07-14 21:02:59 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Team::action_edit(), called in D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\team.php [ 48 ] in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:48
2014-07-14 21:02:59 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(48): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\\xampp\\htdocs...', 48, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:48
2014-07-14 21:03:00 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Team::action_edit(), called in D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\team.php [ 48 ] in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:48
2014-07-14 21:03:00 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(48): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\\xampp\\htdocs...', 48, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:48
2014-07-14 21:04:03 --- CRITICAL: Kohana_Exception [ 0 ]: The find property does not exist in the Model_Team class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 21:04:03 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('find')
#1 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(52): Kohana_ORM->__get('find')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 21:11:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::count_all() ~ APPPATH\classes\Controller\team.php [ 60 ] in file:line
2014-07-14 21:11:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 21:11:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\Controller\team.php [ 60 ] in file:line
2014-07-14 21:11:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 21:11:47 --- CRITICAL: ErrorException [ 8 ]: Object of class Model_Team could not be converted to int ~ APPPATH\classes\Controller\team.php [ 61 ] in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:61
2014-07-14 21:11:47 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(61): Kohana_Core::error_handler(8, 'Object of class...', 'D:\\xampp\\htdocs...', 61, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:61
2014-07-14 21:13:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Team::num_rows() ~ APPPATH\classes\Controller\team.php [ 61 ] in file:line
2014-07-14 21:13:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 21:14:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Team::num_rows() ~ APPPATH\classes\Controller\team.php [ 61 ] in file:line
2014-07-14 21:14:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 21:17:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\team.php [ 62 ] in file:line
2014-07-14 21:17:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 21:17:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\team.php [ 62 ] in file:line
2014-07-14 21:17:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 21:22:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$id' (T_VARIABLE) ~ APPPATH\classes\Controller\team.php [ 61 ] in file:line
2014-07-14 21:22:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 21:23:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\team.php [ 73 ] in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:73
2014-07-14 21:23:58 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 73, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:73
2014-07-14 21:26:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: success ~ APPPATH\views\team\edit.php [ 2 ] in D:\xampp\htdocs\kohana\application\views\team\edit.php:2
2014-07-14 21:26:58 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\team\edit.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(52): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\team\edit.php:2
2014-07-14 21:27:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: session ~ APPPATH\classes\Controller\team.php [ 68 ] in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:68
2014-07-14 21:27:56 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 68, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\team.php:68
2014-07-14 21:29:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: session ~ APPPATH\views\team\edit.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\team\edit.php:3
2014-07-14 21:29:19 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\team\edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(52): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\team\edit.php:3
2014-07-14 21:29:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: session ~ APPPATH\views\team\edit.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\team\edit.php:3
2014-07-14 21:29:22 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\team\edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(52): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\team\edit.php:3
2014-07-14 21:29:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: session ~ APPPATH\views\team\edit.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\team\edit.php:3
2014-07-14 21:29:41 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\team\edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(52): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\team\edit.php:3
2014-07-14 21:29:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: success ~ APPPATH\views\team\edit.php [ 4 ] in D:\xampp\htdocs\kohana\application\views\team\edit.php:4
2014-07-14 21:29:52 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\team\edit.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 4, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(52): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\team\edit.php:4
2014-07-14 21:30:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: session ~ APPPATH\views\team\edit.php [ 2 ] in D:\xampp\htdocs\kohana\application\views\team\edit.php:2
2014-07-14 21:30:00 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\team\edit.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(53): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\team\edit.php:2
2014-07-14 21:30:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: session ~ APPPATH\views\team\edit.php [ 2 ] in D:\xampp\htdocs\kohana\application\views\team\edit.php:2
2014-07-14 21:30:06 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\team\edit.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(53): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\team\edit.php:2
2014-07-14 21:30:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: session ~ APPPATH\views\team\edit.php [ 2 ] in D:\xampp\htdocs\kohana\application\views\team\edit.php:2
2014-07-14 21:30:14 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\team\edit.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(53): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\team\edit.php:2
2014-07-14 21:30:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: session ~ APPPATH\views\team\edit.php [ 2 ] in D:\xampp\htdocs\kohana\application\views\team\edit.php:2
2014-07-14 21:30:26 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\team\edit.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(54): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\team\edit.php:2
2014-07-14 21:30:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: session ~ APPPATH\views\team\edit.php [ 2 ] in D:\xampp\htdocs\kohana\application\views\team\edit.php:2
2014-07-14 21:30:38 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\team\edit.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(54): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\team\edit.php:2
2014-07-14 21:30:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: session ~ APPPATH\views\team\edit.php [ 2 ] in D:\xampp\htdocs\kohana\application\views\team\edit.php:2
2014-07-14 21:30:47 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\team\edit.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 2, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(54): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\team\edit.php:2
2014-07-14 21:30:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: session ~ APPPATH\views\team\edit.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\team\edit.php:3
2014-07-14 21:30:51 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\team\edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(54): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\team\edit.php:3
2014-07-14 21:32:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: success ~ APPPATH\views\team\edit.php [ 3 ] in D:\xampp\htdocs\kohana\application\views\team\edit.php:3
2014-07-14 21:32:26 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\team\edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\team.php(54): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Team->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\team\edit.php:3
2014-07-14 21:32:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH\classes\Controller\team.php [ 54 ] in file:line
2014-07-14 21:32:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 21:40:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function base_url() ~ APPPATH\views\team\edit.php [ 16 ] in file:line
2014-07-14 21:40:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 21:40:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method HTML::base_url() ~ APPPATH\views\team\edit.php [ 16 ] in file:line
2014-07-14 21:40:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 21:57:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Team::count() ~ APPPATH\classes\Controller\team.php [ 91 ] in file:line
2014-07-14 21:57:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 21:59:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH\classes\Controller\team.php [ 94 ] in file:line
2014-07-14 21:59:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:02:23 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Player' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-14 22:02:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:05:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Player' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-14 22:05:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:05:39 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0 FROM team AS player' at line 1 [ SELECT player.id AS id, player.name AS name, player.0 AS 0 FROM team AS player ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:05:39 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT player.i...', 'Model_Player', Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(8): Kohana_ORM->find_all()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:05:54 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0 FROM player AS player' at line 1 [ SELECT player.id AS id, player.name AS name, player.0 AS 0 FROM player AS player ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:05:54 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT player.i...', 'Model_Player', Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(8): Kohana_ORM->find_all()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:05:59 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0 FROM player AS player' at line 1 [ SELECT player.id AS id, player.name AS name, player.0 AS 0 FROM player AS player ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:05:59 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT player.i...', 'Model_Player', Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(8): Kohana_ORM->find_all()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:06:30 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0 FROM player AS player' at line 1 [ SELECT player.id AS id, player.name AS name, player.0 AS 0 FROM player AS player ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:06:30 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT player.i...', 'Model_Player', Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(8): Kohana_ORM->find_all()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:06:38 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0 FROM player AS player' at line 1 [ SELECT player.id AS id, player.name AS name, player.0 AS 0 FROM player AS player ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:06:38 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT player.i...', 'Model_Player', Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(8): Kohana_ORM->find_all()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:07:00 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0 FROM player AS player' at line 1 [ SELECT player.id AS id, player.name AS name, player.0 AS 0 FROM player AS player ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:07:00 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT player.i...', 'Model_Player', Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(8): Kohana_ORM->find_all()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:07:05 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0 FROM player AS player' at line 1 [ SELECT player.id AS id, player.name AS name, player.0 AS 0 FROM player AS player ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:07:05 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT player.i...', 'Model_Player', Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(8): Kohana_ORM->find_all()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:07:10 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0 FROM player AS player' at line 1 [ SELECT player.id AS id, player.name AS name, player.0 AS 0 FROM player AS player ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:07:10 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT player.i...', 'Model_Player', Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(8): Kohana_ORM->find_all()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:07:32 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\team\index.php [ 9 ] in D:\xampp\htdocs\kohana\application\views\team\index.php:9
2014-07-14 22:07:32 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\team\index.php(9): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\\xampp\\htdocs...', 9, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(10): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\team\index.php:9
2014-07-14 22:07:57 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\team\index.php [ 9 ] in D:\xampp\htdocs\kohana\application\views\team\index.php:9
2014-07-14 22:07:57 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\team\index.php(9): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\\xampp\\htdocs...', 9, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(11): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\team\index.php:9
2014-07-14 22:08:32 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0 FROM player AS player LIMIT 1' at line 1 [ SELECT player.id AS id, player.name AS name, player.0 AS 0 FROM player AS player LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:08:32 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT player.i...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(7): Kohana_ORM->find()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:08:36 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0 FROM player AS player LIMIT 1' at line 1 [ SELECT player.id AS id, player.name AS name, player.0 AS 0 FROM player AS player LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:08:36 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT player.i...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(7): Kohana_ORM->find()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:09:42 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0 FROM player AS player' at line 1 [ SELECT player.id AS id, player.name AS name, player.0 AS 0 FROM player AS player ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:09:42 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT player.i...', 'Model_Player', Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(8): Kohana_ORM->find_all()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:09:48 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0 FROM player AS player LIMIT 1' at line 1 [ SELECT player.id AS id, player.name AS name, player.0 AS 0 FROM player AS player LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:09:48 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT player.i...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(8): Kohana_ORM->find()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in D:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-14 22:11:52 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\team\index.php [ 9 ] in D:\xampp\htdocs\kohana\application\views\team\index.php:9
2014-07-14 22:11:52 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\team\index.php(9): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\\xampp\\htdocs...', 9, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(13): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\team\index.php:9
2014-07-14 22:12:52 --- CRITICAL: View_Exception [ 0 ]: The requested view player/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-14 22:12:52 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('player/index')
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('player/index', NULL)
#2 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(13): Kohana_View::factory('player/index')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-14 22:13:43 --- CRITICAL: View_Exception [ 0 ]: The requested view player/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-14 22:13:43 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('player/index')
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('player/index', NULL)
#2 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(13): Kohana_View::factory('player/index')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-14 22:15:21 --- CRITICAL: View_Exception [ 0 ]: The requested view player/create could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-14 22:15:21 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('player/create')
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('player/create', NULL)
#2 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(18): Kohana_View::factory('player/create')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-14 22:16:44 --- CRITICAL: View_Exception [ 0 ]: The requested view player/create could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-14 22:16:44 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('player/create')
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('player/create', NULL)
#2 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(18): Kohana_View::factory('player/create')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-14 22:19:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Teams' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-14 22:19:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:21:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: countries ~ APPPATH\views\player\create.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\player\create.php:8
2014-07-14 22:21:15 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\player\create.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(19): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\player\create.php:8
2014-07-14 22:21:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: countries ~ APPPATH\views\player\create.php [ 8 ] in D:\xampp\htdocs\kohana\application\views\player\create.php:8
2014-07-14 22:21:24 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\player\create.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 8, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(19): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\player\create.php:8
2014-07-14 22:22:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH), expecting ',' or ';' ~ APPPATH\views\player\create.php [ 12 ] in file:line
2014-07-14 22:22:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:35:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: country ~ APPPATH\classes\Controller\player.php [ 36 ] in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:36
2014-07-14 22:35:10 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(36): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\xampp\\htdocs...', 36, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_store()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:36
2014-07-14 22:35:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: country ~ APPPATH\classes\Controller\player.php [ 37 ] in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:37
2014-07-14 22:35:40 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\xampp\\htdocs...', 37, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_store()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:37
2014-07-14 22:35:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: country ~ APPPATH\classes\Controller\player.php [ 37 ] in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:37
2014-07-14 22:35:48 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\xampp\\htdocs...', 37, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_store()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:37
2014-07-14 22:36:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: country ~ APPPATH\classes\Controller\player.php [ 37 ] in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:37
2014-07-14 22:36:42 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\xampp\\htdocs...', 37, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_store()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:37
2014-07-14 22:36:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: country ~ APPPATH\classes\Controller\player.php [ 37 ] in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:37
2014-07-14 22:36:51 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\xampp\\htdocs...', 37, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_store()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:37
2014-07-14 22:38:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: country ~ APPPATH\classes\Controller\player.php [ 38 ] in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:38
2014-07-14 22:38:40 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(38): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\xampp\\htdocs...', 38, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_store()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:38
2014-07-14 22:41:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: team ~ APPPATH\views\player\create.php [ 10 ] in D:\xampp\htdocs\kohana\application\views\player\create.php:10
2014-07-14 22:41:29 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\player\create.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 10, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(19): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\player\create.php:10
2014-07-14 22:41:34 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, object given, called in D:\xampp\htdocs\kohana\application\views\player\create.php on line 10 and defined ~ SYSPATH\classes\Kohana\Form.php [ 252 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\Form.php:252
2014-07-14 22:41:34 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\Form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\\xampp\\htdocs...', 252, Array)
#1 D:\xampp\htdocs\kohana\application\views\player\create.php(10): Kohana_Form::select('team', Object(Database_Result_Cached))
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(19): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\Form.php:252
2014-07-14 22:42:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: team ~ APPPATH\views\player\create.php [ 10 ] in D:\xampp\htdocs\kohana\application\views\player\create.php:10
2014-07-14 22:42:04 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\player\create.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 10, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(19): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\player\create.php:10
2014-07-14 22:42:11 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, object given, called in D:\xampp\htdocs\kohana\application\views\player\create.php on line 10 and defined ~ SYSPATH\classes\Kohana\Form.php [ 252 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\Form.php:252
2014-07-14 22:42:11 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\Form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\\xampp\\htdocs...', 252, Array)
#1 D:\xampp\htdocs\kohana\application\views\player\create.php(10): Kohana_Form::select('team', Object(Database_Result_Cached), NULL)
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(19): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\Form.php:252
2014-07-14 22:42:46 --- CRITICAL: ErrorException [ 1 ]: Array callback has to contain indices 0 and 1 ~ APPPATH\classes\Controller\player.php [ 49 ] in file:line
2014-07-14 22:42:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:44:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: country ~ APPPATH\classes\Controller\player.php [ 37 ] in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:37
2014-07-14 22:44:32 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\xampp\\htdocs...', 37, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_store()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:37
2014-07-14 22:46:54 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ SYSPATH\classes\Kohana\HTML.php [ 71 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php:71
2014-07-14 22:46:54 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php(71): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\\xampp\\htdocs...', 71, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php(338): Kohana_HTML::chars(Object(Database_Result_Cached))
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Form.php(340): Kohana_HTML::attributes(Array)
#3 D:\xampp\htdocs\kohana\application\views\player\create.php(11): Kohana_Form::select(Object(Database_Result_Cached))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#8 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(19): Kohana_Response->body(Object(View))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_create()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#12 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\HTML.php:71
2014-07-14 22:47:08 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, object given, called in D:\xampp\htdocs\kohana\application\views\player\create.php on line 11 and defined ~ SYSPATH\classes\Kohana\Form.php [ 252 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\Form.php:252
2014-07-14 22:47:08 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\Form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\\xampp\\htdocs...', 252, Array)
#1 D:\xampp\htdocs\kohana\application\views\player\create.php(11): Kohana_Form::select('teams', Object(Database_Result_Cached), false)
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(19): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\Form.php:252
2014-07-14 22:47:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function to_array() ~ APPPATH\classes\Controller\player.php [ 19 ] in file:line
2014-07-14 22:47:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:48:09 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\player.php [ 19 ] in file:line
2014-07-14 22:48:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:48:10 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\player.php [ 19 ] in file:line
2014-07-14 22:48:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:51:27 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_Player class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-07-14 22:51:27 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('country', 'van persie')
#1 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(39): Kohana_ORM->__set('country', 'van persie')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_store()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-07-14 22:51:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Playewr' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-14 22:51:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:51:44 --- CRITICAL: Kohana_Exception [ 0 ]: The id_team property does not exist in the Model_Player class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-07-14 22:51:44 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('id_team', '12')
#1 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(40): Kohana_ORM->__set('id_team', '12')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_store()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-07-14 22:52:04 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_Player class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 22:52:04 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('country')
#1 D:\xampp\htdocs\kohana\application\views\player\index.php(8): Kohana_ORM->__get('country')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(13): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 22:52:31 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_Player class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 22:52:31 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('country')
#1 D:\xampp\htdocs\kohana\application\views\player\index.php(8): Kohana_ORM->__get('country')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(13): Kohana_Response->body(Object(View))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 22:52:59 --- CRITICAL: View_Exception [ 0 ]: The requested view player/edit could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-14 22:52:59 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('player/edit')
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('player/edit', NULL)
#2 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(61): Kohana_View::factory('player/edit')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-14 22:53:14 --- CRITICAL: View_Exception [ 0 ]: The requested view player/edit could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-14 22:53:14 --- DEBUG: #0 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('player/edit')
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('player/edit', NULL)
#2 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(61): Kohana_View::factory('player/edit')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2014-07-14 22:53:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: team ~ APPPATH\views\player\edit.php [ 5 ] in D:\xampp\htdocs\kohana\application\views\player\edit.php:5
2014-07-14 22:53:53 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\player\edit.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 5, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(61): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\player\edit.php:5
2014-07-14 22:54:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: teams ~ APPPATH\views\player\edit.php [ 11 ] in D:\xampp\htdocs\kohana\application\views\player\edit.php:11
2014-07-14 22:54:15 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\player\edit.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 11, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(61): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\player\edit.php:11
2014-07-14 23:02:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\player.php [ 15 ] in file:line
2014-07-14 23:02:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 23:02:45 --- CRITICAL: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH\orm\classes\Kohana\ORM.php [ 346 ] in file:line
2014-07-14 23:02:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', 'D:\\xampp\\htdocs...', 346, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(346): array_merge(Array, 'team')
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(2)
#4 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(60): Kohana_ORM::factory('player', 2)
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-07-14 23:03:16 --- CRITICAL: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH\orm\classes\Kohana\ORM.php [ 346 ] in file:line
2014-07-14 23:03:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', 'D:\\xampp\\htdocs...', 346, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(346): array_merge(Array, 'team')
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(2)
#4 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(60): Kohana_ORM::factory('player', 2)
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-07-14 23:03:22 --- CRITICAL: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH\orm\classes\Kohana\ORM.php [ 346 ] in file:line
2014-07-14 23:03:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', 'D:\\xampp\\htdocs...', 346, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(346): array_merge(Array, 'team')
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(2)
#4 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(60): Kohana_ORM::factory('player', 2)
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-07-14 23:03:22 --- CRITICAL: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH\orm\classes\Kohana\ORM.php [ 346 ] in file:line
2014-07-14 23:03:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', 'D:\\xampp\\htdocs...', 346, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(346): array_merge(Array, 'team')
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(2)
#4 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(60): Kohana_ORM::factory('player', 2)
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-07-14 23:03:22 --- CRITICAL: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH\orm\classes\Kohana\ORM.php [ 346 ] in file:line
2014-07-14 23:03:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', 'D:\\xampp\\htdocs...', 346, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(346): array_merge(Array, 'team')
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(2)
#4 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(60): Kohana_ORM::factory('player', 2)
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-07-14 23:03:35 --- CRITICAL: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH\orm\classes\Kohana\ORM.php [ 346 ] in file:line
2014-07-14 23:03:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', 'D:\\xampp\\htdocs...', 346, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(346): array_merge(Array, 'team')
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(2)
#4 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(60): Kohana_ORM::factory('player', 2)
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-07-14 23:03:48 --- CRITICAL: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH\orm\classes\Kohana\ORM.php [ 346 ] in file:line
2014-07-14 23:03:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', 'D:\\xampp\\htdocs...', 346, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(346): array_merge(Array, 'team')
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(2)
#4 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(60): Kohana_ORM::factory('player', 2)
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-07-14 23:03:48 --- CRITICAL: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH\orm\classes\Kohana\ORM.php [ 346 ] in file:line
2014-07-14 23:03:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', 'D:\\xampp\\htdocs...', 346, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(346): array_merge(Array, 'team')
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(2)
#4 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(60): Kohana_ORM::factory('player', 2)
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-07-14 23:03:53 --- CRITICAL: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ MODPATH\orm\classes\Kohana\ORM.php [ 346 ] in file:line
2014-07-14 23:03:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', 'D:\\xampp\\htdocs...', 346, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(346): array_merge(Array, 'team')
#2 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(2)
#4 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(60): Kohana_ORM::factory('player', 2)
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-07-14 23:04:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: teams ~ APPPATH\views\player\edit.php [ 11 ] in D:\xampp\htdocs\kohana\application\views\player\edit.php:11
2014-07-14 23:04:23 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\views\player\edit.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\xampp\\htdocs...', 11, Array)
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('D:\\xampp\\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\\xampp\\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(61): Kohana_Response->body(Object(View))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#9 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\kohana\application\views\player\edit.php:11
2014-07-14 23:05:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_Team' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-14 23:05:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 23:05:58 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:61
2014-07-14 23:05:58 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(61): Kohana_ORM->find_all()
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:61
2014-07-14 23:07:21 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:61
2014-07-14 23:07:21 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(61): Kohana_ORM->find_all()
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:61
2014-07-14 23:07:29 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:61
2014-07-14 23:07:29 --- DEBUG: #0 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(61): Kohana_ORM->find()
#1 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in D:\xampp\htdocs\kohana\application\classes\Controller\player.php:61
2014-07-14 23:07:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Team::all() ~ APPPATH\classes\Controller\player.php [ 61 ] in file:line
2014-07-14 23:07:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 23:07:41 --- CRITICAL: Kohana_Exception [ 0 ]: The teams property does not exist in the Model_Player class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 23:07:41 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('teams')
#1 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(61): Kohana_ORM->__get('teams')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 23:07:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Model\player.php [ 16 ] in file:line
2014-07-14 23:07:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 23:08:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: team_id ~ MODPATH\orm\classes\Kohana\ORM.php [ 633 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:633
2014-07-14 23:08:02 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(633): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\xampp\\htdocs...', 633, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('team')
#2 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(61): Kohana_ORM->__get('team')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:633
2014-07-14 23:08:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: team_id ~ MODPATH\orm\classes\Kohana\ORM.php [ 633 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:633
2014-07-14 23:08:37 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(633): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\xampp\\htdocs...', 633, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('team')
#2 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(61): Kohana_ORM->__get('team')
#3 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:633
2014-07-14 23:09:32 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Team class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 23:09:32 --- DEBUG: #0 D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 D:\xampp\htdocs\kohana\application\classes\Controller\player.php(62): Kohana_ORM->__get('name')
#2 D:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Player->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#5 D:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603