@extends('person.layouts.master') 
  
 
@section('content')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="card">
      <div class="card-header">
      <h3 class="float-right">بيانات البنك :</h3>
      </div>
    
      <div class="row">
         
              <div class="col-md-8 order-md-1">


                      <form class="needs-validation"   method="POST"  action="{{ route('bank.store') }}"  novalidate>
                        {{ csrf_field() }}
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="iban">الأيبان</label>
                            <input type="text" class="form-control" id="iban" name="iban" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid first name is required.
                            </div>
                          </div>
                          
                          <div class="col-md-6 mb-3">
                            <label for="name_account">اسم صاحب الأيبان</label>
                            <input type="text" class="form-control" id="name_account" name="name_account" placeholder="" value="" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                        </div>


                        <div class="row">
                       


                           
                                  <div class="col-md-6 mb-3">
                                    <label for="country">اسم البنك</label>
                                    <select class="custom-select d-block w-100" id="country" required>
                                      <option value="name_bank">Choose...</option>
                                      <option value="name_bank">United States</option>
                                    </select>
                                    <div class="invalid-feedback">
                                      Please select a valid country.
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