

# Tasks application
_________________________________

FEATURES
-------------------


 - Create/Update/Delete personal Tasks
 - Several Vue.js layouts

DEMO
-------------------


REQUIREMENTS
------------

 - PHP >=5.6.0
 
#### For development you need the following tools
 - [Node.js](https://nodejs.org/en/download/) and npm (For vue.js application you need to have node.js installed)
 - [Composer](https://getcomposer.org/download/)
 - [Postman](https://www.postman.com/downloads/) is optional but helpful tool to test your REST API

INSTALLATION
------------
 1. Clone the project
 1. Go to the project root folder
 1. And run `composer install` 
 1. If you want customize vue.js side, go to the `vuejs` folder 
 1. And run `npm install`

CONFIGURATION
-------------

### Database
1. Create database
2. Create `config/db.local.php` and return the following configuration array.

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=tasks',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
```

