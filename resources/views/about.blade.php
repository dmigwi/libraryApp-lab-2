@extends('layouts.master')

@section('title', 'About the library')

@section('content')
{{-- @include directive includes the part of code from the given file --}}
@include('partials.header-cont')

<p>Important information for our visitors about the company products.</p>
<p>This page contains different advantages of Blade template system.</p>

Some ready parts of content are used here  as includes. 


<?php 
    $modules = array(
    array(
        "title" => "Module first title",
        "description" => "Module first description",
    ),
    array(
        "title" => "Module second title",
        "description" => "Module second  description",
    ),
    array(
        "title" => "Module third title",
        "description" => "Module third description",
    )
);
?>
<sidebar>
    @each('partials.module',$modules,'module')
</sidebar>

<x-component-value>
        1009822
</x-component-value>

<hr>
{{-- component is similar to include --}}

<x-privacy/>

<x-news/>
@endsection

@section('footerScripts')
Footer section for JavaScript and ather footer info.
    <script></script>
@endsection



