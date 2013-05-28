Payroll System
==============

under construction

### Notes for Ryan:

#### Setup

Download and install all this:

- [Git] (http://git-scm.com)
- [GitHub for Windows] (http://github.com) (shortened to GH for the rest of this readme)
- [CakePHP] (http://www.cakephp.org)
- [WampServer] (http://www.wampserver.com/en/)

#### Configuration

1. Unzip CakePHP to `C:\cakephp\` (rename root folder)
	
	File hierarchy should look like this:

		- C:\
			- cakephp\
				- app\
				- lib\
				- ...

	__OPTIONAL__ only `lib\` folder is really necessary; all other files/folders can be deleted

2. *Left*-click on wampserver tray icon > Apache > httpd.conf
3. __IMPORTANT__ Uncomment `LoadModule rewrite_module modules/mod_rewrite.so` (just `CTRL+F` it), save, and resart wampserver 
4. clone repo to `C:\wamp\www\` (NOT `*username*/Documents/GitHub` if using GH)
	
	directory should look like this:
	
		- C:\
			- wamp\
				- www\
					- payroll\
						- app\
						- ...
	
	__IMPORTANT__ check `payroll\app\tmp\` folder if it contains the following folders. If it doesn't, manually add them:

		- ..\
			- tmp\
				- cache\
					- models\
					- persistent\
					- views\
				- logs\
				- sessions\
				- tests\

5. run WampServer (`127.0.0.1` any browser), click 'payroll' under 'Your Projects'

#### Database Syncronization

1. Open 'db model.mwb' from Dropbox in Workbench
2. Once you see the diagram, go to Database > Synchronize Model... (or `CTRL+SHIFT+Z`)
3. Follow instructions in the wizard