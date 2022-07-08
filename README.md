# Agenda Online

## Routing

$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts/index', ['controller' => 'Posts', 'action' => 'index']);

```php
$router->add('{controller}/{action}');
```

```php
$router->add('{controller}/{id:\d+}/{action}');
```

```php
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);
```

## Views

```php
View::render('Home/index.php', [
    'name'    => 'Dave',
    'colours' => ['red', 'green', 'blue']
]);
```

```php
View::renderTemplate('Home/index.html', [
    'name'    => 'Dave',
    'colours' => ['red', 'green', 'blue']
]);
```

## Models

```php
$db = static::getDB();
```
