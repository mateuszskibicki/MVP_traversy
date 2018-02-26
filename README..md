This is an instruction how to use how to use these files.
## MVC OOP PHP - Traversy Media course on Udemy.
Pattern built with this course.

## MVC - Model View Controller
Model - database queries, logic, rules
View - (includes inside, header, footer, navbar etc) html rendering
Controller - inputs, commands to model or view

User -> controller -> model -> controller -> view -> user

.htaccess - redirecting - in main folder to public folder

###### Folders
### public - html, css, javascript
.htaccess - !!HAVE TO CHANGE  RewriteBase /shareposts/public!! the shareposts it's just the name of folder where you keep your app and there is no access to this folder, you can't check what is inside

Index in public - require_once bootstrap file from app where we have whole app and init new Core

### app - config, controllers, helpers, libraries, models, views and bootstrap
.htaccess - redirecting to indexes as default
config - all main info about db and urls

bootstrap - file where we require everything, first config, helpers, and all libraries

# libraries
/
Core - main place to 'redirect' and read urls
Core class
url format - controller/method/param
getUrl function - rtrim, explode and array
It takes url and make an array, if there is an controller in controllers folder, loads it. Than it takes second part of url and loads method(function) from inside this controller. Optional we can put params like posts/add/1 (1 at the end) as the ID of an current element.
call_user_func_array - callback with everything

  class Core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

By default this is looking for pages/index in view
/

/
Controller - class with two methods, model and view
model - 1 argument name of model and return data within the db
view - 2 arguments - URL and array with data to render dynamic content
/

/
Database - PDO connection with db, on __construct we are connecting with db
methods inside -
*query to send sql queries
*bind to binding data
*execute to execute PDO object
*resultSet / single / rowCount to fetch, fetchAll or count how many rows do we have in our db
/

#helpers
All useful functions like isLoggedIn() or redirect()

#controllers
Each file with first letter uppercase and class with the same name extends Controller class to connect with model and view
If we want to use models or views we have to create an object in __construct like $this->userModel = $this->model('User');
As default there should be an index method or redirecting
All methods are our controllers how type of date we would like to put on our website or create sessions, send requests to model etc

#models
<?php
    class Post{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }
All files uppercase first letter, if we would like to use db we have to create the connection in __construct
In methods(params) we work on PDO object with sql db and return data to the controller like :

        public function getPostByID($id){
            $this->db->query('SELECT * FROM posts WHERE id = :id');
            $this->db->bind(':id', $id);

            $row = $this->db->single();

            return $row;
        }
And it returns one post with id = $id, of course if exist.

##views
inc - all our includes (URLROOT - public folder and APPROOT is inside app)
folders like posts - all files we work with inside
for example : 
posts/add - controller/method - Posts/public function add(){}





