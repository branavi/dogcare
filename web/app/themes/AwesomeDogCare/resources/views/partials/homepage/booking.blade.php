@if( get_row_layout() == 'booking_section' )
    @php 
        $booking_sec1 = get_sub_field('booking_sec1');
        $booking_sec2 = get_sub_field('booking_sec2');
        $bg_color_sec1 = get_sub_field('bg_color_sec1');
        $bg_color_sec2 = get_sub_field('bg_color_sec2');
        $booking_url1 = get_sub_field('booking_url1');
        $booking_url2 = get_sub_field('booking_url2');
    @endphp 
<div class = "booking text-white">
    <div class="row d-flex align-content-center text-white">
            <a href="{!! $booking_url1 !!}"><div class = "col-6 book-sec1 text-center" style="background-color: {!! $bg_color_sec1 !!}">
            <span class="far fa-calendar-check"></span>{!! $booking_sec1 !!}</a>
            </div>

            <a href="{!! $booking_url1 !!}"><div class = "col-6 book-sec2 text-center" style="background-color: {!! $bg_color_sec2 !!}">
            {!! $booking_sec2 !!}</a>
            </div>
    </div>
</div>
@endif