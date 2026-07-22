<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('infos', function (Blueprint $table) {
            if (!Schema::hasColumn('infos', 'title')) {
                $table->string('title')->nullable()->after('id');
            }
            if (!Schema::hasColumn('infos', 'content')) {
                $table->text('content')->nullable()->after('title');
            }
            if (!Schema::hasColumn('infos', 'alamat')) {
                $table->string('alamat')->nullable()->after('content');
            }
            if (!Schema::hasColumn('infos', 'ig_link')) {
                $table->string('ig_link')->nullable()->after('alamat');
            }
            if (!Schema::hasColumn('infos', 'whatsapp')) {
                $table->string('whatsapp')->nullable()->after('ig_link');
            }
            if (!Schema::hasColumn('infos', 'image_path')) {
                $table->string('image_path')->nullable()->after('whatsapp');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('infos', function (Blueprint $table) {
            $table->dropColumn(['title','content','alamat','ig_link','whatsapp','image_path']);
        });
    }
};
