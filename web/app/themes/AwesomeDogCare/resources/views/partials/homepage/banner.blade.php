<!--Banner Section Start -->
@if( get_row_layout() == 'banner_section' )
    @php 
        $banner_img = get_sub_field('banner_image');
        $bannerTitle = get_sub_field('banner_title');
    @endphp 

<div class="text-white banner-section" style="background-image: url({!! $banner_img !!})">
    <div class="container">
        <h1 class="display-3">{!! $bannerTitle !!}</h1>
   </div>
</div>
@endif
<!-- Banner Section End -->
