@extends('layouts.main')

@section('content')
  <main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Dashboard</h1>
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="card text-black mb-4" style="background-color: #FFF0F5">
            <div class="card-body">User</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <a class="small text-black stretched-link" href="#">{{ $user }}</a>
              <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-warning text-white mb-4">
            <div class="card-body">About Company</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <a class="small text-white stretched-link" href="#">{{ $abouts }}</a>
              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-success text-white mb-4">
            <div class="card-body">Category</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <a class="small text-white stretched-link" href="#">{{ $category }}</a>
              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-danger text-white mb-4">
            <div class="card-body">Product</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <a class="small text-white stretched-link" href="#">{{ $product }}</a>
              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-md-12">
          <canvas id="myChart" style="width:100%;height:400px;"></canvas>
        </div>
      </div>

      <script>
        const xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
        const yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

        new Chart("myChart", {
          type: "line",
          data: {
            labels: xValues,
            datasets: [{
              fill: false,
              lineTension: 0,
              backgroundColor: "rgba(0,0,255,1.0)",
              borderColor: "rgba(0,0,255,0.1)",
              data: yValues
            }]
          },
          options: {
            legend: {
              display: false
            },
            scales: {
              yAxes: [{
                ticks: {
                  min: 6,
                  max: 16
                }
              }],
            }
          }
        });
      </script>
    @endsection
