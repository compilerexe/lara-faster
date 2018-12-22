<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class FastInit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fast:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Faster initial your project.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        /* Front-End */
        Storage::disk('fast')->makeDirectory('/resources/views/front-end');
        Storage::disk('fast')->put('/resources/views/front-end/home.blade.php', '');

        /* Back-End */
        Storage::disk('fast')->makeDirectory('/resources/views/back-end');
        Storage::disk('fast')->put('/resources/views/back-end/main.blade.php', '');
        Storage::disk('fast')->put('/resources/views/back-end/login.blade.php', '');

        /* Layouts */
        Storage::disk('fast')->makeDirectory('/resources/views/layouts');
        Storage::disk('fast')->makeDirectory('/resources/views/layouts/front-end');
        Storage::disk('fast')->makeDirectory('/resources/views/layouts/front-end/components');
        Storage::disk('fast')->put('/resources/views/layouts/front-end/app.blade.php', '');
        Storage::disk('fast')->put('/resources/views/layouts/front-end/components/navbar.blade.php', '');
        Storage::disk('fast')->put('/resources/views/layouts/front-end/components/html-head.blade.php', '');
        Storage::disk('fast')->put('/resources/views/layouts/front-end/components/scripts.blade.php', '');
        Storage::disk('fast')->makeDirectory('/resources/views/layouts/back-end');
        Storage::disk('fast')->makeDirectory('/resources/views/layouts/back-end/components');
        Storage::disk('fast')->put('/resources/views/layouts/back-end/app.blade.php', '');
    }
}
