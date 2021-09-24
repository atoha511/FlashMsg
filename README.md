# Использование:

## 1. В начале index.php добавляем строчку
```php
session_start();
```

## 2. Выполням запрос

```php 
FlashMsg::set_message(string name, string message);
//Устанавливает переменную $_SESSION[name] = $message

FlashMsg::display_flash_message(string name);
//Возвращает значение переменной $_SESSION[name] и удаляет её.

```

