<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/12/2018
 * Time: 8:34 AM
 */?>
@if(session()->has('msg'))
    <div class="alert alert-success">
        {{session()->get('msg')}}
    </div>

@endif
