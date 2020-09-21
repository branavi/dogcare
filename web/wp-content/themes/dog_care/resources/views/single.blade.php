@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
  <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
@endsection
