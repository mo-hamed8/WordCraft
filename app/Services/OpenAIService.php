<?php namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class OpenAIService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('OPENAI_API_KEY'); 
    }

    public function getWordData($word)
    {
        try {
            $response = $this->client->post('https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'gpt-3.5-turbo',
                    'messages' => [
                        ['role' => 'user', 'content' => "Provide the definition, part of speech, and an example for the word '{$word}' in JSON format. The response should have the following fields: 'definition','part_of_speech','example'"]
                    ],
                    'max_tokens' => 100,
                ],
            ]);

            // Decode the JSON response from the API to a PHP associative array
            $data = json_decode($response->getBody(), true);

            // Extract the content as a JSON string and decode it into a PHP array
            $content = json_decode($data['choices'][0]['message']['content'], true);

            return $content; // Returns a PHP associative array
        } catch (RequestException $e) {
            // Log the error if needed: you can log it here for debugging purposes.
            // Log::error($e->getMessage());

            // Return null if there's an error in the request
            $wordData = [
                'definition' => 'NULL',
                'part_of_speech' => 'NULL',
                'example' => 'NULL'
            ];
            return $wordData;
        }
    }
    
}
?>