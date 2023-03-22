<?php

namespace App\Http\Controllers;

use App\Events\CounterUpdated;
use Illuminate\Support\Facades\Redis;

class CounterController extends Controller
{
    public static function increment(int $by = 1)
    {
        Redis::INCRBY('counter.count', $by);
        broadcast(new CounterUpdated)->toOthers();
    }

    public static function getCount()
    {
        return Redis::GET('counter.count') ?? 0;
    }
}
