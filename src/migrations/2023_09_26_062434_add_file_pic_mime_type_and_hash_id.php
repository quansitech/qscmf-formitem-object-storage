<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFilePicMimeTypeAndHashId extends Migration
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
            $exists_mime_type = Schema::hasColumn('file_pic', 'mime_type');
            $exists_hash_id = Schema::hasColumn('file_pic', 'hash_id');

            if($exists_mime_type){
                $table->string('mime_type', 200)->default('')->change();
            }
            else{
                $table->string("mime_type", 200)->default("")->after("cate");
            }

            if ($exists_hash_id){
                $table->string("hash_id", 200)->default("")
                    ->comment("文件哈希值，除了空串，此值应该唯一")
                    ->after("cate")->change();
            }else{
                $table->string("hash_id", 200)->default("")
                    ->comment("文件哈希值，除了空串，此值应该唯一")
                    ->after("cate");
            }

        });
    }

    public function down()
    {
        Schema::table('file_pic', function (Blueprint $table) {
            $table->string('mime_type', 200)->default('')->change();
        });
    }

    public function afterCmmUp()
    {
    }

    public function afterCmmDown()
    {
    }
}
