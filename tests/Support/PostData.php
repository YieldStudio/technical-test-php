<?php

namespace YieldStudio\TechnicalTestPhp\Tests\Support;


use YieldStudio\TechnicalTestPhp\Data;

class PostData extends Data {

    #[Groups('public'), MapOutputName('id')]
    public string $uuid;

    #[Groups('public')]
    public string $title;

    #[Groups('public')]
    public string $content;

    #[Groups('private')]
    public int $viewsCount;

    #[Groups('public')]
    public AuthorData $author;

}
