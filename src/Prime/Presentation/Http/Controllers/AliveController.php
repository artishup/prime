<?php

namespace Prime\Presentation\Http\Controllers;

use Shared\Presentation\Http\Controllers\Controller;

class AliveController extends Controller
{

    public function alive()
    {
        return response('Prime is Alive', 200);
    }
}
