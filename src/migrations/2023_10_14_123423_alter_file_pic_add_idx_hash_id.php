<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterFilePicAddIdxHashId extends Migration
{

    public function beforeCmmUp()
    {
    }

    public function beforeCmmDown()
    {
    }

    public function up()
    {
        Schema::table('file_pic', function (Blueprint $table) {
            if (! Schema::hasIndex('file_pic', ['hash_id'], 'btree')) {
                $table->index('hash_id', 'idx_hashId');
            }
        });
    }

    public function down()
    {

    }

    public function afterCmmUp()
    {
    }

    public function afterCmmDown()
    {
    }
}
