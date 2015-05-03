# EstonianPersonalCode
Library for validating Estonian Personal Code

Validates length, symbols and checksum of the input

Usage:

``` php
use EProjects\EstonianPersonalCode\PersonalCode;
use EProjects\EstonianPersonalCode\Validator;

$personalCode = new PersonalCode(35703150220);
if (Validator::isValid($personalCode)) {
    echo 'Personal code is valid!';
} else {
    echo 'Invalid personal code specified.';
}
```
