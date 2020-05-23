<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/14/2018
 * Time: 4:30 PM
 */?>
<footer>
    <div class="footer-area-top section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-footer">About Cafe</h3>
                        <div class="footer-about">
                            <p>@foreach($aboutus as $about)
                                 {{$about->description}}
                            @endforeach
                            </p>
                        </div>
                        <ul class="footer-social">
                            @foreach($socials as $social)
                                <li><a href="{{$social->link}}"><i class="{{$social->icon}}" aria-hidden="true"></i></a></li>
                                @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-footer">Opening Hours</h3>
                        <ul class="opening-schedule">
                            @foreach($times as $time)
                                <li>{{$time->dayname}}<span> {{$time->opentime}}am - {{$time->closetime}}pm</span></li>
                                @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <p>&copy; 2018 SpicyBite All Rights Reserved. &nbsp; Designed by<a  href="http://kawsahr.com/"></a>
    </div>
</footer>
