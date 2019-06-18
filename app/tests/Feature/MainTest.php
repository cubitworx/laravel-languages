<?php

namespace Tests\Feature;

use Cubitworx\Laravel\Languages\Model;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class MainTest extends TestCase {
	use DatabaseMigrations;

	/**
	 * A basic test example.
	 *
	 * @return void
	 */
	public function testLanguages() {
		$this->assertEquals(Model\Language::count(), 185);
	}

}
