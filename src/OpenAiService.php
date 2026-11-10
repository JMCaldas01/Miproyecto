<?php

namespace App;

use OpenAI;

class OpenAiService implements AIServiceInterface
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
                        'role' => 'system',
                        'content' => <<<'EOT'
                            You are a helpful assistant that translates natural language into SQL queries.
                        EOT
                    ],
                    [
                        'role' => 'user',
                        'content' => $question
                    ],
                ],
            ]);
        return $result->choices[0]->message->content;
    }
}