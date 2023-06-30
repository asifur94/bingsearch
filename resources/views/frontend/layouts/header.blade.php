<?php
	$user = Auth::user();
?>	


	<div class="header_area" style="background: white; ">
		<div class="container-fluid">
			<div class="header_menu">
				<div class="header_select">
					<select name="" id="">
						<option value="#">Bangla</option>
						<option value="#">English</option>
					</select>
				</div>
				<div class="header_options">
					<ul class="header_menus">
						<li><a href="#" class="settings"><img src="{{asset('public/assets/frontend/')}}/img/settings.svg" alt=""></a></li>
						<li><a href="#" class="popup_active"><img src="{{asset('public/assets/frontend/')}}/img/menu.svg" alt=""></a></li>

						@if($user)
							<li><a href="#" class=""> {{ $user->name }} </a></li>
							<li><a href="{{ route('logout') }}" class="">Logout</a></li>
						@else

							<li><a href="#" class="sign-in">Sign in</a></li>

						@endif

					</ul>
				</div>
			</div>
			<!-- our ai list -->
			<div class="user_profile our_services">
				<h6>Our Ai List</h6>
				<li><a href="{{ route('chat_form') }}"><img src="{{asset('public/assets/frontend/')}}/img/bing-mini.svg" alt=""> Chat  </a></li>
			</div>
			<!-- setting options -->
			<div class="setting_for_site">
				<li>Safe Search</li>
				<li>Search History</li>
				<li>Collection</li>
				<li>Privacy</li>
				<li>Feedback</li>
			</div>

			<!-- sign in options -->
			<div class="sign_in_options">
				<h4>Please Sign in</h4>

				<form action="{{ route('submit_login') }}" method="post">
					@csrf

					<label for="email">Enter your Email</label>
					<input type="email" id="email" name="email" required>


					<label for="password">Enter your password</label>
					<input type="password" name="password" id="password" required>

					<button type="submit">Login</button>

			
					<p>No Account Here? please <a href="{{ route('registration') }}">Sign up</a></p>
				</form>
			</div>

		</div>



	</div>
