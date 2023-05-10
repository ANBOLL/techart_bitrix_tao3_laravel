<?php

Artisan::command('test', function () {
	$this->comment('This is a test!');
})->describe('Display test');
