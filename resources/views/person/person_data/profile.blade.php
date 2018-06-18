 @extends('person.layouts.master') 
  
 
  @section('content')

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="card">
        <div class="card-header">
        <h3 class="float-right">بياناتي الشخصية  :</h3>
        </div>
      
        <div class="row">
           
                <div class="col-md-8 order-md-1">


                <form class="needs-validation" method="POST" action="{{route('personal.store')}}" novalidate>
                  {{ csrf_field() }}
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="firstName">الإسم</label>
                              <input type="text" class="form-control" id="firstName" name="name" placeholder="" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                              <label for="identity">رقم الهوية</label>
                              <input type="text" class="form-control" id="identity" name="identity" placeholder="" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                          </div>


                          <div class="row">
                          <div class="col-md-6 mb-3">
                                <label for="date_brith">تاريخ الميلاد</label>
                                <input type="date" class="form-control" id="date_brith" name="date_brith" placeholder="" required>
                                <div class="invalid-feedback">
                                  Please enter your shipping address.
                                </div>
                              </div>


                             
                                    <div class="col-md-6 mb-3">
                                      <label for="place_brith">مكان الميلاد</label>
                                      <select class="custom-select d-block w-100"  name="place_brith" id="country" required>
                                        <option value="">Choose...</option>
                                        <option value="مكة">مكة</option>
                                      </select>
                                      <div class="invalid-feedback">
                                        Please select a valid country.
                                      </div>
                                    </div>
                          </div>


                          <div class="row">
                              <div class="col-md-6 mb-2">
                                    <label for="expiry_date_id">تاريخ إنهاء الهوية</label>
                                    <input type="date" class="form-control" id="expiry_date_id" name="expiry_date_id" placeholder="" required>
                                    <div class="invalid-feedback">
                                      Please enter your shipping address.
                                    </div>
                                  </div>
              
              
                   
              
                           
                            <div class="col-md-6 mb-3">
                              <label for="nationality">الجنسية</label>
                              <select class="custom-select d-block w-100" name="nationality" id="nationality" required>
                                <option value="">Choose...</option>
                                <option value="سعودي ">سعودي </option>
                              </select>
                              <div class="invalid-feedback">
                                Please select a valid country.
                              </div>
                            </div>
                          

                            <div class="col-md-6 mb-3">
                              <label for="city">المدينة</label>
                              <select class="custom-select d-block w-100" name="city" id="city" required>
                                <option value="">Choose...</option>
                                <option value="جدة">جدة</option>
                              </select>
                              <div class="invalid-feedback">
                                Please provide a valid state.
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