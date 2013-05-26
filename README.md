Payroll System
==============

under construction

Notes for Ryan:
---------------

Download and install all this:
+ [Git] (http://git-scm.com)
+ [GitHub for Windows] (http://github.com) (shortened to GH for the rest of this readme)
+ [CakePHP] (http://www.cakephp.org)
+ [WampServer] (http://www.wampserver.com/en/)

Configuration:
--------------

1. Unzip CakePHP to C:\cakephp (rename root folder)
	1.1 File hierarchy should look like this:
		C:\
		|	cakephp\
		|	|	app\
		|	|	lib\
		|	|	...
	1.2 [OPTIONAL] only lib\ folder is really necessary; all other files/folders can be deleted
2. *Left*-click on wampserver tray icon > Apache > httpd.conf
3. [IMPORTANT] Uncomment 'LoadModule rewrite_module modules/mod_rewrite.so' (just ctrl-f it), save, and resart wampserver 
4. clone repo to C:\wamp\www\ (NOT *username*/Documents/GitHub if using GH)
	4.1 directory should look like this:
		C:\
		|	wamp\
		|	|	www\
		|	|	|	payroll\
		|	|	|	|	app\
		|	|	|	|	...
	4.2 [IMPORTANT] check payroll\app\tmp\ folder if it contains the following folders. If it doesn't, manually add them:
		..\
		|	tmp\
		|	|	cache\
		|	|	|	models\
		|	|	|	persistent\
		|	|	|	views\
		|	|	logs\
		|	|	sessions\
		|	|	tests\
5. run WampServer (127.0.0.1 any browser), click 'payroll' under 'Your Projects'
