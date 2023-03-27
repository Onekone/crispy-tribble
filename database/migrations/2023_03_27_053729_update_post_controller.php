<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \TCG\Voyager\Models\DataType::query()->where('name','posts')->update(['controller'=> '\App\Http\Controllers\Admin\Voyager\PostController']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \TCG\Voyager\Models\DataType::query()->where('name','posts')->update(['controller'=> null]);
    }
};
