## Description
This package allows you to generate invoice number dynamically with designated pattern.
Current available pattern is:
* Roman Pattern (INV/20211004/MMXXI/X/IV/12345)
* Number Pattern (INV2021100412345)

Other patterns is under development ...

## Installation
1. Install via composer by running this code on command line inside Laravel project
    ```shell
    composer require thomzee/numbros
    ```
2. Add this line to your ```app.php``` file
    ```php
   'providers' => [
        . . .
       Thomzee\Numbros\NumbrosServiceProvider::class,
   ]
    ```
3. Add the facade as well in the same file
   ```php
   'aliases' => [
       . . .
       'Laramap' => Thomzee\Numbros\Facades\Numbros::class,
   ]
   ```
## Usage
#### Roman Pattern
```php
$numbros = new Numbros();
$numbros->generate('roman', 'inv', '12345');
```

#### Number Pattern
```php
$numbros = new Numbros();
$numbros->generate('number', 'inv', '12345', '');
```

#### generate()
This function contains 5 parameters
1. Type, should contain pattern type available above
2. Prefix, e.g.: INV, DSB, ORD, etc
3. Unique, must be a unique
4. Separator, can be '/', '-', '', etc to separate sections
5. Uppercase, determine end result characters case
