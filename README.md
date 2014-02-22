Enum
====

PHP abstract enum class

Works very similar to SplEnum. The only difference is if the constant values are non string types:

```php
// see example/index.php

// Month::June === (int)1

// SplEnum
var_dump($month == Month::June);

// Enum
var_dump($month() == Month::June); // you must invoke the class instance
var_dump($month() === Month::June); // also for strict type comparisons
```

If the constant values are strings you can directly compare with the class instance due to the magic "__toString" method:

```php
// SplEnum
var_dump($month == Month::June);

// Enum
var_dump($month == Month::June);
```


## TODO:

* strict parameter
* need for __invoke method?
