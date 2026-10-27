<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void 
{ 
    Schema::table('dosens', function (Blueprint $table) { 
        // Menambah kolom no_hp (string 15), boleh kosong, diletakkan setelah email
        $table->string('no_hp', 15)->nullable()->after('email'); 
    }); 
} 

public function down(): void 
{ 
    Schema::table('dosens', function (Blueprint $table) { 
        // Menghapus kolom no_hp jika di-rollback
        $table->dropColumn('no_hp'); 
    }); 
}
};
