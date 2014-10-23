@extends('_master')


@section('title')
	P3 | Developer's Best Friend
@stop

@section('head')

@stop



@section('content')
		<h1 class="text-center">Developer's Best Friend</h1>
		<br>
		<h4>Generate your very own filler text and users to test your web apps</h4>
		<br>
		<p>Do you feel like a fraud creating fake users to test your code? Does writing line after line of prose just to test your new program seem daunting?</p>
		<br>
		<em><h4 class="text-center">Well fear no more</h4></em>
		<br>
		<p>The developer tools below will give you the dummy content you need to get your project up and running.</p>
		<br>
		<br>
		<h3>LOLcat Ipsum</h3>
		<p>Check out this tool for walls of text you can copy and paste to test your app. The text comes from the <a href="http://www.lolcatbible.com/index.php?title=Gospel_of_Mark">LOLcat Bible Book of Mark</a> and the latin text comes from <a href="http://la.wikisource.org/wiki/De_finibus_bonorum_et_malorum/Liber_Primus">a chunk of real Latin.</a> See if you can see the difference!
		<br>  
		<h4><a href={{ url('lolcats-ipsum')}}>LOLcat Ipsum generator</a></h4>
		</p>
		<br>
		<br>
		<h3>Fake User Generator</h3>
		<p>Do you need to safely test your web application with users that won't mind your poking and proding? Do you need to save time when you create your fake identies online? You can use the fake profile generator below to get the content you need.
		<br>
		<a href="{{ url('user-gen')}}">Fake User Generator</a>
		</p>
		



@stop