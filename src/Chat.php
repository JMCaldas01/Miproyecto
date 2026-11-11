<?php

namespace App;

class Chat
{
    public function __construct(
        private AIServiceInterface $aiService)
    {}

    public function start()
    {

        $this->welcome();

        while ($input = $this->prompt()) {
                        if ($this->exit($input)) {
                break;
            }

            $response = $this->aiService->getResponse($input);

            $this->output($response);
        }
    }

    private function welcome()
    {
        echo 'Welcome to the AI Chat! Type "exit" to quit.' . PHP_EOL;
    }

    private function prompt(): string
    {
        return trim(readline('> '));
    }

    private function exit(string $input): bool
    {
        return trim($input) === 'exit';
    }

    private function output($response)
    {
        echo $response . PHP_EOL;
    }

    public function getResponse($input)
    {
        return $this->aiService->getResponse($input);
    }
}
