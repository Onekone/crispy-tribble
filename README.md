
```bash
composer create-project laravel/laravel^9.0 laravel
composer require tcg/voyager
php artisan voyager:install --with-dummy
php artisan migrate
```

 * Развернуть Laravel (commit init)
 * Установить на него voyager (commit voyager), Сделать кастомный контроллер для новости (posts), наследованный от контроллера админ-панели по умолчанию + кастомный шаблон редактирования.
 * Особенность доработки в следующем: при сохранении типа ввода поля title  (Text), изменить формат отображения именно этого поля на странице редактирования в качестве Textarea. (commit edit title)
 * Логика работы механизма BREAD не должна пострадать, любые изменения/добавления полей в админ-панели должны применяться к пользовательскому интерфейсу, как это работает по умолчанию

1. Установить Laravel 9 и Voyager
2. Создать контроллер (controller), наследованный от BREAD контроллера, и шаблон (view), для 
