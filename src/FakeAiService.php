<?php

namespace App;

class FakeAiService
{
    public function getResponse(string $question): string
    {   
        sleep(2); // Simulate processing time
        
        if (strpos($question, 'PHP') !== false) {
            return 'AI: ' . $question;
        } else {
            return 'AI: Solo puedo responder preguntas relacionadas con PHP.';
        }

    }
}