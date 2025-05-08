<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
  public static function all(): array
  {
      return [
          [
              'id' => 1,
              'title' => 'director',
              'salary' => '$50,000'  
          ],
          [
              'id' => 2,
              'title' => 'Big Dawg',
              'salary' => '$500,000'
          ],
          [
              'id' => 3,
              'title' => 'Street Sweeper',
              'salary' => '$5,000,000'
          ]];
  }

  public static function find(int $id): array
  {
  
    return Arr::first(static::all(), fn($job) => $job['id'] == $id); 
  }


}