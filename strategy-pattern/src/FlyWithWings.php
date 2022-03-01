<?php

namespace App;

class FlyWithWings implements FlyBehaviour
{

    public function fly(): string
    {
        return 'I\'m flying, watch me soar through the sky';
    }
}
