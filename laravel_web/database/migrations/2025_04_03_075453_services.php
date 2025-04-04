<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('title');
        });

        DB::table('services')->insert([
                ['url' => 'sluzba1', 'title' => 'Služba 1'],
                ['url' => 'sluzba2', 'title' => 'Služba 2'],
                ['url' => 'sluzba3', 'title' => 'Služba 3'],
                ['url' => 'sluzba4', 'title' => 'Služba 4'],
                ['url' => 'sluzba5', 'title' => 'Služba 5'],
                ['url' => 'sluzba6', 'title' => 'Služba 6'],
                ['url' => 'sluzba7', 'title' => 'Služba 7'],
                ['url' => 'sluzba8', 'title' => 'Služba 8'],
                ['url' => 'sluzba9', 'title' => 'Služba 9'],
                ['url' => 'sluzba10', 'title' => 'Služba 10'],
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
