@extends('layouts.site')

@section('css')
{{-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css"> --}}
@endsection

@section('content')
  @include('layouts.site-partials.banner-principal-rotativo')
  @include('layouts.site-partials.servicos')
  @include('layouts.site-partials.banner-videos')
  @include('layouts.site-partials.lotes-destaque')
  @include('layouts.site-partials.banner-noticias')
  {{-- @include('layouts.site-partials.parallax') --}}
  {{-- @include('layouts.site-partials.conteudo') --}}
  @include('layouts.site-partials.banner-promocional')
  @include('layouts.site-partials.banner-blog')
  @include('layouts.site-partials.inscrevase')
@endsection

@section('javascript')
<script>

$(document).ready(function(){
  $('#myCarousel').carousel({
                interval: 5000
        });

        $('#carousel-text').html($('#slide-content-0').html());

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
        });


        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid', function (e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});

</script>


@endsection
