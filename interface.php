<?php

//basic example, since dog implements Animal it must have a communicate method
//interface Animal {
//    public function communicate();
//
//}
//
//class Dog implements Animal {
//    public function communicate()
//    {
//        // TODO: Implement communicate() method.
//        return 'bark';
//    }
//}




//The idea with this code is that we make the code flexible enough that you can use switch different classes out because
//you have made sure both classes have common methods that are necessary to function.
interface Logger {
    public function execute($message);
}

class LogToFile implements Logger {
    public function execute($message)
    {
        var_dump('log the message to a file: ' . $message);
    }
}

class LogToFileDatabase implements Logger {
    public function execute($message)
    {
        var_dump('log the message to a database: ' . $message);
    }
}


class UserController
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $user = 'JohnDoe';

        $this->logger->execute($user);
    }
}
$controller = new UserController(new LogToFileDatabase);

$controller->show();