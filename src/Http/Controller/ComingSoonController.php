<?php

namespace Erikgreasy\LaravelComingSoon\Http\Controller;

class ComingSoonController
{
    public function __invoke()
    {
        return view('coming-soon::coming-soon');
    }
}
