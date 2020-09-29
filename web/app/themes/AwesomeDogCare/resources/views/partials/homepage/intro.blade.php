   <!-- @php 
        $title = get_sub_field('title');
        $desc = get_sub_field('description');
    @endphp
<div class="container text-center">                                
    <div class="row justify-content-md-center">
        <div class="col col-sm-12 col-md-9 col-lg-7">
        <h2>{!! $title !!}</h2>
        <p>{!! $desc!!}</p>   
        </div>         
    </div>    
</div> -->
<!-- Interoduction section -->
@if( get_row_layout() == 'information_section' )
    @php 
        $title = get_sub_field('title');
        $desc = get_sub_field('description');
    @endphp

    <div class="container text-center intro">
        <div class="row justify-content-md-center">
            <div class="col col-sm-12 col-md-9 col-lg-7">   
            <h2>{!! $title !!}</h2>
            <p>{!! $desc!!}</p>
            </div>
         </div>    
    </div>
    @if( have_rows('image_text_block') )
        <div class="image-section" >
            
                @php 
                $num_rows = 0; 
                $current_class = ''; 
                @endphp
                 @while( have_rows('image_text_block') ) 
                 @php the_row() @endphp
                @php 
                $current_class = "class_odd";  
                
                $image = get_sub_field('image');
                $imgtitle = get_sub_field('title');
                $description = get_sub_field('description');
                $button_link = get_sub_field('button_link');
                
                @endphp
                <div class="row ">
                    <div class="col-md-6 @if($num_rows % 2 == 0) {!! $current_class = "class_even";  !!} @else {!! $current_class = "class_odd order-md-12"; !!} @endif">
                        <img class="w-100" src="{!! $image !!}" />
                    </div>
                    <div class="col-md-6 text-center img-detail">
                        <h2>{!! $imgtitle !!}</h2>
                        <p> {!! $description !!}</p>
                        <a href="{!! $button_link !!}">READ MORE</a>
                    </div>
                </div>
                @php $num_rows++; @endphp
                @endwhile
            
        </div>
    @endif
    
@endif