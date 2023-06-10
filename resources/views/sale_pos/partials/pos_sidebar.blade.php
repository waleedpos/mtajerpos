<style>
	label.lable_Category_class {
		background: white;
		padding: 5px;
		margin: 2px;
		border-radius: 5px;
		cursor: pointer;
		transition: .3s;
	}
	label.lable_Category_class:hover{
		opacity: .9;
	}
	label.lable_Category_class.active{
		background: #9f9f9f;
		color: white;
	}
</style>

<div class="row" id="featured_products_box" style="display: none;">
@if(!empty($featured_products))
	@include('sale_pos.partials.featured_products')
@endif
</div>
<div class="row">
	
	@if(!empty($categories))
		<div class="col-md-12" id="product_category_div" >
			{{-- <select class="select2" id="product_category"    >

				<option id="product_category_all" value="all">@lang('lang_v1.all_category')</option>

				@foreach($categories as $category)
					<option   value="{{$category['id']}}">{{$category['name']}}</option>
				@endforeach

				@foreach($categories as $category)
					@if(!empty($category['sub_categories']))
						<optgroup label="{{$category['name']}}">
							@foreach($category['sub_categories'] as $sc)
								<i class="fa fa-minus"></i> <option value="{{$sc['id']}}">{{$sc['name']}}</option>
							@endforeach
						</optgroup>
					@endif
				@endforeach
			</select> --}}
			<div class="box-lable-category">
				<label id="lable_Category_id" class="lable_Category_class" data-category="all"  >
				    @lang('lang_v1.all_category')
				</label>   
			@foreach($categories as $category) 
				<label id="lable_Category_id" class="lable_Category_class" data-category="{{$category['id']}}">
					{{$category['name']}}
				</label> 
				@foreach($categories as $category)
				@if(!empty($category['sub_categories']))
					 
						@foreach($category['sub_categories'] as $sc)
							{{-- <i class="fa fa-minus"></i> <option value="{{$sc['id']}}">{{$sc['name']}}</option> --}}
							<label id="lable_Category_id" class="lable_Category_class" data-category="{{$sc['id']}}">
								{{$sc['name']}}
							</label> 
						@endforeach
					 
				@endif
				@endforeach


			@endforeach
			@if(!empty($brands))
				<div class="col-sm-4" id="product_brand_div"  style="width: fit-content">
					{!! Form::select('size', $brands, null, ['id' => 'product_brand', 'class' => 'select2', 'name' => null, 'style' => 'width:100% !important']) !!}
				</div>
			@endif

			</div>
		</div>



		




	@endif


	<!-- used in repair : filter for service/product -->
	<div class="col-md-6 hide" id="product_service_div">
		{!! Form::select('is_enabled_stock', ['' => __('messages.all'), 'product' => __('sale.product'), 'service' => __('lang_v1.service')], null, ['id' => 'is_enabled_stock', 'class' => 'select2', 'name' => null, 'style' => 'width:100% !important']) !!}
	</div>

	<div class="col-sm-4 @if(empty($featured_products)) hide @endif" id="feature_product_div">
		<button type="button" class="btn btn-primary btn-flat" id="show_featured_products">@lang('lang_v1.featured_products')</button>
	</div>
</div>
<br>
<div class="row">
	<input type="hidden" id="suggestion_page" value="1">
	<div class="col-md-12">
		<div class="eq-height-row" id="product_list_body"  style="padding-bottom: 120px" ></div>
	</div>
	<div class="col-md-12 text-center" id="suggestion_page_loader" style="display: none;">
		<i class="fa fa-spinner fa-spin fa-2x"></i>
	</div>
</div>



@section('secrepet')
		 <script> 
			   
				$('.lable_Category_class').on('click', function(e) {
					$('input#suggestion_page').val(1);
					var location_id = $('input#location_id').val();
					if (location_id != '' || location_id != undefined) {
						get_product_suggestion_list(
							$(this).data('category'),
							$('select#product_brand').val(),
							$('input#location_id').val(),
							null
						);
					}

					get_featured_products();
					// console.log($(this).data('category'))
					$(".lable_Category_class").removeClass("active");
					$(this).addClass("active");
				});
			</script>
		@endsection