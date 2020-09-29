{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')
@if( have_rows('home_page_blogs') )
    @while ( have_rows('home_page_blogs') )  
    @php the_row() @endphp
        @include('partials.homepage.banner')
        @include('partials.homepage.booking')
        @include('partials.homepage.intro')
        @include('partials.homepage.blog')
        
    @endwhile
@endif
@endsection
