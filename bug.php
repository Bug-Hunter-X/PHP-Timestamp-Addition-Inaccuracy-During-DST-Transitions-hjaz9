```php
$date = date('Y-m-d H:i:s');
$date = strtotime($date);
$newDate = date('Y-m-d H:i:s', $date + 3600);
echo $newDate;
```