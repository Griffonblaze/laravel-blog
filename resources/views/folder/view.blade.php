@extends('base') <!-- même chose qu'include: on récupère le layout de base.blade.php -->

@section('content') <!-- remplace le content de base.blade.php par les instructions en dessous -->


@php
    $i = 'zouzouPHP';
    echo $i;
@endphp


<h3> zouzou </h3>


@stop               <!-- stoppe le remplacement de contenu -->