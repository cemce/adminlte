<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComunidadesController;

Route::get('admin' , [ComunidadesController::class, 'index']);


?>
