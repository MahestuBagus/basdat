<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesans', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('tamu_id');
            // $table->foreign('tamu_id')->references('id')->on('tamus')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade'); 
            $table->unsignedBigInteger('kamar_id');
            $table->foreign('kamar_id')->references('id')->on('kamars')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('jumlah_kamar');
            $table->integer('lama_inap');
            $table->timestamps();
        });
        DB::unprepared('CREATE TRIGGER `reduce_stc` AFTER INSERT ON `pesans`
        FOR EACH ROW BEGIN
                       UPDATE kamars SET kamars.jumlah_kamar = 
                       kamars.jumlah_kamar - NEW.jumlah_kamar
                       WHERE kamars.id = NEW.kamar_id;
                       END');
        DB::unprepared('CREATE TRIGGER `restore_stc` AFTER DELETE ON `pesans`
        FOR EACH ROW BEGIN
                   UPDATE kamars SET kamars.jumlah_kamar = 
                   kamars.jumlah_kamar + OLD.jumlah_kamar
                   WHERE kamars.id = OLD.kamar_id;
                   END');
        DB::unprepared('CREATE TRIGGER `update_kamar` AFTER UPDATE ON `pesans`
                    FOR EACH ROW BEGIN
                    UPDATE kamars SET kamars.jumlah_kamar = (kamars.jumlah_kamars
                    + OLD.jumlah_kamar) - NEW.jumlah_kamar
                    WHERE kamars.id = OLD.kamar_id;
                    END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesans');
    }
}
