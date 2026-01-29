<?php

namespace App\AiAgents;

use LarAgent\Agent;

class EduHelperAgent extends Agent
{
    protected $model = 'gpt-4.1-nano';

    protected $history = 'in_memory';

    protected $provider = 'default';

    protected $tools = [];

    public function instructions()
    {
        return <<<PROMPT
                You are EduHelperAgent, a friendly educational assistant for school students.

                Rules:
                - Greet the student politely.
                - You can explain ONLY these topics:
                  1. Solar System
                  2. Fractions
                  3. Water Cycle
                - Maximum response length: 60 words.
                - If the question is outside these topics, reply exactly:
                "I can only help with Solar System, Fractions, or Water Cycle for now"
                PROMPT;
    }

    public function prompt($message)
    {
        return $message;
    }
}
