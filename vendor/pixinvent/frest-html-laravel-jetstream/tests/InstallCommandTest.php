<?php

namespace Pixinvent\Jetstrap\Tests;

use Pixinvent\Jetstrap\JetstrapFacade;

class InstallCommandTest extends TestCase
{
  /** @test */
  public function livewire_swapped()
  {
    // Run the make command
    $this->artisan('jetstream_frest:swap livewire')
      ->expectsOutput('Bootstrap scaffolding swapped for livewire successfully.')
      ->expectsOutput('Please execute the "npm install && npm run dev" command to build your assets.')
      ->assertExitCode(0);

    $this->basicTests();
    $this->basicLivewireTests();
  }

  /** @test */
  public function livewire_swapped_with_teams()
  {
    // Run the make command
    $this->artisan('jetstream_frest:swap livewire --teams')
      ->expectsOutput('Bootstrap scaffolding swapped for livewire successfully.')
      ->expectsOutput('Please execute the "npm install && npm run dev" command to build your assets.')
      ->assertExitCode(0);

    $this->basicTests();
    $this->basicLivewireTests();
    $this->livewireTeamTests();
  }
}
