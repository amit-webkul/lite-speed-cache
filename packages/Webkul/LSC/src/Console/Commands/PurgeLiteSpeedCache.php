<?php

namespace Webkul\LSC\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class PurgeLiteSpeedCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'litespeed:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear the LiteSpeed Cache completely via HTTP header and file deletion';

    /**
     * Execute the console command.
     * 
     * @return void
     */
    public function handle()
    {
        $url = config('app.url');

        try {
            Http::withHeaders([
                'X-LiteSpeed-Purge' => '*',
            ])->get($url);

            $this->info("✅ LiteSpeed public cache purged via header!");
        } catch (\Throwable $e) {
            $this->error("❌ Could not purge via HTTP header: " . $e->getMessage());
        }

        $privPath = '/usr/local/lsws/cachedata/priv';

        $files = File::directories($privPath);
        $files = array_merge($files, File::files($privPath));

        foreach ($files as $item) {
            File::deleteDirectory($item);
            File::delete($item);
        }

        $this->info("✅ LiteSpeed Cache fully cleared!");
    }
}
