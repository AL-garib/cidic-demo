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
                <th scope="col">رقم الجوال</th>
                <th scope="col">البريد الاكتروني</th>
                <th scope="col">العنوان</th>
                <th scope="col">رقم جوال شخص قريب </th>
               
              </tr>
            </thead>
            <tbody>

           
              <tr class="table-active">
             <td>{{ $communication->phone}}</td>
             <td>{{ $communication->email}} </td>
             <td>{{ $communication->address}} </td>
             <td>{{ $communication->phone_near_person}} </td>
             </tr>     
          
             
        
            
           
              
            </tbody>
          </table> 
        </div><!-- /example -->
      </div>
    </div>
  </div>
   
  @endsection