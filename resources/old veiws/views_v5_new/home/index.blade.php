@extends('layouts.app')
@section('title', __('home.home'))

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header ">
    <!--<h1>{{ __('home.welcome_message', ['name' => Session::get('user.first_name')]) }}-->
    <!--</h1>-->
</section>
<!-- Main content -->
<section>
    <br>
    @if(auth()->user()->can('dashboard.data'))
        @if($is_admin)
        	<div class="row">
                <div class="col-md-4 col-xs-12">
                    @if(count($all_locations) > 1)
                        {!! Form::select('dashboard_location', $all_locations, null, ['class' => 'form-control select2', 'placeholder' => __('lang_v1.select_location'), 'id' => 'dashboard_location']); !!}
                    @endif
                </div>
        		<!--<div class="col-md-8 col-xs-12">-->
          <!--          <div class="form-group pull-right">-->
          <!--                <div class="input-group">-->
          <!--                  <button type="button" class="btn btn-primary" id="dashboard_date_filter">-->
          <!--                    <span>-->
          <!--                      <i class="fa fa-calendar"></i> {{ __('messages.filter_by_date') }}-->
          <!--                    </span>-->
          <!--                    <i class="fa fa-caret-down"></i>-->
          <!--                  </button>-->
          <!--                </div>-->
          <!--          </div>-->
        		<!--</div>-->
        	</div>
    	   <br>
    	   <!--<div class="row">-->
                <!-- /.col -->
        <!--        <div class="col-md-3 col-sm-6 col-xs-12 col-custom">-->
        <!--           <div class="info-box info-box-new-style">-->
        <!--                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-cart-outline"></i></span>-->

        <!--                <div class="info-box-content">-->
        <!--                  <span class="info-box-text">{{ __('home.total_sell') }}</span>-->
        <!--                  <span class="info-box-number total_sell"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span>-->
        <!--                </div>-->
                        <!-- /.info-box-content -->
        <!--           </div>-->
                  <!-- /.info-box -->
        <!--        </div>-->
        <!--        <div class="col-md-3 col-sm-6 col-xs-12 col-custom">-->
        <!--            <div class="info-box info-box-new-style">-->
        <!--               <span class="info-box-icon bg-green">-->
        <!--                    <i class="ion ion-ios-paper-outline"></i>-->
                            
        <!--               </span>-->

        <!--                <div class="info-box-content">-->
        <!--                  <span class="info-box-text">{{ __('lang_v1.net') }} @show_tooltip(__('lang_v1.net_home_tooltip'))</span>-->
        <!--                  <span class="info-box-number net"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span>-->
        <!--                </div>-->
                        <!-- /.info-box-content -->
        <!--            </div>-->
                  <!-- /.info-box -->
        <!--        </div>-->
        <!--        <div class="col-md-3 col-sm-6 col-xs-12 col-custom">-->
        <!--            <div class="info-box info-box-new-style">-->
        <!--               <span class="info-box-icon bg-yellow">-->
        <!--                    <i class="ion ion-ios-paper-outline"></i>-->
        <!--                    <i class="fa fa-exclamation"></i>-->
        <!--               </span>-->

        <!--                <div class="info-box-content">-->
        <!--                  <span class="info-box-text">{{ __('home.invoice_due') }}</span>-->
        <!--                  <span class="info-box-number invoice_due"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span>-->
        <!--                </div>-->
                        <!-- /.info-box-content -->
        <!--            </div>-->
                  <!-- /.info-box -->
        <!--        </div>-->

        <!--        <div class="col-md-3 col-sm-6 col-xs-12 col-custom">-->
        <!--            <div class="info-box info-box-new-style">-->
        <!--               <span class="info-box-icon bg-red text-white">-->
        <!--                    <i class="fas fa-exchange-alt"></i>-->
        <!--               </span>-->

        <!--                <div class="info-box-content">-->
        <!--                  <span class="info-box-text">{{ __('lang_v1.total_sell_return') }}</span>-->
        <!--                  <span class="info-box-number total_sell_return"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span>-->
        <!--                </div>-->
                        <!-- /.info-box-content -->
        <!--                <p class="mb-0 text-muted fs-10 mt-5">{{ __('lang_v1.total_sell_return')}}: <span class="total_sr"></span><br>-->
        <!--                    {{ __('lang_v1.total_sell_return_paid')}}<span class="total_srp"></span></p>-->
        <!--            </div>-->
                  <!-- /.info-box -->
        <!--        </div>-->
    	    <!-- /.col -->
        <!--    </div>-->
        <!--  	<div class="row">-->
        <!--        <div class="col-md-3 col-sm-6 col-xs-12 col-custom">-->
        <!--           <div class="info-box info-box-new-style">-->
        <!--                <span class="info-box-icon bg-aqua"><i class="ion ion-cash"></i></span>-->

        <!--                <div class="info-box-content">-->
        <!--                  <span class="info-box-text">{{ __('home.total_purchase') }}</span>-->
        <!--                  <span class="info-box-number total_purchase"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span>-->
        <!--                </div>-->
                        <!-- /.info-box-content -->
        <!--           </div>-->
                   <!-- /.info-box -->
        <!--        </div>-->
                <!-- /.col -->

        <!--        <div class="col-md-3 col-sm-6 col-xs-12 col-custom">-->
        <!--           <div class="info-box info-box-new-style">-->
        <!--                <span class="info-box-icon bg-yellow">-->
        <!--                    <i class="fa fa-dollar"></i>-->
        <!--                    <i class="fa fa-exclamation"></i>-->
        <!--                </span>-->

        <!--                <div class="info-box-content">-->
        <!--                  <span class="info-box-text">{{ __('home.purchase_due') }}</span>-->
        <!--                  <span class="info-box-number purchase_due"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span>-->
        <!--                </div>-->
                        <!-- /.info-box-content -->
        <!--           </div>-->
                  <!-- /.info-box -->
        <!--        </div>-->
                <!-- /.col -->
        <!--        <div class="col-md-3 col-sm-6 col-xs-12 col-custom">-->
        <!--            <div class="info-box info-box-new-style">-->
        <!--               <span class="info-box-icon bg-red text-white">-->
        <!--                    <i class="fas fa-undo-alt"></i>-->
        <!--               </span>-->

        <!--                <div class="info-box-content">-->
        <!--                  <span class="info-box-text">{{ __('lang_v1.total_purchase_return') }}</span>-->
        <!--                  <span class="info-box-number total_purchase_return"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span>-->
        <!--                </div>-->
                        <!-- /.info-box-content -->
        <!--                 <p class="mb-0 text-muted fs-10 mt-5">{{ __('lang_v1.total_purchase_return')}}: <span class="total_pr"></span><br>-->
        <!--                    {{ __('lang_v1.total_purchase_return_paid')}}<span class="total_prp"></span></p>-->
        <!--            </div>-->
                  <!-- /.info-box -->
        <!--        </div>-->

                <!-- expense -->
        <!--        <div class="col-md-3 col-sm-6 col-xs-12 col-custom">-->
        <!--            <div class="info-box info-box-new-style">-->
        <!--                <span class="info-box-icon bg-red">-->
        <!--                  <i class="fas fa-minus-circle"></i>-->
        <!--                </span>-->

        <!--                <div class="info-box-content">-->
        <!--                  <span class="info-box-text">-->
        <!--                    {{ __('lang_v1.expense') }}-->
        <!--                  </span>-->
        <!--                  <span class="info-box-number total_expense"><i class="fas fa-sync fa-spin fa-fw margin-bottom"></i></span>-->
        <!--                </div>-->
                        <!-- /.info-box-content -->
        <!--            </div>-->
                  <!-- /.info-box -->
        <!--        </div>-->
        <!--    </div>-->
            @if(!empty($widgets['after_sale_purchase_totals']))
                @foreach($widgets['after_sale_purchase_totals'] as $widget)
                    {!! $widget !!}
                @endforeach
            @endif
        @endif 
        <!-- end is_admin check -->
                <style>
