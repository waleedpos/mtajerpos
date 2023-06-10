@php
	$is_mobile = isMobile();
@endphp
<div class="row">
	<div class="pos-form-actions">
		<div class="col-md-12">
		 
			<div class="col-xs-6">
				<div class="row">
					<div class="col-md-4">
						<style>
							.action-button{
								padding: 10px;
								margin: 5px;
								width: 92%;
								display: flex;
								flex-wrap: nowrap;
								align-content: space-between;
								justify-content: space-around;
								align-items: center;
							}
							.action-button:hover{
								opacity: .9;
							}
							.action-style{
								width: 100%;
								padding: 10px;
								height: 100%;
							}
							.action-button0{
									padding:15px;
									width: 100%;
									border-radius: 4px;
							 }
							@media (max-width:999px){
								.action-button0{
									padding:4px;
									margin-bottom: 3px
								}
							} 	  
						</style>
						<!-- Single button -->
						<div class="btn-group  dropup" style="transition: .3s;width: 100%">
							<button type="button" class=" action-button0 btn btn-default dropdown-toggle action-style" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Action <span class="caret"></span>
							</button>
							<ul class="dropdown-menu ">
							<li>
								<button type="button"   class="@if($is_mobile) col-xs-6 @endif btn  text-white  action-button  btn-flat @if($pos_settings['disable_draft'] != 0) hide @endif" id="pos-draft" @if(!empty($only_payment)) disabled @endif><i class="fas fa-edit"></i>  @lang('sale.draft')</button>
								{{-- show --}}
								<button style="margin-right: 5px!important;background: #7cbdbf;
								color: aliceblue;" type="button" class="btn   action-button no-print  pos-express-finalize  @if($is_mobile) col-xs-6 @endif" id="pos-quotation" @if(!empty($only_payment)) disabled @endif><i class="fas fa-edit"></i>  @lang('lang_v1.quotation')</button>
								
							</li>
							{{-- suspend --}}
										@if(empty($pos_settings['disable_suspend']))
											<button type="button" style="background: #ed5672;
											color: aliceblue;"
											class="@if($is_mobile) col-xs-6 @endif btn  action-button   no-print pos-express-finalize" 
											data-pay_method="suspend"
											title="@lang('lang_v1.tooltip_suspend')" @if(!empty($only_payment)) disabled @endif>
											<i class="fas fa-pause" aria-hidden="true"></i>
											@lang('lang_v1.suspend')
											</button>
										@endif
							
										<li>
								{{-- credit_sale --}}
											@if(empty($pos_settings['disable_credit_sale_button']))
												<input type="hidden" name="is_credit_sale" value="0" id="is_credit_sale">
												<button type="button" style="    background: bisque;
												color: #8f8383;"
												class="btn  action-button no-print pos-express-finalize @if($is_mobile) col-xs-6 @endif" 
												data-pay_method="credit_sale"
												title="@lang('lang_v1.tooltip_credit_sale')" @if(!empty($only_payment)) disabled @endif>
													<i class="fas fa-check" aria-hidden="true"></i>  @lang('lang_v1.credit_sale')
												</button>
											@endif
								
							</li>
							
							{{-- checkout --}}
							{{-- <button type="button" style="background: #d3a5a5;
							color: aliceblue;"
								class="btn action-button  btn-flat no-print @if(!empty($pos_settings['disable_suspend'])) @endif pos-express-finalize @if(!array_key_exists('card', $payment_types)) hide @endif @if($is_mobile) col-xs-6 @endif" 
								data-pay_method="card"
								title="@lang('lang_v1.tooltip_express_checkout_card')" >
								<i class="fas fa-credit-card" aria-hidden="true"></i>  @lang('lang_v1.express_checkout_card')
							</button> --}}
							
							<li>
								{{-- checkout_multi_pay --}}

								<button type="button" style="    background: burlywood;
								color: #6a6a6a;" class="btn action-button  @if(!$is_mobile) @endif   no-print @if($pos_settings['disable_pay_checkout'] != 0) hide @endif @if($is_mobile) col-xs-6 @endif" id="pos-finalize" title="@lang('lang_v1.tooltip_checkout_multi_pay')"><i class="fas fa-money-check-alt" aria-hidden="true"></i>  @lang('lang_v1.checkout_multi_pay') </button>
							</li>
							
							<li>
								{{-- _cash --}}
											<button type="button" style="    background: #a1a5a5;
											color: aliceblue;" class="btn action-button  @if(!$is_mobile) @endif  no-print @if($pos_settings['disable_express_checkout'] != 0 || !array_key_exists('cash', $payment_types)) hide @endif pos-express-finalize @if($is_mobile) col-xs-6 @endif" data-pay_method="cash" title="@lang('tooltip.express_checkout')">  <i class="fas fa-money-bill-alt" aria-hidden="true"></i> @lang('lang_v1.express_checkout_cash')</button>

							</li>
							
							 
							
							
							
							
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					
					{{-- cancel --}}
								@if(empty($edit))
									<button type="button"   class=" action-button0 btn btn-danger btn-flat @if($is_mobile) col-xs-6 @else btn-xs @endif" id="pos-cancel"> <i class="fas fa-window-close" style="margin:0px 2px "></i>  @lang('sale.cancel')</button>
								@else
									<button  type="button" class=" action-button0 btn btn-danger btn-flat hide @if($is_mobile) col-xs-6 @else btn-xs @endif" id="pos-delete" @if(!empty($only_payment)) disabled @endif> <i class="fas fa-trash-alt"></i> @lang('messages.delete')</button>
								@endif
				</div>
				<div class="col-md-4">
					
					{{-- recent --}}
									@if(!isset($pos_settings['hide_recent_trans']) || $pos_settings['hide_recent_trans'] == 0)
									<button type="button"  class=" action-button0 pull-right btn btn-primary btn-flat @if($is_mobile) col-xs-6 @endif" data-toggle="modal" data-target="#recent_transactions_modal" id="recent-transactions"> <i class="fas fa-clock"></i>  @lang('lang_v1.recent_transactions')</button>
									@endif
					</div>
				</div>









			</div>
			<div class="col-xs-6">
				{{-- total --}}
							@if(!$is_mobile)
							<div class="bg-navy pos-total text-white"  style="width: 100%;
							display: flex;
							align-content: center;
							justify-content: space-evenly;
							align-items: center;
							border-radius: 4px;">
							<span class="text">@lang('sale.total_payable')</span>
							<input type="hidden" name="final_total" 
														id="final_total_input" value=0>
							<span id="total_payable" class="number">0</span>
							</div>
							@endif 

							@if($is_mobile)
							<div class="col-md-12 text-right">
								<b>@lang('sale.total_payable'):</b>
								<input type="hidden" name="final_total" 
															id="final_total_input" value=0>
								<span id="total_payable" class="text-success lead text-bold text-right">0</span>
							</div>
						@endif


			</div>


			
			
		</div>
	</div>
</div>
@if(isset($transaction))
	@include('sale_pos.partials.edit_discount_modal', ['sales_discount' => $transaction->discount_amount, 'discount_type' => $transaction->discount_type, 'rp_redeemed' => $transaction->rp_redeemed, 'rp_redeemed_amount' => $transaction->rp_redeemed_amount, 'max_available' => !empty($redeem_details['points']) ? $redeem_details['points'] : 0])
@else
	@include('sale_pos.partials.edit_discount_modal', ['sales_discount' => $business_details->default_sales_discount, 'discount_type' => 'percentage', 'rp_redeemed' => 0, 'rp_redeemed_amount' => 0, 'max_available' => 0])
@endif

@if(isset($transaction))
	@include('sale_pos.partials.edit_order_tax_modal', ['selected_tax' => $transaction->tax_id])
@else
	@include('sale_pos.partials.edit_order_tax_modal', ['selected_tax' => $business_details->default_sales_tax])
@endif

@include('sale_pos.partials.edit_shipping_modal')