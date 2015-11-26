#Class

A class that encapsulates assertions

#Installation

Simply launch ```composer require jlaso/assert:dev-master``` from terminal

#Usage

```php
use JLaso\Assert\Assert;

Assert::assertsIsAnEmail("This-is-not-an-email");  // throws an Exception
```