@extends('person.layouts.master') 
  
 
@section('content')

<div class="bs-docs-section text-right">

    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1 id="tables">بياناتي البنكية</h1>
        </div>

        <div class="bs-component">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">الايبان</th>
                <th scope="col">اسم صاحب الايبان</th>
                <th scope="col">اسم البنك</th>
               
              </tr>
            </thead>
            <tbody>
       
              <tr class="table-active">
                <td>{{$bank->iban}}</td>
                <td>{{$bank->name_account}}
                <td>{{$bank->name_bank}} 
              </tr>
             
     
            
           
              
            </tbody>
          </table> 
        </div><!-- /example -->
      </div>
    </div>
  </div>
  @endsection