<?php
require 'vendor/autoload.php';

use Acme\Users\Person;
use Acme\Staff;
use Acme\Business;

$andrew = new Person('Andrew');

$staff = new Staff([$andrew]);

$yaardvarks = new Business($staff);

$yaardvarks->hire(new Person('Jane Doe'));

var_dump($yaardvarks->getStaffMembers());
