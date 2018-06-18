@extends('person.layouts.master') 
  
 
@section('content')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="card">
      <div class="card-header">
      <h3 class="float-right">بيانات التةاصل:</h3>
      </div>
    
      <div class="row">
         
              <div class="col-md-8 order-md-1">


              <form class="needs-validation"  method="POST" action="{{route('Communication.store')}}" novalidate>
                {{ csrf_field() }}

                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="phone">رقم الجوال</label>
                            <input type="phone" class="form-control" id="phone" name="phone" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid first name is required.
                            </div>
                          </div>
                          
                          <div class="col-md-6 mb-3">
                            <label for="email">البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                        </div>


                        <div class="row">
                                <div class="col-md-6 mb-3">
                                        <label for="address">العنوان</label>
                                        <input type="texts" class="form-control" id="address" name="address" placeholder="" value="" required>
                                        <div class="invalid-feedback">
                                          Valid last name is required.
                                        </div>
                                      </div>
                                    </div>
            


                           
                                    <div class="col-md-6 mb-3">
                                            <label for="phone_near_person">رقم جوال شخص قريب</label>
                                            <input type="email" class="form-control" id="phone_near_person" name="phone_near_person" placeholder="" value="" required>
                                            <div class="invalid-feedback">
                                              Valid last name is required.
                                            </div>
                                          </div>
                                        </div>
                
    
                        </div>

 
                         
                      
                     
                      
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">حفظ</button>
                        <br>
                      </form>
                    </div>
                 

    </div>

    @endsection