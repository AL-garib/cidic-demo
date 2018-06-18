 @extends('person.layouts.master') 
  
 
  @section('content')

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="card">
        <div class="card-header">
        <h3 class="float-right">بياناتي الشخصية  :</h3>
        </div>
      
        <div class="row">
           
                <div class="col-md-8 order-md-1">


                        <form class="needs-validation" novalidate>
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="firstName">الإسم</label>
                              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                              <div class="invalid-feedback">
                                Valid first name is required.
                              </div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                              <label for="lastName">رقم الهوية</label>
                              <input type="text" class="form-control" id="س" placeholder="" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                          </div>


                          <div class="row">
                          <div class="col-md-6 mb-3">
                                <label for="place_date">تاريخ الميلاد</label>
                                <input type="date" class="form-control" id="place_date" placeholder="" required>
                                <div class="invalid-feedback">
                                  Please enter your shipping address.
                                </div>
                              </div>


                             
                                    <div class="col-md-6 mb-3">
                                      <label for="country">مكان الميلاد</label>
                                      <select class="custom-select d-block w-100" id="country" required>
                                        <option value="">Choose...</option>
                                        <option>United States</option>
                                      </select>
                                      <div class="invalid-feedback">
                                        Please select a valid country.
                                      </div>
                                    </div>
                          </div>


                          <div class="row">
                              <div class="col-md-6 mb-2">
                                    <label for="place_date">تاريخ إنهاء الهوية</label>
                                    <input type="date" class="form-control" id="place_date" placeholder="" required>
                                    <div class="invalid-feedback">
                                      Please enter your shipping address.
                                    </div>
                                  </div>
              
              
                   
              
                           
                            <div class="col-md-6 mb-3">
                              <label for="country">الجنسية</label>
                              <select class="custom-select d-block w-100" id="country" required>
                                <option value="">Choose...</option>
                                <option>United States</option>
                              </select>
                              <div class="invalid-feedback">
                                Please select a valid country.
                              </div>
                            </div>
                          

                            <div class="col-md-6 mb-3">
                              <label for="state">المدينة</label>
                              <select class="custom-select d-block w-100" id="state" required>
                                <option value="">Choose...</option>
                                <option>California</option>
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