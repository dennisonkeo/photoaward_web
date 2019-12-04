
									@if(count($errors))
											<div class="form-group">
												<div class="alert alert-danger" style="margin: 1%; background: #d9534f; color: #fff; padding: 10px;">
													<ul>
														@foreach($errors->all() as $error)
														<li>{{$error}}</li>
														@endforeach
													</ul>
												</div>
											</div>
									@endif