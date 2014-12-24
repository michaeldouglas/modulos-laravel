@extends('CMS::layout.master')

@section('styles_cms')
    @parent
    {{ HTML::style('packages/module/cms/assets/css/geral.css', array('type' => 'text/css')) }}
@stop


@section('content')
    <p>Hello World!</p>
    <p>Conteúdo do CMS!</p>
@stop