.parent-box {
       border: 1px solid #40485b;
    height: 200px;
    background: white;
    padding-top: 30px;
    color: #40485b;
    text-align: center;
}
.parent-box i {
    font-size: 40px;
}

.box-icon {
    color: #40485b !important;
    background: white !important;
    text-align: center;
    border: none;

}
            </style>
        <div class="col-sm-12">
  	    
            <h5>
                <i class="fas fa-rocket"></i>
                اجراءات عاجلة
            </h5>
                <div class="row">
                    <div class="col-md-2 col-sm-6 col-xs-6 parent-box">
                        <button type="button" class="box-icon btn-modal" data-href="https://mtajerpos.mtrtech.net/contacts/create?type=customer" data-container=".contact_modal" >
                                <h5><i class="fas fa-user"></i></h5>  
                               <h5>اضافة عميل</h5>
                      </button> 
                    
              	      
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 parent-box">
                        <button type="button" class="box-icon btn-modal" data-href="https://mtajerpos.mtrtech.net/contacts/create?type=supplier" data-container=".contact_modal">
                                 <h5><i class="fas fa-user-tie"></i></h5>  
                                <h5>اضافة مورد</h5>
                       </button>
                     </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 parent-box">
                        <a class="box-icon" href="https://mtajerpos.mtrtech.net/sells/create">
                          <h5><i class="fa fa-calculator fa-lg"></i></h5>  
                            <h5>اضافة بيع   </h5>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 parent-box">
                        <a class="box-icon" href="https://mtajerpos.mtrtech.net/pos/create">
                         <h5><i class="fas fa-file-invoice"></i></h5>
                            <h5>شاشه البيع - pos  
                            </h5>
                        </a>
                    </div>
                  
                    <div class="col-md-2 col-sm-6 col-xs-6 parent-box">
                        <a class="box-icon" href="https://mtajerpos.mtrtech.net/purchases/create">
                             <h5><i class="fas fa-file-alt"></i></h5>  
                            
                            <h5>اضافه شراء </h5>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 parent-box">
                        <a class="box-icon" href="https://mtajerpos.mtrtech.net/products/create">
                          <h5><i class="fas fa-cube"></i></h5>  
                            <h5> ادخال منتج</h5>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 parent-box">
                        <a class="box-icon" href="https://mtajerpos.mtrtech.net/contacts?type=customer">
                          <h5><i class="fas fa-credit-card"></i></h5>  
                            <h5>دفعات البيع </h5>
                        </a>
                    </div>
                    <div class="col-md-2  col-sm-6 col-xs-6 parent-box">
                        <a class="box-icon" href="https://mtajerpos.mtrtech.net/contacts?type=supplier">
                          <h5><i class="fas fa-shopping-cart"></i></h5>  
                            <h5>دفعات الشراء </h5>
                        </a>
                    </div>
                    <div class="col-md-2  col-sm-6 col-xs-6  parent-box">
                        <a class="box-icon" href="https://mtajerpos.mtrtech.net/expenses/create">
                          <h5><i class="fas fa-dollar-sign"></i></h5>  
                            <h5>ادخل مصروف </h5>
                        </a>
                    </div>
                    
                    <div class="col-md-2  col-sm-6 col-xs-6  parent-box">
                        <a class="box-icon" href="https://mtajerpos.mtrtech.net/reports/customer-supplier">
                          <h5><i class="fa fas fa-undo"></i></h5>  
                            <h5>رصيد الموردين </h5>
                        </a>
                    </div>
                    
                    <div class="col-md-2  col-sm-6 col-xs-6  parent-box">
                        <a class="box-icon" href="https://mtajerpos.mtrtech.net/taxonomies?type=product">
                          <h5><i class="fa fas fa-tags"></i></h5>  
                            <h5>اضافه الاصناف    </h5>
                        </a>
                    </div>
                    
                    <div class="col-md-2  col-sm-6 col-xs-6  parent-box">
                        <a class="box-icon" href="https://mtajerpos.mtrtech.net/reports/stock-report">
                          <h5><i class="fa fas fa-hourglass-half"></i></h5>  
                            <h5>المخزن     </h5>
                        </a>
                    </div>
                   
                </div>
            </div>
            <div class="modal fade contact_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" style="display: none;"><div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form method="POST" action="https://mtajerpos.mtrtech.net/public/contacts" accept-charset="UTF-8" id="contact_add_form" novalidate="novalidate"><input name="_token" type="hidden" value="yL8qEGcdWzjHweJIiH48gCoZjbdcpnmOb85wQqrt">
              
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">اضافة جهة اتصال</h4>
                  </div>
              
                  <div class="modal-body">
                      <div class="row">            
                          <div class="col-md-4 contact_type_div">
                              <div class="form-group">
                                  <label for="type">نوع جهة الاتصال:*</label>
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="fa fa-user"></i>
                                      </span>
                                      <select class="form-control" id="contact_type" required="" name="type" aria-required="true"><option value="">يرجى الاختيار</option><option value="supplier">الموردين</option><option value="customer" selected="selected">العملاء</option><option value="both">مورد وعميل</option></select>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 mt-15">
                              <label class="radio-inline">
                                  <input type="radio" name="contact_type_radio" id="inlineRadio1" value="individual">
                                  فردي                </label>
                              <label class="radio-inline">
                                  <input type="radio" name="contact_type_radio" id="inlineRadio2" value="business">
                                  النشاط                </label>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label for="contact_id">معرف الاتصال:</label>
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="fa fa-id-badge"></i>
                                      </span>
                                      <input class="form-control" placeholder="معرف الاتصال" name="contact_id" type="text" id="contact_id">
                                  </div>
                                  <p class="help-block">
                                      اتركه فارغًا للإنشاء التلقائي                    </p>
                              </div>
                          </div>
                          <div class="col-md-4 customer_fields">
                              <div class="form-group">
                                <label for="customer_group_id">مجموعة العملاء:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-users"></i>
                                    </span>
                                    <select class="form-control" id="customer_group_id" name="customer_group_id"><option value="" selected="selected">لا احد</option></select>
                                </div>
                              </div>
                          </div>
                          <div class="clearfix customer_fields"></div>
                          <div class="col-md-4 business" style="display: none;">
                              <div class="form-group">
                                  <label for="supplier_business_name">اسم النشاط:</label>
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="fa fa-briefcase"></i>
                                      </span>
                                      <input class="form-control" placeholder="اسم النشاط" name="supplier_business_name" type="text" id="supplier_business_name">
                                  </div>
                              </div>
                          </div>
              
                          <div class="clearfix"></div>
              
                          <div class="col-md-3 individual" style="display: none;">
                              <div class="form-group">
                                  <label for="prefix">اللقب:</label>
                                  <input class="form-control" placeholder="السيد السيدة الآنسة" name="prefix" type="text" id="prefix">
                              </div>
                          </div>
                          <div class="col-md-3 individual" style="display: none;">
                              <div class="form-group">
                                  <label for="first_name">الاسم:*</label>
                                  <input class="form-control" required="" placeholder="الاسم" name="first_name" type="text" id="first_name" aria-required="true">
                              </div>
                          </div>
                          <div class="col-md-3 individual" style="display: none;">
                              <div class="form-group">
                                  <label for="middle_name">الاسم الوسطى:</label>
                                  <input class="form-control" placeholder="الاسم الوسطى" name="middle_name" type="text" id="middle_name">
                              </div>
                          </div>
                          <div class="col-md-3 individual" style="display: none;">
                              <div class="form-group">
                                  <label for="last_name">اسم العائلة:</label>
                                  <input class="form-control" placeholder="اسم العائلة" name="last_name" type="text" id="last_name">
                              </div>
                          </div>
                          <div class="clearfix"></div>
                      
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label for="mobile">الموبايل:*</label>
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="fa fa-mobile"></i>
                                      </span>
                                      <input class="form-control" required="" placeholder="الموبايل" name="mobile" type="text" id="mobile" aria-required="true">
                                  </div>
                              </div>
                          </div>
              
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label for="alternate_number">الموبايل البديل:</label>
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="fa fa-phone"></i>
                                      </span>
                                      <input class="form-control" placeholder="الموبايل البديل" name="alternate_number" type="text" id="alternate_number">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label for="landline">الهاتف:</label>
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="fa fa-phone"></i>
                                      </span>
                                      <input class="form-control" placeholder="الهاتف" name="landline" type="text" id="landline">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label for="email">البريد الإلكتروني:</label>
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="fa fa-envelope"></i>
                                      </span>
                                      <input class="form-control" placeholder="البريد الإلكتروني" name="email" type="email" id="email">
                                  </div>
                              </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-sm-4 individual" style="display: none;">
                              <div class="form-group">
                                  <label for="dob">تاريخ الولادة:</label>
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                      </span>
                                      
                                      <input class="form-control dob-date-picker" placeholder="تاريخ الولادة" readonly="" name="dob" type="text" id="dob">
                                  </div>
                              </div>
                          </div>
              
                          <!-- lead additional field -->
                          <div class="col-md-4 lead_additional_div" style="display: none;">
                            <div class="form-group">
                                <label for="crm_source">Source:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fas fa fa-search"></i>
                                    </span>
                                    <select class="form-control" id="crm_source" name="crm_source"><option selected="selected" value="">يرجى الاختيار</option></select>
                                </div>
                            </div>
                          </div>
                          
                          <div class="col-md-4 lead_additional_div" style="display: none;">
                            <div class="form-group">
                                <label for="crm_life_stage">Life Stage:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fas fa fa-life-ring"></i>
                                    </span>
                                    <select class="form-control" id="crm_life_stage" name="crm_life_stage"><option selected="selected" value="">يرجى الاختيار</option></select>
                                </div>
                            </div>
                          </div>
              
                          <!-- User in create leads -->
                          <div class="col-md-6 lead_additional_div" style="display: none;">
                                <div class="form-group">
                                    <label for="user_id">Assigned to:*</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <select class="form-control select2 select2-hidden-accessible" id="user_id" multiple="" required="" style="width: 100%;" name="user_id[]" tabindex="-1" aria-hidden="true" aria-required="true"><option value="3"> ss </option></select><span class="select2 select2-container select2-container--default" dir="rtl" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                          </div>
              
                          <!-- User in create customer & supplier -->
                                          <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="assigned_to_users">Assigned to:</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <select class="form-control select2 select2-hidden-accessible" id="assigned_to_users" multiple="" style="width: 100%;" name="assigned_to_users[]" tabindex="-1" aria-hidden="true"><option value="3"> ss </option></select><span class="select2 select2-container select2-container--default" dir="rtl" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                              </div>
                          
                          <div class="clearfix"></div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <button type="button" class="btn btn-primary center-block more_btn" data-target="#more_div">مزيد من المعلومات <i class="fa fa-chevron-down"></i></button>
                          </div>
              
                          <div id="more_div" class="hide">
                              <input id="position" name="position" type="hidden">
                              <div class="col-md-12"><hr></div>
              
                              <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="tax_number">الرقم الضريبي:</label>
                                      <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        <input class="form-control" placeholder="الرقم الضريبي" name="tax_number" type="text" id="tax_number">
                                      </div>
                                  </div>
                              </div>
              
                              <div class="col-md-4 opening_balance">
                                <div class="form-group">
                                    <label for="opening_balance">الرصيد الافتتاحي:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fas fa-money-bill-alt"></i>
                                        </span>
                                        <input class="form-control input_number" name="opening_balance" type="text" value="0" id="opening_balance">
                                    </div>
                                </div>
                              </div>
              
                              <div class="col-md-4 pay_term">
                                <div class="form-group">
                                  <div class="multi-input">
                                    <label for="pay_term_number">فترة الدفع:</label> <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="المدفوعات التي يتعين دفعها مقابل المشتريات في الفترة الزمنية المحددة. <br/> <small class = 'text-muted'> سيتم عرض جميع الدفعات المعلقة والحالية في الرئيسية - القسم المستحق للدفع </small>" data-html="true" data-trigger="hover"></i>                      <br>
                                    <input class="form-control width-40 pull-left" placeholder="فترة الدفع" name="pay_term_number" type="number" id="pay_term_number">
              
                                    <select class="form-control width-60 pull-left" name="pay_term_type"><option selected="selected" value="">يرجى الاختيار</option><option value="months">الأشهر</option><option value="days">الأيام</option></select>
                                  </div>
                                </div>
                              </div>
                              <div class="clearfix"></div>
                                              <div class="col-md-4 customer_fields">
                                <div class="form-group">
                                    <label for="credit_limit">الحد الائتماني:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fas fa-money-bill-alt"></i>
                                        </span>
                                        <input class="form-control input_number" name="credit_limit" type="text" id="credit_limit">
                                    </div>
                                    <p class="help-block">تبقى فارغة من دون حدود</p>
                                </div>
                              </div>
                              
              
                              <div class="col-md-12"><hr></div>
                              <div class="clearfix"></div>
                              
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="address_line_1">العنوان الأول:</label>
                                      <input class="form-control" placeholder="العنوان الأول" rows="3" name="address_line_1" type="text" id="address_line_1">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="address_line_2">سطر العنوان 2:</label>
                                      <input class="form-control" placeholder="سطر العنوان 2" rows="3" name="address_line_2" type="text" id="address_line_2">
                                  </div>
                              </div>
                              <div class="clearfix"></div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="city">المدينة:</label>
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="fa fa-map-marker"></i>
                                      </span>
                                      <input class="form-control" placeholder="المدينة" name="city" type="text" id="city">
                                  </div>
                              </div>
                            </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="state">الولاية:</label>
                              <div class="input-group">
                                  <span class="input-group-addon">
                                      <i class="fa fa-map-marker"></i>
                                  </span>
                                  <input class="form-control" placeholder="الولاية" name="state" type="text" id="state">
                              </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="country">البلد:</label>
                              <div class="input-group">
                                  <span class="input-group-addon">
                                      <i class="fa fa-globe"></i>
                                  </span>
                                  <input class="form-control" placeholder="البلد" name="country" type="text" id="country">
                              </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="zip_code">الرمز البريدي:</label>
                              <div class="input-group">
                                  <span class="input-group-addon">
                                      <i class="fa fa-map-marker"></i>
                                  </span>
                                  <input class="form-control" placeholder="الرمز البريدي" name="zip_code" type="text" id="zip_code">
                              </div>
                          </div>
                        </div>
              
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                          <hr>
                        </div>
                                  <div class="col-md-3">
                          <div class="form-group">
                              <label for="custom_field1">حقل مخصص 1:</label>
                              <input class="form-control" placeholder="حقل مخصص 1" name="custom_field1" type="text" id="custom_field1">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="custom_field2">حقل مخصص 2:</label>
                              <input class="form-control" placeholder="حقل مخصص 2" name="custom_field2" type="text" id="custom_field2">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="custom_field3">حقل مخصص 3:</label>
                              <input class="form-control" placeholder="حقل مخصص 3" name="custom_field3" type="text" id="custom_field3">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="custom_field4">حقل مخصص 4:</label>
                              <input class="form-control" placeholder="حقل مخصص 4" name="custom_field4" type="text" id="custom_field4">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="custom_field5">حقل مخصص 5:</label>
                              <input class="form-control" placeholder="حقل مخصص 5" name="custom_field5" type="text" id="custom_field5">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="custom_field6">حقل مخصص 6:</label>
                              <input class="form-control" placeholder="حقل مخصص 6" name="custom_field6" type="text" id="custom_field6">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="custom_field7">حقل مخصص 7:</label>
                              <input class="form-control" placeholder="حقل مخصص 7" name="custom_field7" type="text" id="custom_field7">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="custom_field8">حقل مخصص 8:</label>
                              <input class="form-control" placeholder="حقل مخصص 8" name="custom_field8" type="text" id="custom_field8">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="custom_field9">حقل مخصص 9:</label>
                              <input class="form-control" placeholder="حقل مخصص 9" name="custom_field9" type="text" id="custom_field9">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="custom_field10">حقل مخصص 10:</label>
                              <input class="form-control" placeholder="حقل مخصص 10" name="custom_field10" type="text" id="custom_field10">
                          </div>
                        </div>
                        <div class="col-md-12 shipping_addr_div"><hr></div>
                        <div class="col-md-8 col-md-offset-2 shipping_addr_div mb-10">
                            <strong>عنوان الشحن</strong><br>
                            <input class="form-control" placeholder="عنوان البحث" id="shipping_address" name="shipping_address" type="text">
                          <div class="mb-10" id="map"></div>
                        </div>
                        
                                                                                                  </div>
                      </div>
                          </div>
                  
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">حفظ</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
                  </div>
              
                  </form>
                
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog --></div>
</section>
          

         @if(auth()->user()->can('sell.view') || auth()->user()->can('direct_sell.view'))
            @if(!empty($all_locations))
              	<!-- sales chart start -->
              	<div class="row">
              		<div class="col-sm-12">
                        @component('components.widget', ['class' => 'box-primary', 'title' => __('home.sells_last_30_days')])
                          {!! $sells_chart_1->container() !!}
                        @endcomponent
              		</div>
              	</div>
            @endif
            @if(!empty($widgets['after_sales_last_30_days']))
                @foreach($widgets['after_sales_last_30_days'] as $widget)
                    {!! $widget !!}
                @endforeach
            @endif
            @if(!empty($all_locations))
              	<div class="row">
              		<div class="col-sm-12">
                        @component('components.widget', ['class' => 'box-primary', 'title' => __('home.sells_current_fy')])
                          {!! $sells_chart_2->container() !!}
                        @endcomponent
              		</div>
              	</div>
            @endif
        @endif
      	<!-- sales chart end -->
        @if(!empty($widgets['after_sales_current_fy']))
            @foreach($widgets['after_sales_current_fy'] as $widget)
                {!! $widget !!}
            @endforeach
        @endif
      	<!-- products less than alert quntity -->
      	<div class="row">
            @if(auth()->user()->can('sell.view') || auth()->user()->can('direct_sell.view'))
                <div class="col-sm-6">
                    @component('components.widget', ['class' => 'box-warning'])
                      @slot('icon')
                        <i class="fa fa-exclamation-triangle text-yellow" aria-hidden="true"></i>
                      @endslot
                      @slot('title')
                        {{ __('lang_v1.sales_payment_dues') }} @show_tooltip(__('lang_v1.tooltip_sales_payment_dues'))
                      @endslot
                        <div class="row">
                            @if(count($all_locations) > 1)
                                <div class="col-md-6 col-sm-6 col-md-offset-6 mb-10">
                                    {!! Form::select('sales_payment_dues_location', $all_locations, null, ['class' => 'form-control select2', 'placeholder' => __('lang_v1.select_location'), 'id' => 'sales_payment_dues_location']); !!}
                                </div>
                            @endif
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped" id="sales_payment_dues_table" style="width: 100%;">
                                    <thead>
                                      <tr>
                                        <th>@lang( 'contact.customer' )</th>
                                        <th>@lang( 'sale.invoice_no' )</th>
                                        <th>@lang( 'home.due_amount' )</th>
                                        <th>@lang( 'messages.action' )</th>
                                      </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    @endcomponent
                </div>
            @endif
            @can('purchase.view')
                <div class="col-sm-6">
                    @component('components.widget', ['class' => 'box-warning'])
                    @slot('icon')
                    <i class="fa fa-exclamation-triangle text-yellow" aria-hidden="true"></i>
                    @endslot
                    @slot('title')
                    {{ __('lang_v1.purchase_payment_dues') }} @show_tooltip(__('tooltip.payment_dues'))
                    @endslot
                    <div class="row">
                        @if(count($all_locations) > 1)
                            <div class="col-md-6 col-sm-6 col-md-offset-6 mb-10">
                                {!! Form::select('purchase_payment_dues_location', $all_locations, null, ['class' => 'form-control select2', 'placeholder' => __('lang_v1.select_location'), 'id' => 'purchase_payment_dues_location']); !!}
                            </div>
                        @endif
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped" id="purchase_payment_dues_table" style="width: 100%;">
                                <thead>
                                  <tr>
                                    <th>@lang( 'purchase.supplier' )</th>
                                    <th>@lang( 'purchase.ref_no' )</th>
                                    <th>@lang( 'home.due_amount' )</th>
                                    <th>@lang( 'messages.action' )</th>
                                  </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    @endcomponent
                </div>
            @endcan
        </div>
        @can('stock_report.view')
            <div class="row">
                <div class="@if((session('business.enable_product_expiry') != 1) && auth()->user()->can('stock_report.view')) col-sm-12 @else col-sm-6 @endif">
                    @component('components.widget', ['class' => 'box-warning'])
                      @slot('icon')
                        <i class="fa fa-exclamation-triangle text-yellow" aria-hidden="true"></i>
                      @endslot
                      @slot('title')
                        {{ __('home.product_stock_alert') }} @show_tooltip(__('tooltip.product_stock_alert'))
                      @endslot
                      <div class="row">
                            @if(count($all_locations) > 1)
                                <div class="col-md-6 col-sm-6 col-md-offset-6 mb-10">
                                    {!! Form::select('stock_alert_location', $all_locations, null, ['class' => 'form-control select2', 'placeholder' => __('lang_v1.select_location'), 'id' => 'stock_alert_location']); !!}
                                </div>
                            @endif
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped" id="stock_alert_table" style="width: 100%;">
                                    <thead>
                                      <tr>
                                        <th>@lang( 'sale.product' )</th>
                                        <th>@lang( 'business.location' )</th>
                                        <th>@lang( 'report.current_stock' )</th>
                                      </tr>
                                    </thead>
                                </table>
                            </div>
                      </div>
                    @endcomponent
                </div>
                @if(session('business.enable_product_expiry') == 1)
                    <div class="col-sm-6">
                        @component('components.widget', ['class' => 'box-warning'])
                          @slot('icon')
                            <i class="fa fa-exclamation-triangle text-yellow" aria-hidden="true"></i>
                          @endslot
                          @slot('title')
                            {{ __('home.stock_expiry_alert') }} @show_tooltip( __('tooltip.stock_expiry_alert', [ 'days' =>session('business.stock_expiry_alert_days', 30) ]) )
                          @endslot
                          <input type="hidden" id="stock_expiry_alert_days" value="{{ \Carbon::now()->addDays(session('business.stock_expiry_alert_days', 30))->format('Y-m-d') }}">
                          <table class="table table-bordered table-striped" id="stock_expiry_alert_table">
                            <thead>
                              <tr>
                                  <th>@lang('business.product')</th>
                                  <th>@lang('business.location')</th>
                                  <th>@lang('report.stock_left')</th>
                                  <th>@lang('product.expires_in')</th>
                              </tr>
                            </thead>
                          </table>
                        @endcomponent
                    </div>
                @endif
      	    </div>
        @endcan
        @if(auth()->user()->can('so.view_all') || auth()->user()->can('so.view_own'))
            <div class="row" @if(!auth()->user()->can('dashboard.data'))style="margin-top: 190px !important;"@endif>
                <div class="col-sm-12">
                    @component('components.widget', ['class' => 'box-warning'])
                        @slot('icon')
                            <i class="fas fa-list-alt text-yellow fa-lg" aria-hidden="true"></i>
                        @endslot
                        @slot('title')
                            {{__('lang_v1.sales_order')}}
                        @endslot
                        <div class="row">
                        @if(count($all_locations) > 1)
                            <div class="col-md-4 col-sm-6 col-md-offset-8 mb-10">
                                {!! Form::select('so_location', $all_locations, null, ['class' => 'form-control select2', 'placeholder' => __('lang_v1.select_location'), 'id' => 'so_location']); !!}
                            </div>
                        @endif
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped ajax_view" id="sales_order_table">
                                        <thead>
                                            <tr>
                                                <th>@lang('messages.action')</th>
                                                <th>@lang('messages.date')</th>
                                                <th>@lang('restaurant.order_no')</th>
                                                <th>@lang('sale.customer_name')</th>
                                                <th>@lang('lang_v1.contact_no')</th>
                                                <th>@lang('sale.location')</th>
                                                <th>@lang('sale.status')</th>
                                                <th>@lang('lang_v1.shipping_status')</th>
                                                <th>@lang('lang_v1.quantity_remaining')</th>
                                                <th>@lang('lang_v1.added_by')</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endcomponent
                </div>
            </div>
        @endif

        @if(!empty($common_settings['enable_purchase_requisition']) && (auth()->user()->can('purchase_requisition.view_all') || auth()->user()->can('purchase_requisition.view_own')) )
            <div class="row" @if(!auth()->user()->can('dashboard.data'))style="margin-top: 190px !important;"@endif>
                <div class="col-sm-12">
                    @component('components.widget', ['class' => 'box-warning'])
                      @slot('icon')
                          <i class="fas fa-list-alt text-yellow fa-lg" aria-hidden="true"></i>
                      @endslot
                      @slot('title')
                          @lang('lang_v1.purchase_requisition')
                      @endslot
                        <div class="row">
                        @if(count($all_locations) > 1)
                            <div class="col-md-4 col-sm-6 col-md-offset-8 mb-10">
                                {!! Form::select('pr_location', $all_locations, null, ['class' => 'form-control select2', 'placeholder' => __('lang_v1.select_location'), 'id' => 'pr_location']); !!}
                            </div>
                        @endif
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped ajax_view" id="purchase_requisition_table" style="width: 100%;">
                                      <thead>
                                          <tr>
                                            <th>@lang('messages.action')</th>
                                            <th>@lang('messages.date')</th>
                                            <th>@lang('purchase.ref_no')</th>
                                            <th>@lang('purchase.location')</th>
                                            <th>@lang('sale.status')</th>
                                            <th>@lang('lang_v1.required_by_date')</th>
                                            <th>@lang('lang_v1.added_by')</th>
                                          </tr>
                                      </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endcomponent
                </div>
            </div>
        @endif

        @if(!empty($common_settings['enable_purchase_order']) && (auth()->user()->can('purchase_order.view_all') || auth()->user()->can('purchase_order.view_own')) )
            <div class="row" @if(!auth()->user()->can('dashboard.data'))style="margin-top: 190px !important;"@endif>
                <div class="col-sm-12">
                    @component('components.widget', ['class' => 'box-warning'])
                      @slot('icon')
                          <i class="fas fa-list-alt text-yellow fa-lg" aria-hidden="true"></i>
                      @endslot
                      @slot('title')
                          @lang('lang_v1.purchase_order')
                      @endslot
                        <div class="row">
                        @if(count($all_locations) > 1)
                            <div class="col-md-4 col-sm-6 col-md-offset-8 mb-10">
                                {!! Form::select('po_location', $all_locations, null, ['class' => 'form-control select2', 'placeholder' => __('lang_v1.select_location'), 'id' => 'po_location']); !!}
                            </div>
                        @endif
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped ajax_view" id="purchase_order_table" style="width: 100%;">
                                      <thead>
                                          <tr>
                                              <th>@lang('messages.action')</th>
                                              <th>@lang('messages.date')</th>
                                              <th>@lang('purchase.ref_no')</th>
                                              <th>@lang('purchase.location')</th>
                                              <th>@lang('purchase.supplier')</th>
                                              <th>@lang('sale.status')</th>
                                              <th>@lang('lang_v1.quantity_remaining')</th>
                                              <th>@lang('lang_v1.added_by')</th>
                                          </tr>
                                      </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endcomponent
                </div>
            </div>
        @endif

        @if(auth()->user()->can('access_pending_shipments_only') || auth()->user()->can('access_shipping') || auth()->user()->can('access_own_shipping') )
            @component('components.widget', ['class' => 'box-warning'])
              @slot('icon')
                  <i class="fas fa-list-alt text-yellow fa-lg" aria-hidden="true"></i>
              @endslot
              @slot('title')
                  @lang('lang_v1.pending_shipments')
              @endslot
                <div class="row">
                    @if(count($all_locations) > 1)
                        <div class="col-md-4 col-sm-6 col-md-offset-8 mb-10">
                            {!! Form::select('pending_shipments_location', $all_locations, null, ['class' => 'form-control select2', 'placeholder' => __('lang_v1.select_location'), 'id' => 'pending_shipments_location']); !!}
                        </div>
                    @endif
                    <div class="col-md-12">  
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped ajax_view" id="shipments_table">
                                <thead>
                                    <tr>
                                        <th>@lang('messages.action')</th>
                                        <th>@lang('messages.date')</th>
                                        <th>@lang('sale.invoice_no')</th>
                                        <th>@lang('sale.customer_name')</th>
                                        <th>@lang('lang_v1.contact_no')</th>
                                        <th>@lang('sale.location')</th>
                                        <th>@lang('lang_v1.shipping_status')</th>
                                        @if(!empty($custom_labels['shipping']['custom_field_1']))
                                            <th>
                                                {{$custom_labels['shipping']['custom_field_1']}}
                                            </th>
                                        @endif
                                        @if(!empty($custom_labels['shipping']['custom_field_2']))
                                            <th>
                                                {{$custom_labels['shipping']['custom_field_2']}}
                                            </th>
                                        @endif
                                        @if(!empty($custom_labels['shipping']['custom_field_3']))
                                            <th>
                                                {{$custom_labels['shipping']['custom_field_3']}}
                                            </th>
                                        @endif
                                        @if(!empty($custom_labels['shipping']['custom_field_4']))
                                            <th>
                                                {{$custom_labels['shipping']['custom_field_4']}}
                                            </th>
                                        @endif
                                        @if(!empty($custom_labels['shipping']['custom_field_5']))
                                            <th>
                                                {{$custom_labels['shipping']['custom_field_5']}}
                                            </th>
                                        @endif
                                        <th>@lang('sale.payment_status')</th>
                                        <th>@lang('restaurant.service_staff')</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div> 
                </div>
            @endcomponent
        @endif

        @if(auth()->user()->can('account.access') && config('constants.show_payments_recovered_today') == true)
            @component('components.widget', ['class' => 'box-warning'])
              @slot('icon')
                  <i class="fas fa-money-bill-alt text-yellow fa-lg" aria-hidden="true"></i>
              @endslot
              @slot('title')
                  @lang('lang_v1.payment_recovered_today')
              @endslot
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="cash_flow_table">
                        <thead>
                            <tr>
                                <th>@lang( 'messages.date' )</th>
                                <th>@lang( 'account.account' )</th>
                                <th>@lang( 'lang_v1.description' )</th>
                                <th>@lang( 'lang_v1.payment_method' )</th>
                                <th>@lang( 'lang_v1.payment_details' )</th>
                                <th>@lang('account.credit')</th>
                                <th>@lang( 'lang_v1.account_balance' ) @show_tooltip(__('lang_v1.account_balance_tooltip'))</th>
                                <th>@lang( 'lang_v1.total_balance' ) @show_tooltip(__('lang_v1.total_balance_tooltip'))</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="bg-gray font-17 footer-total text-center">
                                <td colspan="5"><strong>@lang('sale.total'):</strong></td>
                                <td class="footer_total_credit"></td>
                                <td colspan="2"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endcomponent
        @endif

        @if(!empty($widgets['after_dashboard_reports']))
          @foreach($widgets['after_dashboard_reports'] as $widget)
            {!! $widget !!}
          @endforeach
        @endif

    @endif
   <!-- can('dashboard.data') end -->
