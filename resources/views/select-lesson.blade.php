@extends('layouts.master')
@section('title', 'Lesson Plans')

@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-xs" role="banner" style="background-image:url({{ asset('master/images/stock/teacher-group.jpeg') }});background-size:contain;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
			<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
							<div class="display-t">
									<div class="display-tc animate-box" data-animate-effect="fadeIn">
										<h1>Select Lesson Plan</h1>
									</div>
							</div>
					</div>
			</div>
	</div>
</header>

@foreach($packages as $group => $groupPackages)
Group Name: {{ $group }} </br>
	 Packages: </br>
	 @foreach($groupPackages as $package)
	 		Package Name: {{ $package->name }} </br>
	 @endforeach
@endforeach
@endsection