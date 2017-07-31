<?php

use Illuminate\Foundation\Inspiring;
use App\Quote;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('startergraphics', function () {
    $quotes = Quote::doesntHave('graphics')->orderBy('id', 'asc')->limit(20)->get();
	foreach ($quotes as $quote) {
	    $quote->makeBasicInstagram();
	}
})->describe('Create the basic instagram starter pack of graphics for every quote.');
