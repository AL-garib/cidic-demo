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
                <th scope="col">الإسم</th>
                <th scope="col">رقم الهوية</th>
                <th scope="col">تاريخ الميلاد</th>
                <th scope="col">مكان الميلاد</th>
                <th scope="col">تاريخ إنتهاء الهوية</th>
                <th scope="col">الجنسية</th>
                <th scope="col">المدينة</th>
              </tr>
            </thead>
            <tbody>

              <tr class="table-active">
                    <td>{{$person->name}}</td>
                    <td>{{$person->identity}}</td>
                    <td>{{$person->date_brith}}</td>
                    <td>{{$person->place_brith}}</td>
                    <td>{{$person->expiry_date_id}}</td>
                    <td>{{$person->nationality}}</td>
                    <td>{{$person->city}}</td>

              </tr>
       
            
           
              
            </tbody>
          </table> 
        </div><!-- /example -->
      </div>
    </div>
  </div>
 