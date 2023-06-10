{{-- @forelse($products as $product)
	<div class="col-md-3 col-xs-4 product_list no-print">
		<div class="product_box" data-variation_id="{{$product->id}}" title="{{$product->name}} @if($product->type == 'variable')- {{$product->variation}} @endif {{ '(' . $product->sub_sku . ')'}} @if(!empty($show_prices)) @lang('lang_v1.default') - @format_currency($product->selling_price) @foreach($product->group_prices as $group_price) @if(array_key_exists($group_price->price_group_id, $allowed_group_prices)) {{$allowed_group_prices[$group_price->price_group_id]}} - @format_currency($group_price->price_inc_tax) @endif @endforeach @endif">

		<div class="image-container" 
			style="background-image: url(
					@if(count($product->media) > 0)
						{{$product->media->first()->display_url}}
					@elseif(!empty($product->product_image))
						{{asset('/uploads/img/' . rawurlencode($product->product_image))}}
					@else
						{{asset('/img/default.png')}}
					@endif
				);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">
			
		</div>

		<div class="text_div">
			<small class="text text-muted">{{$product->name}} 
			@if($product->type == 'variable')
				- {{$product->variation}}
			@endif
			</small>

			<small class="text-muted">
				({{$product->sub_sku}})
			</small>
		</div>
			
		</div>
	</div>
@empty
	<input type="hidden" id="no_products_found">
	<div class="col-md-12">
		<h4 class="text-center">
			@lang('lang_v1.no_products_to_display')
		</h4>
	</div>
@endforelse --}}


































@php
    $iconShown = [];
@endphp





@forelse($products as $product)

@if($product->type != 'variable')

	<div class="col-md-3 col-xs-4 product_list no-print">
		
		@if(count($product->media) > 0 || !empty($product->product_image))
		<div
		onmouseover = "this.style.backgroundColor=' #ffffff9e';" onmouseout = "this.style.backgroundColor='white';"
		class="product_box" data-variation_id="{{$product->id}}" title="{{$product->name}} @if($product->type == 'variable')- {{$product->variation}} @endif {{ '(' . $product->sub_sku . ')'}} @if(!empty($show_prices)) @lang('lang_v1.default') - @format_currency($product->selling_price) @foreach($product->group_prices as $group_price) @if(array_key_exists($group_price->price_group_id, $allowed_group_prices)) {{$allowed_group_prices[$group_price->price_group_id]}} - @format_currency($group_price->price_inc_tax) @endif @endforeach @endif">
		<div class="image-container" 
			style="background-image: url(
				 @if(count($product->media) > 0)
				 {{$product->media->first()->display_url}}

					@elseif(!empty($product->product_image))
						{{asset('/uploads/img/' . rawurlencode($product->product_image))}}
						
						
					{{-- @elseif( empty($product->product_image))
						{{asset('/img/default.png')}}
						);
						background-repeat: no-repeat; background-position: center;
						background-size: contain;"> --}}
					@endif
					);
					background-repeat: no-repeat; background-position: center;
						background-size: contain;">
				 
			
		</div>
		<div class="text_div">
			<small class="text text-muted">{{$product->name}} 
			@if($product->type == 'variable')
				- {{$product->variation}}
			@endif
			</small>

			<small class="text-muted">
				({{$product->sub_sku}})
			</small>
		</div>
	</div> 

		@else
		<div class="product_box" style=" 
		min-height: 95px;
		display: flex;
		justify-content: center;
		align-content: center;
		align-items: center;
		flex-wrap: nowrap; "
		onmouseover = "this.style.backgroundColor=' #ffffff9e';" onmouseout = "this.style.backgroundColor='white';"
		data-variation_id="{{$product->id}}" title="{{$product->name}} @if($product->type == 'variable')- {{$product->variation}} @endif {{ '(' . $product->sub_sku . ')'}} @if(!empty($show_prices)) @lang('lang_v1.default') - @format_currency($product->selling_price) @foreach($product->group_prices as $group_price) @if(array_key_exists($group_price->price_group_id, $allowed_group_prices)) {{$allowed_group_prices[$group_price->price_group_id]}} - @format_currency($group_price->price_inc_tax) @endif @endforeach @endif"
		> 
			 
			<div class="image-container"  style=" 
				margin: 5px;
				width: 100%;
				height: 80px;
				display: flex; 
				flex-direction: column;
				flex-wrap: nowrap;
				justify-content: space-evenly;
				align-items: stretch;
				align-content: center;">
				

			 <div class="text_div">
				<small class="text text-muted">{{$product->name}} 
				@if($product->type == 'variable')
					- {{$product->variation}}
				@endif
				</small>
	
				<small class="text-muted">
					({{$product->sub_sku}})
				</small>
			</div>


			</div>
		</div>
		
		@endif
	</div>


 

	 
