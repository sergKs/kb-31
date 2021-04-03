<?php


namespace App\Http\Controllers;


class SliderController extends Controller
{
    public function list()
    {
        return [
            [
                'image' => 'https://kingjouettoyscanblog.files.wordpress.com/2017/09/image-slider-2.jpg?w=820&h=312&crop=1'
            ],
            [
                'image' => 'https://kingjouettoyscanblog.files.wordpress.com/2017/09/image-slider-2.jpg?w=820&h=312&crop=2'
            ]
        ];
    }
}
