<!-- Blog Section Start -->
@if( get_row_layout() == 'blog_section' )
@php
   $choose_posts = get_sub_field('choose_posts'); 
@endphp
@if( $choose_posts ):
        <div class="container pt-4 pb-4 blog-section" >
            <h2 class="pt-4 pb-4 text-center">Blog Section Title</h2>
            <div class="row">
            
                @foreach( $choose_posts as $post )
                @php 
                
                $permalink = get_permalink( $post->ID );
                $title = get_the_title( $post->ID );
                $iamge = get_the_post_thumbnail_url($post->ID,'Full');
                $exce = get_the_excerpt($post->ID);
                setup_postdata($post);
                @endphp
                <div class="col-md-3 ">
                    <div class="card">
                    <img src="{!! $iamge !!}" alt="" class="w-100">
                    
                    <h4><a href="{!! $permalink !!}">{!! $title !!}</a></h4>
                    <div class="short-desc">
                        {!! $exce !!}
                    </div>
                    <a href="{!! $permalink !!}">Read More</a>
                    </div>
                </div>
                @endforeach
                @php wp_reset_postdata() @endphp
            </div>
        </div>
    @endif
@endif
<!-- Blog Section End -->