<!-- Blog Section Start -->
@if( get_row_layout() == 'blog_section' )
@php
   $choose_posts = get_sub_field('choose_posts'); 
@endphp
@if( $choose_posts ):
        <div class="container blog-section" >
            <h2 class="text-center">Blog Section Title</h2>
            <div class="row">
            
                @foreach( $choose_posts as $post )
                @php 
                
                $permalink = get_permalink( $post->ID );
                $title = get_the_title( $post->ID );
                $iamge = get_the_post_thumbnail_url($post->ID,'Full');
                $exce = get_the_excerpt($post->ID);
                setup_postdata($post);
                @endphp
                <div class="col-md-4">
                    <div class="card">
                      <img src="{!! $iamge !!}" alt="" class="w-100">
                      <div class="card-body">
                            <h4 class="blog-detail">{!! $title !!}</h4>
                            <p>{!! $exce !!}</p>

                            <a href="{!! $permalink !!}" class="btn btn-primary">Read More</a>
                            </div>
                    </div>
                </div>
                @endforeach
                @php wp_reset_postdata() @endphp
            </div>
        </div>
    @endif
@endif
<!-- Blog Section End -->
