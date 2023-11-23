@extends('layouts.master')

@section('title', 'About the company')

@section('content')
<p>Important information for our visitors about the company products.</p>
<p>This page contains different advantages of Blade template system.</p>
<h2>The products list with Blade directives.</h2>
    <div style="color: darkblue;">
       <?php $productCounts = array(6,27,10,13,56,77); 
        //Blade Templates - conditional intruction ?>
        @for ($i = 0;$i < count($productCounts) ; $i++)
            Product count {{$productCounts[$i]}} <br>
        @endfor
        @if (count($productCounts) === 5)
            We have exactly 5 products. <br>
        @elseif (count($productCounts) === 0)
            We have no products. <br>
        @else
            We have different number of products then 5. <br>
        @endif
        <?php $productPrices = array("computer"=>778, "laptop"=>335, "monitor"=>128); 
        //Blade Templates - @foreach loop ?>
       @foreach ( $productPrices as $key => $price)
           Product: {{$key }} Price: {{$price}} <br>
        @endforeach
        <?php $productCounts = array(); 
        //Blade Templates - @forelse loop ?> 
        @forelse ($productCounts as $count)
             Product count {{$count}} <br>
        @empty
            List is empty <br>
        @endforelse
    </div>
@endsection

@section('footerScripts')
Footer section for JavaScript and ather footer info.
    <script></script>
@endsection