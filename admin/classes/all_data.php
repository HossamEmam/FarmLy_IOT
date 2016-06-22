<?php
include("slider.php");
include("about_us.php");
include("our_service.php");
include("Client.php");
include("video.php");
include("testimonials.php");
include("notes.php");

class all_data
{
    public $slider ;
    public $about_us ;
    public $service ;
    public $Client ;
    public $video ;
    public $testimonials ;
    public $notes ;


    function __construct()
    {
        $this->slider=new slider();
        $this->about_us=new about_us();
        $this->service=new our_service();
        $this->Client=new Client();
        $this->video=new video();
        $this->testimonials=new testimonials();
        $this->notes=new notes();

    }
}
?>