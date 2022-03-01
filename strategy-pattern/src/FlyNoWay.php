<?php

namespace App;

class FlyNoWay implements FlyBehaviour
{

    public function fly(): string
    {
        return 'I can\'t fly!';
    }
}
