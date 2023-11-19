@extends('site.layout')
@section('title', 'Essa é a página HOME')
@section('conteudo')
    <h1> Essa é nossa Home </h1>

    {{-- Isso é um comentário--}}

    {{-- isset($nome) ? 'existe' : 'não existe'--}}

    {{-- $teste ?? 'padrão' --}}

{{--------------------------------------------------------------------------------------------------}}    
    
    {{-- Estrutura de controle--}}

    {{--@if ($nome == 'Rodrigooo')
        true  
    @else
        false     
    @endif--}}

    {{-- @ounless (Regra oposta)--}}

    {{--@switch($idade)
        @case(28)
            Idade está ok
            @break
        @case(29)
            Idade está errada
            @break
        @default
            default
            
    @endswitch--}}

    {{--@isset($nome)
        Existe
    @endisset--}}

    {{--@guest
        Não está autenticado
    @endguest--}}

 {{-------------------------------------------------------------------------------------------------}}   

    {{-- Estrutura de repetição--}}

    {{--@for ($i = 0; $i <= 10; $i++)
        O valor atual é {{ $i }} <br>
    @endfor--}}
    
    {{--@php $i = 0; @endphp
     @while ($i <= 15)
        O valor atual é {{ $i }} <br>
        @php $i++ @endphp
    @endwhile--}}

    {{--@foreach ($frutas as $fruta)
        {{ $fruta }} <br>
    @endforeach--}}

    {{--@forelse ($frutas as $fruta)
        {{ $fruta }} <br>
    @empty
        array está vazio
    @endforelse--}}

{{-----------------------------------------------------------------------------------------------------}}

    {{@include('includes.mensagem', ['titulo' => 'Mensagem de sucesso!'])

    @component('components.sidebar')
        @slot('paragrafo')
            Texto qualquer vindo do slot
        @endslot
    @endcomponent

@endsection

@push('style')
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 
@endpush

@push('scrypt')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush