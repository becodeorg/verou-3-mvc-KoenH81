<?php

declare(strict_types=1);

class Article
{
    public INT $id;
    public string $title;
    public ?string $description;
    public ?string $publishDate;

    public function __construct(INT $id, string $title, ?string $description, ?string $publishDate)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
    }

    public function formatPublishDate($format = 'DD-MM-YYYY')
    {
        // TODO: return the date in the required format
        
    }
}