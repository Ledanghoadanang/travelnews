@extends('layouts.frontend.master')

@section('feature_news_session')
@include('layouts.frontend.feature_news_session')
@stop

@section('index')
<div class="category_section mobile">
    @include('layouts.frontend.category_section_mobile')
</div>
<!-- Mobile News Section -->

<div class="category_section tablet">
    @include('layouts.frontend.category_section_tablet')
</div>
<!-- Tablet News Section -->

<div class="category_section gadget">
    @include('layouts.frontend.category_section_gaget')
</div>
<!-- Gadget News Section -->

<div class="category_section camera">
    @include('layouts.frontend.category_section_camera')
</div>
<!-- Camera News Section -->

<div class="category_section design">
    @include('layouts.frontend.category_section_design')
</div>
<!-- Design News Section -->
@stop

@section('video')
@include('layouts.frontend.video_session')
@stop
