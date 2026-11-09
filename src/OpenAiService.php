<?php

namespace App;

use OpenAI;

class OpenAiService
{
    protected $client;

    public function __construct()
    {
        $this->client = OpenAI::client($_ENV['OPENAI_API_KEY']);
    }

    public function getResponse(string $question): string
    {  
            $result = $this->client->chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    [
                        'role' => 'user',
                        'content' => $question,
                    ],
                ],
            ]);
        return $result->choices[0]->message->content;
    }
}