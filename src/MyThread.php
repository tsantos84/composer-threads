<?php

namespace Sample;

class MyThread extends \Thread
{
    public function run()
    {
        register_shutdown_function(function () {
            if (!empty(error_get_last())) {
                var_dump(error_get_last());
            }
        });

        require __DIR__ . '/../vendor/autoload.php';

        $obj = new MyClass(); // this class is not loaded by composer

        echo "This code should be executed normally";
    }
}
