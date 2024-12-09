```php
$date = new DateTime('now');
$date->add(new DateInterval('PT1H'));
echo $date->format('Y-m-d H:i:s');
```