@extends('masterlog')
@section('judul','Login Administrator')
@section('konten')
<div class="tentang2 shadow2" >
	<div id="content " class="text-light">
		<div class="align-items-center" >
			<div class="text-light">
				<div class=" card1">
					<div class="pt-lg-5">
						<div class="card-header text-center bg-transparent border-bottom-0">
							<h2>Administrator</h2>
						</div>
						<div class="card-body">
							<form>
								<h6>
									Email
								</h6>
								<input type="email" class="form-control border-light mb-2 bg-transparent text-light" name="" placeholder="email">
								<h6>
									Password
								</h6>
								<input type="password" class="form-control border-light mb-3 text-light bg-transparent" name="" placeholder="password">
								<input type="submit" class="btn btn-outline-light" name="" value="Login">
							</form>
							<div class="card-footer text-right border-0">
				
								<p>
									lupa password? <a href="/tentang-kami">klik disini</a>
								</p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
