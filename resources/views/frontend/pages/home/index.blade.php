@extends('frontend.layout.layout')

@section('stylesheet')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    @vite(['resources/sass/frontend/home.scss'])
@show

@section('content')

    @include('frontend.pages.home.widgets.banner')
    @include('frontend.pages.home.widgets.courses')
    @include('frontend.pages.home.widgets.jobs')
    @include('frontend.pages.home.widgets.why-choose-us')


@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" integrity="sha512-rCjfoab9CVKOH/w/T6GbBxnAH5Azhy4+q1EXW5XEURefHbIkRbQ++ZR+GBClo3/d3q583X/gO4FKmOFuhkKrdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{--    <script src="{{ asset('assets/js/vendor/jarallax.min.js') }}"></script>--}}
    <script>
        $(function (){
            $('#home-banner-slide').owlCarousel({
                loop:true,
                margin:0,
                nav:false,
                dots:false,
                items:1,
                autoplay:true,
                autoplayTimeout:5000,
                autoplayHoverPause:false,
                animateOut: 'fadeOut'
            })
            $('#why-choose-slide').owlCarousel({
                loop:true,
                margin:0,
                nav:true,
                dots:false,
                autoplay: true,
                slideTransition: 'linear',
                autoplaySpeed: 6000,
                smartSpeed: 6000,
                center: true,
                responsive : {
                    0 : {
                        items:1
                    },
                    700 : {
                        items:1
                    },
                    991 : {
                        items:2
                    },
                    1200 : {
                        items:1
                    },
                    1366 : {
                        items:1
                    },
                    1600 : {
                        items:2
                    },
                }
            })
            if($(document).width() < 1200){
                console.log($('#why-choose-item-slide'));
                $('#why-choose-item-slide').owlCarousel({
                    loop: true,
                    margin:0,
                    nav:false,
                    dots:false,
                    autoplay: true,
                    slideTransition: 'linear',
                    autoplaySpeed: 6000,
                    smartSpeed: 6000,
                    center: true,
                    responsive : {
                        0 : {
                            items:1,
                        },
                        700 : {
                            items:2,
                        },
                        991 : {
                            items:2,
                        },
                        1200 : {
                            items:3,
                        },
                    }
                })
            }
            AOS.init();
        })
    </script>
@show
