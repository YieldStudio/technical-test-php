<?php

namespace YieldStudio\TechnicalTestPhp\Tests\Support;

use YieldStudio\TechnicalTestPhp\Data;

class AuthorData extends Data {

    #[Groups('public'), MapOutputName('id')]
    public string $uuid;

    #[Groups('public')]
    public string $firstname;

    #[Groups('public')]
    public string $lastname;

    #[Groups('admin')]
    public string $phoneNumber;

}
