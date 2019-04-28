@extends('layouts.master')
@section('title', 'Checkout')

@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-xs" role="banner" style="background-image:url({{ asset('master/images/stock/teacher-group.jpeg') }});background-size:contain;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
			<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
							<div class="display-t">
									<div class="display-tc animate-box" data-animate-effect="fadeIn">
										<h1>Checkout</h1>
									</div>
							</div>
					</div>
			</div>
	</div>
</header>

<div id="fh5co-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-6 animate-box">
				<h3>Checkout Details</h3>
				<form action="{{ route('register') }}" method="post" id="checkout-form">
				@include('includes.alert')
					@csrf
					<div class="row form-group">
						<div class="col-md-6">

							<label for="fname">State</label>
							<select v-model="currentState" class="form-control">
								<option value=""></option>
								<option v-for="state in states" :value="state.id">${ state.name }</option>
							</select>
						</div>
						<div class="col-md-6">
							<label for="lname">LGA</label>
							<select v-model="currentLga" class="form-control">
								<option value=""></option>
								<option v-for="lga in lgas" :value="lga.id">${ lga.name }</option>
							</select>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-6">
							<!-- <label for="subject">Subject</label> -->
							<input type="text" id="phone" class="form-control" placeholder="Phone Number" name="phone">
						</div>

						<div class="col-md-6">
							<!-- <label for="subject">Subject</label> -->
							<input type="text" id="address" class="form-control" placeholder="Address" name="address">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-6">
							<!-- <label for="subject">Subject</label> -->
							<input type="password" class="form-control" placeholder="Password" name="password">
						</div>
						<div class="col-md-6">
							<!-- <label for="subject">Subject</label> -->
							<input type="password"  class="form-control" placeholder="Confirm Password" name="password_confirmation">
						</div>
					</div> 
					<div class="form-group">
						<input type="submit" value="Register" class="btn btn-primary">
					</div>
				</form>		
			</div>
		</div>
		
	</div>
</div>
@endsection

@push('page-scripts')
<script type="text/javascript">
/*	Notice! Use multiline comments because of minification */
var vm = new Vue({
    delimiters: ['${', '}'],
    el: "#checkout-form",
    data: {
        error: null,
				states: JSON.parse('{!! addslashes($states) !!}'),
				currentState: null,
				lgas: [],
				currentLga: null,
				priceDetails: {},
				package: {{ $package }},
				tutor: {{ $tutor }}
    },
		watch: {
			currentState: function () {
				this.getLgas();
			},
			currentLga: function() {
				this.getPackagePrice();
			}
		},
    methods: {
        getLgas: function () {
					var cvm = this;
					axios.post("{{ route('state.lgas') }}",{
							state: cvm.currentState
					}).then(function(response){
							cvm.lgas = response.data
					}).catch(function(error){
							console.log(error);
					});
        },
				getPackagePrice: function () {
					var cvm = this;
					axios.post("{{ route('package.price') }}",{
							package: cvm.package, lga: cvm.currentLga
					}).then(function(response){
						cvm.priceDetails = response.data;
					}).catch(function(error){
							console.log(error);
					});
				}
    }
});

</script>
@endpush