## Description
This package allows you to generate invoice number dynamically with designated pattern.
Current available pattern is:
* Roman Pattern (INV/20211004/MMXXI/X/IV/12345)
* Number Pattern (INV2021100412345)

Other patterns is under development ...

## Installation
To be updated later after deployed to packagist ...

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
