@extends('_master')


@section('title')
	LOLcat Ipsum Generator
@stop

@section('head')
	<?php require 'logic.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/lolcats-ipsum.css">
@stop



@section('content')
	<h1 class="text-center">LOLcat Ipsum Generator</h1>
	<br>
	<span id='output' class='center-block text-center'>


@stop
