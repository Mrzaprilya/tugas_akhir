@extends('layout')
@section('container')
@if(session()->has('cart'))
    <ul>
        @foreach(session('cart') as $productId => $product)
            <li>{{ $product['name'] }} - Jumlah: {{ $product['quantity'] }} - Harga Total: {{ $product['total_price'] }}</li>
        @endforeach
    </ul>
@else
    <p>Keranjang kosong.</p>
@endif
@endsection