</section>
<!-- /.content -->
<div class="modal fade payment_modal" tabindex="-1" role="dialog" 
    aria-labelledby="gridSystemModalLabel">
</div>
<div class="modal fade edit_pso_status_modal" tabindex="-1" role="dialog"></div>
<div class="modal fade edit_payment_modal" tabindex="-1" role="dialog" 
    aria-labelledby="gridSystemModalLabel">
</div>
@stop
@section('javascript')
    <script src="{{ asset('js/home.js?v=' . $asset_v) }}"></script>
    <script src="{{ asset('js/payment.js?v=' . $asset_v) }}"></script>
    @includeIf('sales_order.common_js')
    @includeIf('purchase_order.common_js')
    @if(!empty($all_locations))
        {!! $sells_chart_1->script() !!}
        {!! $sells_chart_2->script() !!}
    @endif
    <script type="text/javascript">
        $(document).ready( function(){
        sales_order_table = $('#sales_order_table').DataTable({
          processing: true,
          serverSide: true,
          scrollY: "75vh",
          scrollX:        true,
          scrollCollapse: true,
          aaSorting: [[1, 'desc']],
          "ajax": {
              "url": '{{action([\App\Http\Controllers\SellController::class, 'index'])}}?sale_type=sales_order',
              "data": function ( d ) {
                    d.for_dashboard_sales_order = true;

                    if ($('#so_location').length > 0) {
                        d.location_id = $('#so_location').val();
                    }
                }
          },
          columnDefs: [ {
              "targets": 7,
              "orderable": false,
              "searchable": false
          } ],
          columns: [
              { data: 'action', name: 'action'},
              { data: 'transaction_date', name: 'transaction_date'  },
              { data: 'invoice_no', name: 'invoice_no'},
              { data: 'conatct_name', name: 'conatct_name'},
              { data: 'mobile', name: 'contacts.mobile'},
              { data: 'business_location', name: 'bl.name'},
              { data: 'status', name: 'status'},
              { data: 'shipping_status', name: 'shipping_status'},
              { data: 'so_qty_remaining', name: 'so_qty_remaining', "searchable": false},
              { data: 'added_by', name: 'u.first_name'},
          ]
        });

        @if(auth()->user()->can('account.access') && config('constants.show_payments_recovered_today') == true)

            // Cash Flow Table
            cash_flow_table = $('#cash_flow_table').DataTable({
                processing: true,
                serverSide: true,
                "ajax": {
                        "url": "{{action([\App\Http\Controllers\AccountController::class, 'cashFlow'])}}",
                        "data": function ( d ) {
                            d.type = 'credit';
                            d.only_payment_recovered = true;
                        }
                    },
                "ordering": false,
                "searching": false,
                columns: [
                    {data: 'operation_date', name: 'operation_date'},
                    {data: 'account_name', name: 'account_name'},
                    {data: 'sub_type', name: 'sub_type'},
                    {data: 'method', name: 'TP.method'},
                    {data: 'payment_details', name: 'payment_details', searchable: false},
                    {data: 'credit', name: 'amount'},
                    {data: 'balance', name: 'balance'},
                    {data: 'total_balance', name: 'total_balance'},
                ],
                "fnDrawCallback": function (oSettings) {
                    __currency_convert_recursively($('#cash_flow_table'));
                },
                "footerCallback": function ( row, data, start, end, display ) {
                    var footer_total_credit = 0;

                    for (var r in data){
                        footer_total_credit += $(data[r].credit).data('orig-value') ? parseFloat($(data[r].credit).data('orig-value')) : 0;
                    }
                    $('.footer_total_credit').html(__currency_trans_from_en(footer_total_credit));
                }
            });
        @endif

        $('#so_location').change( function(){
            sales_order_table.ajax.reload();
        });
        @if(!empty($common_settings['enable_purchase_order']))
          //Purchase table
          purchase_order_table = $('#purchase_order_table').DataTable({
              processing: true,
              serverSide: true,
              aaSorting: [[1, 'desc']],
              scrollY: "75vh",
              scrollX:        true,
              scrollCollapse: true,
              ajax: {
                  url: '{{action([\App\Http\Controllers\PurchaseOrderController::class, 'index'])}}',
                  data: function(d) {
                      d.from_dashboard = true;

                        if ($('#po_location').length > 0) {
                            d.location_id = $('#po_location').val();
                        }
                  },
              },
              columns: [
                  { data: 'action', name: 'action', orderable: false, searchable: false },
                  { data: 'transaction_date', name: 'transaction_date' },
                  { data: 'ref_no', name: 'ref_no' },
                  { data: 'location_name', name: 'BS.name' },
                  { data: 'name', name: 'contacts.name' },
                  { data: 'status', name: 'transactions.status' },
                  { data: 'po_qty_remaining', name: 'po_qty_remaining', "searchable": false},
                  { data: 'added_by', name: 'u.first_name' }
              ]
            })

            $('#po_location').change( function(){
                purchase_order_table.ajax.reload();
            });
        @endif

        @if(!empty($common_settings['enable_purchase_requisition']))
          //Purchase table
          purchase_requisition_table = $('#purchase_requisition_table').DataTable({
              processing: true,
              serverSide: true,
              aaSorting: [[1, 'desc']],
              scrollY: "75vh",
              scrollX:        true,
              scrollCollapse: true,
              ajax: {
                  url: '{{action([\App\Http\Controllers\PurchaseRequisitionController::class, 'index'])}}',
                  data: function(d) {
                      d.from_dashboard = true;

                        if ($('#pr_location').length > 0) {
                            d.location_id = $('#pr_location').val();
                        }
                  },
              },
              columns: [
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                    { data: 'transaction_date', name: 'transaction_date' },
                    { data: 'ref_no', name: 'ref_no' },
                    { data: 'location_name', name: 'BS.name' },
                    { data: 'status', name: 'status' },
                    { data: 'delivery_date', name: 'delivery_date' },
                    { data: 'added_by', name: 'u.first_name' },
              ]
            })

            $('#pr_location').change( function(){
                purchase_requisition_table.ajax.reload();
            });

            $(document).on('click', 'a.delete-purchase-requisition', function(e) {
                e.preventDefault();
                swal({
                    title: LANG.sure,
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                }).then(willDelete => {
                    if (willDelete) {
                        var href = $(this).attr('href');
                        $.ajax({
                            method: 'DELETE',
                            url: href,
                            dataType: 'json',
                            success: function(result) {
                                if (result.success == true) {
                                    toastr.success(result.msg);
                                    purchase_requisition_table.ajax.reload();
                                } else {
                                    toastr.error(result.msg);
                                }
                            },
                        });
                    }
                });
            });
        @endif

        sell_table = $('#shipments_table').DataTable({
            processing: true,
            serverSide: true,
            aaSorting: [[1, 'desc']],
            scrollY:        "75vh",
            scrollX:        true,
            scrollCollapse: true,
            "ajax": {
                "url": '{{action([\App\Http\Controllers\SellController::class, 'index'])}}',
                "data": function ( d ) {
                    d.only_pending_shipments = true;
                    if ($('#pending_shipments_location').length > 0) {
                        d.location_id = $('#pending_shipments_location').val();
                    }
                }
            },
            columns: [
                { data: 'action', name: 'action', searchable: false, orderable: false},
                { data: 'transaction_date', name: 'transaction_date'  },
                { data: 'invoice_no', name: 'invoice_no'},
                { data: 'conatct_name', name: 'conatct_name'},
                { data: 'mobile', name: 'contacts.mobile'},
                { data: 'business_location', name: 'bl.name'},
                { data: 'shipping_status', name: 'shipping_status'},
                @if(!empty($custom_labels['shipping']['custom_field_1']))
                    { data: 'shipping_custom_field_1', name: 'shipping_custom_field_1'},
                @endif
                @if(!empty($custom_labels['shipping']['custom_field_2']))
                    { data: 'shipping_custom_field_2', name: 'shipping_custom_field_2'},
                @endif
                @if(!empty($custom_labels['shipping']['custom_field_3']))
                    { data: 'shipping_custom_field_3', name: 'shipping_custom_field_3'},
                @endif
                @if(!empty($custom_labels['shipping']['custom_field_4']))
                    { data: 'shipping_custom_field_4', name: 'shipping_custom_field_4'},
                @endif
                @if(!empty($custom_labels['shipping']['custom_field_5']))
                    { data: 'shipping_custom_field_5', name: 'shipping_custom_field_5'},
                @endif
                { data: 'payment_status', name: 'payment_status'},
                { data: 'waiter', name: 'ss.first_name', @if(empty($is_service_staff_enabled)) visible: false @endif }
            ],
            "fnDrawCallback": function (oSettings) {
                __currency_convert_recursively($('#sell_table'));
            },
            createdRow: function( row, data, dataIndex ) {
                $( row ).find('td:eq(4)').attr('class', 'clickable_td');
            }
        });

        $('#pending_shipments_location').change( function(){
            sell_table.ajax.reload();
        });
    });
    </script>
@endsection

