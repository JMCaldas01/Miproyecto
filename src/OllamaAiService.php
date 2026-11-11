<?php

namespace App;

use ArdaGnsrn\Ollama\Ollama;

class OllamaAiService implements AIServiceInterface
{
    protected $client;

    public function __construct()
    {
        $this->client = Ollama::client();
    }

    public function getResponse(string $question): string
    {
        try {
            $result = $this->client->chat()->create([
                'model' => 'deepseek-r1:1.5b',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => 'Experto en programación. Responde en idioma español y en menos de 20 palabras.'
                    ],
                    [
                        'role' => 'user',
                        'content' => $question
                    ],
                ],
            ]);

            return $result->message->content;
        } catch (\Throwable $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
}