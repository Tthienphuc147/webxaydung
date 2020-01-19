 <section class="main_slider_area slider_2">
    <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
        <ul>
            @foreach ($slide as $item)
                   <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="img/home-slider/slider-1.jpg"
                data-rotate="0" data-saveperformance="off" data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
        <img src="/public/image/slide/{{$item->image_url}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="{{$countSlide}}" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->

            </li>
            @endforeach
         
        </ul>
    </div>
</section>