<?php

namespace Pikia\App\Console\Commands;

use Pikia\Kernel\Console\Command\Commands;

class Salute extends Commands
{
    /**
     * The key of the console command.
     *
     * @var string
     */
    // protected $key = 'say:hello {firstName : The first name} {lastName? : The last name} {--option}';
    protected $key = 'say:hellos {firstName : The first name}';

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
        // $firstName = $this->argument('firstName');
        //
        // $this->info("Hello ".$firstName." ");
        // $this->comment("Hello ".$firstName." ");
        // $this->question("Hello ".$firstName." ");
        // $this->error("Hello ".$firstName." ");
        // $age = $this->password("how old are you ?");
        // echo $age;
        // $this->progress();
        // $this->info("this info");
        // $this->comment("this comment");
        // $this->question("this question");
        // $this->error("this error");
        $name = $this-> ask('whats your name ? ');
        $nickname = $this-> ask('whats your nickname ? ');
        $age = $this-> ask('whats your age ? ');
        $sex = $this-> confirm('are you a women ? ');

        $title = ! $sex ? "Mr" : "Ms" ;
        //
        $this->info("hello $title $name $nickname you have $age years old");


    }
}
