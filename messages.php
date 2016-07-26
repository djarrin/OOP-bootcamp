<?php

use Acme\Users\Person;
use Acme\Staff;
use Acme\Business;

$david = new Person('David Jarrin');

$jeff = new Person('Jeff Way');

$taylor = new Person('Taylor Ottwell');

$staff = new Staff([$taylor, $jeff]);

$laracasts = new Business($staff);

$laracasts->hire($david);

var_dump($laracasts->getStaffMembers());