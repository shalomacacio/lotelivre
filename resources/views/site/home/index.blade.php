@extends('layouts.site')

@section('content')
  @include('layouts.site-partials.banner-principal-rotativo')
  @include('layouts.site-partials.servicos')
  @include('layouts.site-partials.banner-videos')
  @include('layouts.site-partials.lotes-destaque')
  @include('layouts.site-partials.banner-noticias')
  {{-- @include('layouts.site-partials.parallax') --}}
  {{-- @include('layouts.site-partials.conteudo') --}}
  @include('layouts.site-partials.banner-cards')
  @include('layouts.site-partials.banner-blog')
  @include('layouts.site-partials.banner-relampago')
  @include('layouts.site-partials.inscrevase')
@endsection
