<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.landing-partials.head')

<body data-spy="scroll">
    <button onclick="topFunction()" id="myBtn" title="Vá para topo"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
    <!-- header start -->
    <div class="border-bg"></div>
      @include('layouts.landing-partials.header')
      @include('layouts.landing-partials.banner')
      @include('layouts.landing-partials.sobre')
      @include('layouts.landing-partials.planta')
      @include('layouts.landing-partials.carrousel-images')
      @include('layouts.landing-partials.testemunhos')
      @include('layouts.landing-partials.contato')
      @include('layouts.landing-partials.footer')

    <!-- Footer -->
    <!-- Footer Section End -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="{{ asset('/landing/js/owl.carousel.js')}}"></script>
    <script src="{{ asset('/landing/js/animate.js')}}"></script>
    <script src="{{ asset('/landing/js/custom.js')}}"></script>
    <script>
        // Reviews slider
        $(".reviews .carousel-main").owlCarousel({
            items: 2,
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            margin: 0,
            nav: true,
            dots: false,
            navText: ['<span class="fa fa-angle-left fa-2x"></span>', '<span class="fa fa-angle-right fa-2x"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1170: {
                    items: 2
                }
            }
        });
    </script>
    <script>
        $('.testimonials .carousel-main').owlCarousel({
            items: 2,
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            margin: 100,
            nav: true,
            dots: false,
            navText: ['<span class="fa fa-angle-left fa-2x"></span>', '<span class="fa fa-angle-right fa-2x"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1170: {
                    items: 2
                }
            }
        })
    </script>
</body></html>
