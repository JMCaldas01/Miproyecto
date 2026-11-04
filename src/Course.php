<?php

namespace App;

class Course 
{
    public function __construct(
        protected string $title,
        protected string $subtitle,
        protected string $description,
        protected array $tags,
        protected CourseType $type = CourseType::FREE,
    )  {
        //
    }

     public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
    }

    public function __toString(): string
    {
        $html = "<h1>{$this->title} - {$this->type->label()}</h1>";
        $html .= "<h2>{$this->subtitle}</h2>";
        $html .= "<p>{$this->description}</p>";

        $html .= "<h3>Tags:</h3>";
        
        $html .= "<ul>";
        foreach ($this->tags as $tag) {
            $html .= "<li>{$tag}</li>";
        }
        
        $html .= "</ul>";
        return $html;
    }

    public function addTag(string $tag): void
    {
        if (in_array($tag, $this->tags)) {
            return; 
        }
        
        if (empty($tag)) {
            return; 
        }
        $this->tags[] = $tag;
    }

   
}

