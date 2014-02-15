Enum
====

PHP abstract enum class

Works very similar to SplEnum. The only difference:

```php
// see example/index.php

// SplEnum
var_dump($month === Month::June);

// Enum
var_dump($month() === Month::June); // you must invoke the class

```

## TODO:

* strict parameter
* need for __invoke method?
