<?php

namespace App;

class MuteQuack implements QuackBehaviour
{

    public function quack()
    {
        return 'Silence!!';
    }
}
