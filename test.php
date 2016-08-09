<?php

require 'src/Namespaced/Class1.php';

require 'src/Class1.php';

require 'src/Namespaced/Class2.php'; // error: PHP Fatal error:  Cannot use Class1 as Class1 because the name is already in use in ./src/Namespaced/Class2.php on line 5
