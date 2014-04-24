# SPICE

SPICE is a very small PHP framework build for people who can usually want to use MVC(Model-View-Controller) design pattern. This framework can perform better in LAMP(Linux-Apache-MySQL-PHP) stack. The goal of SPICE is to be as simple as possible to install and use. 

## Requirements

1. PHP 5.1 or Upper
2. MySQL 4 or Upper
3. Apache `mod_rewrite` enabled

## Download

Click ot [download](https://github.com/tanveer-noman/spice/archive/master.zip "Download SPICE") the latest version of SPICE. You can also FORK or close the GIT repository by running

> $ git clone https://github.com/tanveer-noman/spice.git

## Installation

To process user need to follow these steps: 

1. Download the zip file.
2. Extract it to your web root directory.
3. Now, go to phpmyadmin and create a database named `spice`; 
4. Now import the `sql/spice.sql` file to the database.
5. Go to system/config file. You need to set base url like `http://localhost/spice/` or what you might feet.
6. Now set the database host. Usually it's `localhost`, database name is `spice` or the name you have created, the user is the database user name and set the password. 

Your done!

Go to browser and visit http://localhost/spice/ or whatever you set the name.

## Documentation

SPICE is fully tracked by the MVC design pattern. Here is details how the pattern can work

**Model** represents the data structures and usually the business logic that retrieve, insert, and update the data in the database. 

**View** is the presentation layer. User can see that is being represented to them. We can call it as a page or web page.

**Controller** is the control section that can communicate with your business logic that is written in the model and sent the data to the presentation layer that user can view as a page. 

## Folder Structure

SPICE is very simple in nature. All application related files need to store in the `app` folder and all the system related files are set in `system`. Inside the application folder there are folders for all of the specific application entities.

<ul>
	<li>app
		<ul>
			<li>controllers</li>
			<li>helpers</li>
			<li>models</li>
			<li>views</li>
		</ul>
	</li>
	<li>public
		<ul>
			<li>css</li>
			<li>images</li>
			<li>js</li>
		</ul>
	</li>
	<li>system</li>
</ul>

To make it simple SPICE is free to make your own structure but it's important to use `BASE_URL` gobal variable to include files in the HTML. Like:

> <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/style.css" type="text/css" media="screen" />

## URL Structure

SPICE is very handy to create SEO friendly URLs and it's designed to force you to use that. So SPICE uses a segment-based approach:

> doamin.com/className/functionName/parameters

## Naming Conventions

SPICE is designed to encourage **Upper Camel Case** for example: 

> ThisIsAnExample

## Models

In model this very simple to load data and return it to controller

```php
// exmaple of a model class

class Address_model extends Model {

	//Get all address
	public function getAllAddress($id = null){
        if($id != null){
            $result = $this->query('SELECT * FROM `addresses` 
            	WHERE id ='.$this->escapeString($id));
            return $result;
        }
    }
}
```

Now in controller you need to use like this: 

```php
//example of a controller class

class Address extends Controller {

	function index() {
        $template = $this->loadView('view_address');
        $cities = $this->loadModel('Address_model');
        $data = $cities->getAllAddress();
        $template->set('addresses', $data);
        $template->render();
    }

}
```

## Controllers

SPICE is very handy to load model and view by calling these functions and can be able to take the parameter $name of the corresponding class:

* loadModel($name) - Load a model
* loadView($name) - Load a view
* loadHelper($name) - Load a helper
* redirect($location) - Redirect to a page without having to include the base 

For example: 

```php
//example of a controller class

class Address extends Controller {

	function index() {
        $template = $this->loadView('view_address');
        $cities = $this->loadModel('Address_model');
        $data = $cities->getAllAddress();
        $template->set('addresses', $data);
        $template->render();
    }

}
```

To redired SPICE also allowe

```php
//example to redirect
$this->redirect('className'); // auto load index function

//Or,

$this->redirect('className/functionName');
```

## Views

View is a web page or page that represent the data to the end user. It can hold HTML and PHP code 

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Address Book | Community Edition</title>
    <meta name="description" content="personal address book">
    <meta name="author" content="tanveer.noman@gmail.com">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/style.css" type="text/css" media="screen" />
</head>
```
