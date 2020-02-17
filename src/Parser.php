<?php

namespace amzeker\parser;

class Parser implements ParserInterface
{
    public function process(string $url, string $tag): array
    {
       $htmlpage = file_get_contents($url);
       
       if ($htmlpage === false ) {
           return ['Invalid URL'];
       }
       
       // Regular expression
       
       preg_match('/<' .$tag . '.*?>(.*?)<\/' . $tag . '>/a', $htmlpage, $strings);
       
       if (empty($strings[1])) {
           return ['There are no such tags on the page'];
       }
    }
    
    public function test()
    {
        // feature
    }
}

?>
