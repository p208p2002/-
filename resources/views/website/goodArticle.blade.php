@extends('website.layouts.main')
@section('title', '最新消息')
@section('container')

    <div>
    <div class="row">
        <div class="col"></div>
        <div class="col-10 cover">
            <img src={{ url('/website/img/defaule_post.jpg') }} max-width="100%" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col"></div>
    </div>
    <!-- title -->
    <h1 class="text-center">Simpler On-the-Go Publishing: Background Media Uploading</h1>
    <div class="row">
        <div class="col"></div>
        <!-- context -->
        <div class="col-9">
            <p>Add an image to a post or page, or ten images, or a hundred — you no longer have to wait around in the editor while your media uploads.</p>
        </div>
        <div class="col"></div>
    </div>
    <!-- context info -->
    <div class="row">
        <div class="col"></div>
        <div class="col-9">
            <p class="text-secondary">poster at 2017-09-18</p>
        </div>
        <div class="col"></div>
    </div>

    </div>
    <hr>

    <div class="row">
        <div class="col-2">分類</div>
        <div class="col">

            <hr>
            <!--  -->
            <div class="row">
                <div class="col-4 cover-sm">
                    <img src={{ url('/website/img/defaule_post.jpg') }} max-width="100%" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col">
                    <h3>Simpler On-the-Go Publishing: Background Media Uploading</h3>
                    <p>Add an image to a post or page, or ten images, or a hundred — you no longer have to wait around in the editor while your media uploads.</p>
                    <p class="text-secondary">poster at 2017-09-18</p>
                </div>
            </div>
            <hr>

            <!--  -->
            <div class="row">
                <div class="col-4 cover-sm">
                    <img src={{ url('/website/img/defaule_post.jpg') }} max-width="100%" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col">
                    <h3>Simpler On-the-Go Publishing: Background Media Uploading</h3>
                    <p>Add an image to a post or page, or ten images, or a hundred — you no longer have to wait around in the editor while your media uploads.</p>
                    <p class="text-secondary">poster at 2017-09-18</p>
                </div>
            </div>
            <hr>
        </div>
    </div>
@endsection