<?php
namespace Admin\Http\Controllers;

use SleepingOwl\Admin\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Cache;

class Controller extends AdminController
{
    public function clear() {
        Cache::flush();
        return redirect('/admin')->with('success', 'Кеш чист');
    }
}