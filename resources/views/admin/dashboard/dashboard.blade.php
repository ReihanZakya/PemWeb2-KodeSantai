@extends('admin.app')
  
@section('title', 'Dashboard')
  
@section('contents')
<div class="container-fluid" style="height: 100vh">


  <!-- Content Row -->
  <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Total Kategori</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-layer-group fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                              Total Modul</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $module->count() }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-tag fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                              Total Material</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $material->count() }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-tag fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

</div>
@endsection
