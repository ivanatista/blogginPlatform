<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Http\Controllers\AutoImportController;

class ArticleImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:articleImport';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import every non repeted article into the data base';

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
     * @return int
     */
    public function handle()
    {
        $execute = new AutoImportController();
        $execute->autoImport();
    }
}