@elseif ($product->type  == 'variable')
<style>
/* .product_box.with-variable  button i{
	font-size: initial;
	transition: .3s;
	color: #bbbbbb;
} */
/* .product_box.with-variable  button i:hover{
	font-size: x-large;
	color: black;
} */
.button_box_product:hover ~ i.fas.fa-list {
    font-size: large;
} 

</style>

@if (  !isset($iconShown[$product->name]))
<div class="col-md-3 col-xs-4 product_list no-print  "  >
	<section class="product_box with-variable" style=" 
    min-height: 95px;
    display: flex;
    justify-content: center;
    align-content: center;
    align-items: center;
    flex-wrap: nowrap;  "   
	onmouseover = "this.style.backgroundColor=' #ffffff9e';" onmouseout = "this.style.backgroundColor='white';"
	> 
		@if(count($product->media) == 0)
		<div class="image-container"  style="
		    
		    margin: 5px;
		    width: 100%;
		    height: 80px;
		    display: flex; 
		    flex-direction: column;
		    flex-wrap: nowrap;
		    justify-content: space-evenly;
		    align-items: stretch;
		    align-content: center;
		
		"> 
		@endif
		<div class="text_div">
			<small class="text text-muted">{{$product->name}} 
			@if($product->type == 'variable')
				  
			@endif
			</small>
	 
		</div>
		<i class="fas fa-list" style="font-size: large" ></i>
		<!-- عرض الأيقونة فقط لأول منتج من نفس الاسم -->
		<button  
		 
		type="button" style="background: none;  
		border: none;
		margin: 0;
		position: absolute;
		width: 100%;
		height: 100%;" class="button_box_product" data-toggle="modal" data-target="#exampleModal{{$product->id}} " >
		 
		
		</button>

		<div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="exampleModalLabel">{{$product->name}}</h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body">
					<div class="row">
						{{-- <input type="hidden" id="suggestion_page" value="1"> --}}
						<div class="col-md-12">
							<div class="eq-height-row" id="product_list_body">

								@forelse ($products as $product_2)
									@if ($product->product_id ==$product_2->product_id )
			
									<div class="col-md-3 col-xs-4 product_list no-print">
										@if(count($product_2->media) > 0)


										<div class="product_box" style=" 
										border: solid 2px #d8d8d8;
    									border-radius: 9px;"
								    	onmouseover = "this.style.backgroundColor=' #ffffff9e';" onmouseout = "this.style.backgroundColor='white';"
										data-variation_id="{{$product_2->id}}" title="{{$product_2->name}} @if($product_2->type == 'variable')- {{$product_2->variation}} @endif {{ '(' . $product_2->sub_sku . ')'}} @if(!empty($show_prices)) @lang('lang_v1.default') - @format_currency($product_2->selling_price) @foreach($product_2->group_prices as $group_price) @if(array_key_exists($group_price->price_group_id, $allowed_group_prices)) {{$allowed_group_prices[$group_price->price_group_id]}} - @format_currency($group_price->price_inc_tax) @endif @endforeach @endif">
								
											 
											<div class="image-container" 
												style="background-image: url(
														  
														  @if(count($product2->media) > 0)
															{{$product2->media->first()->display_url}}

																@elseif(!empty($product2->product_image))
																	{{asset('/uploads/img/' . rawurlencode($product2->product_image))}}
																	
																	 
																@endif
																);
																background-repeat: no-repeat; background-position: center;
																	background-size: contain;">
												
											</div> 
											<div class="text_div">
												<small class="text text-muted">{{$product_2->name}} 
												@if($product_2->type == 'variable')
													- {{$product_2->variation}}
												@endif
												</small>
									
												<small class="text-muted">
													({{$product_2->sub_sku}})
												</small>
											</div>

										</div>

										@else

										<div class="product_box" style=" 
										min-height: 95px;
										display: flex;
										justify-content: center;
										align-content: center;
										align-items: center;
										flex-wrap: nowrap; 
										border: solid 2px #d8d8d8;
    									border-radius: 9px;"
										onmouseover = "this.style.backgroundColor=' #d8d8d8';" onmouseout = "this.style.backgroundColor='white';"
										
										data-variation_id="{{$product_2->id}}" title="{{$product_2->name}} @if($product_2->type == 'variable')- {{$product_2->variation}} @endif {{ '(' . $product_2->sub_sku . ')'}} @if(!empty($show_prices)) @lang('lang_v1.default') - @format_currency($product_2->selling_price) @foreach($product_2->group_prices as $group_price) @if(array_key_exists($group_price->price_group_id, $allowed_group_prices)) {{$allowed_group_prices[$group_price->price_group_id]}} - @format_currency($group_price->price_inc_tax) @endif @endforeach @endif">
								
											 
											<div class="image-container"  style="
		    
											margin: 5px;
											width: 100%;
											height: 80px;
											display: flex; 
											flex-direction: column;
											flex-wrap: nowrap;
											justify-content: space-evenly;
											align-items: stretch;
											align-content: center;
										
										"> 
												
											
											<div class="text_div">
												<small class="text text-muted">{{$product_2->name}} 
												@if($product_2->type == 'variable')
													- {{$product_2->variation}}
												@endif
												</small>
									
												<small class="text-muted">
													({{$product_2->sub_sku}})
												</small>
											</div>
										</div> 
									</div>


										@endif

									</div>
			
			
										
									@endif
								@empty

							</div>
						</div>
						<div class="col-md-12 text-center" id="suggestion_page_loader" style="display: none;">
							<i class="fa fa-spinner fa-spin fa-2x"></i>
						</div>
					</div>
						
					@endforelse

				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				  {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
				</div>
			  </div>
			</div>
		  </div> 









		@php
			$iconShown[$product->name] = true;
		@endphp
@if(count($product->media) == 0)
		 </div>
		@endif
 </section>

</div>
	@endif 





{{-- 
<div class="col-md-3 col-xs-4 product_list no-print  " style="display: none">
	<div class="product_box" data-variation_id="{{$product->id}}" title="{{$product->name}} @if($product->type == 'variable')- {{$product->variation}} @endif {{ '(' . $product->sub_sku . ')'}} @if(!empty($show_prices)) @lang('lang_v1.default') - @format_currency($product->selling_price) @foreach($product->group_prices as $group_price) @if(array_key_exists($group_price->price_group_id, $allowed_group_prices)) {{$allowed_group_prices[$group_price->price_group_id]}} - @format_currency($group_price->price_inc_tax) @endif @endforeach @endif">

	<div class="image-container" 
		style="background-image: url(
				@if(count($product->media) > 0)
					{{$product->media->first()->display_url}}
				@elseif(!empty($product->product_image))
					{{asset('/uploads/img/' . rawurlencode($product->product_image))}}
				@else
					{{asset('/img/default.png')}}
				@endif
			);
		background-repeat: no-repeat; background-position: center;
		background-size: contain;">
		
	</div>

	<div class="text_div">
		<small class="text text-muted">{{$product->name}} 
		@if($product->type == 'variable')
			- {{$product->variation}}
		@endif
		</small>

		<small class="text-muted">
			({{$product->sub_sku}})
		</small>
	</div>
		
	</div>
</div> --}}

@endif





@empty
	{{-- <input type="hidden" id="no_products_found">
	<div class="col-md-12">
		<h4 class="text-center">
			@lang('lang_v1.no_products_to_display')
		</h4>
	</div> --}}
@endforelse


<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
	Launch demo modal
  </button>
   --}}
  <!-- Modal -->
  



