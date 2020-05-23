<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/14/2018
 * Time: 4:24 PM
 */?>
<div class="slider1-area">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">
            @foreach($sliders as $slider)
                <img src="{{url('uploads/sliders/'.$slider->image)}}" alt="slider" title="#slider-direction-{{$slider->id}}"/>

            @endforeach

        </div>
        @foreach($sliders as $slider)
            <div id="slider-direction-{{$slider->id}}" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-{{$slider->id}}">
                    <div class="title-container s-tb-c">
                        <h1 class="title1">{{$slider->title}}</h1>
                        <p>{{$slider->sub_title}}</p>
                        <div class="slider-btn-area">

                        </div>
                    </div>
                </div>
            </div>
            @endforeach


    </div>
</div>
