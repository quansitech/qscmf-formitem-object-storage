<?php

namespace FormItem\ObjectStorage\Lib;

class File
{
    protected $url;
    protected $mime_type;
    protected $vendor_type;

    public function __construct($url, $mime_type, $vendor_type){
        $this->setUrl($url);
        $this->mime_type = $mime_type;
        $this->vendor_type = $vendor_type;
    }

    public function getUrl():string{
        return $this->url;
    }

    public function getMimeType():string{
        return $this->mime_type;
    }

    public function getVendorType():?string{
        return $this->vendor_type;
    }

    public function setUrl($url):self{
        $this->url = $url;
        return $this;
    }

}