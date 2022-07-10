{{--
  Template Name: Article Template
--}}

@extends('layouts.app')

@section('content')

<?php

// Check value exists.
if( have_rows('article_layout') ):

    // Loop through rows.
    while ( have_rows('article_layout') ) : the_row();

        // Case: Paragraph layout.
        if( get_row_layout() == 'header' ):
            $header = get_sub_field('field_62c9b0cd085d9');
            ?>

            <h1><?php $header['title']; ?></h1>
            

            <?

        // Case: Download layout.
        // elseif( get_row_layout() == 'download' ): 
        //     $file = get_sub_field('file');
        //     // Do something...

        endif;

    // End loop.
    endwhile;
endif;
?>

@endsection