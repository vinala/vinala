<?php

namespace Vinala\App\Console\Commands;

use Vinala\Kernel\Console\Command\Commands;

class Salute extends Commands
{
    /**
     * The key of the console command.
     *
     * @var string
     */
    protected $key = 'say:hello {firstName : The first name} {lastName? : The last name} {--option}';

    /**
     * The console command description.
     *
     * @var string
     */
    public $description = 'Say hello to people';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $firstName = $this->argument('firstName');
        $lastName = $this->argument('lastName');
        //
        $this->write("Hello ".$firstName." ".$lastName);
    }
}
