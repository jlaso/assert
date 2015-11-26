<?php

include_once __DIR__ . "/../vendor/autoload.php";

use JLaso\Assert\Assert;

Assert::assertsIsAnEmail("my.email@example.com");

Assert::assertsIsAnEmail("This-is-not-an-email");  // throws an Exception