<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVendorTypeToFilePic extends Migration
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
            $comment = "提供图片存储服务的媒介，如：aliyun_oss 阿里云；tengxun_cos 腾讯云； volcengine_tos 火山引擎, 空的话就是服务器存储";
            if (Schema::hasColumn('file_pic', 'vendor_type')) {
                $table->string("vendor_type", 50)->default("")
                    ->comment($comment)
                    ->after("cate")->change();
            } else {
                $table->string("vendor_type", 50)->default("")
                    ->comment($comment)
                    ->after("cate");
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
