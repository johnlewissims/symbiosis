@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  <div class="container default_posts_section">
    <div class="blog-row">
      @while(have_posts()) @php(the_post())
        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
      @endwhile
    </div>

    <?php if(get_the_posts_navigation()) { ?>
      <div class="more-row">
        {!! get_the_posts_navigation() !!}
      </div>
    <?php } ?>

  </div>

  
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
