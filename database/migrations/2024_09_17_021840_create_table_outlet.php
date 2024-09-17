<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOutlet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outlet', function (Blueprint $table) {
            $table->id();
            $table->integer('phis');
            $table->integer('presto');
            $table->integer('ppos');
            $table->char('nm_out',100);
            $table->char('lokasi',100);
            $table->char('nm_db',100);
            $table->integer('def')->default(0);
            $table->char('pass',50)->default('Probus@system2015');
            $table->char('user',50)->default('root');
            $table->char('server', 50);
            $table->char('server_lan');
            $table->integer('port')->default(3307);
            $table->char('jml_kamar',20);
            $table->decimal('outx',5.0)->default(0);
            $table->char('remote_by',50)->default('HAMACHI');
            $table->char('dblokasi',100)->default('REMOTE');
            $table->char('freport',50)->default('FREPORT');
            $table->mediumText('ket');
            $table->decimal('aktif',5.0)->default(1);
            $table->char('ppe_url',200);
            $table->char('hotel_cm',30);
            $table->char('hotel_be',30);
            $table->char('server_os',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outlet');
    }
}
