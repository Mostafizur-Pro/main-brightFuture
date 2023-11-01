@extends('allCourse')
@section('allCourse')



<div>
@include('components/allCourse/latestCourses')
@include('components/allCourse/autocad')
@include('components/allCourse/program')
@include('components/allCourse/graphic')
@include('components/allCourse/mep')
    <!-- <h1 class="text-5xl font-bold text-center">Coming Soon .....</h1> -->
</div>

@endsection