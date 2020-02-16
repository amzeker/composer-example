<?php

namespace amzeker\parser;

interface ParserInterface
{
    public function process(string $url, string $tag): array;
}

?>
