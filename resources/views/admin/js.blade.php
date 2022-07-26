<script>
    /*!
    * Start Bootstrap - SB Admin v7.0.5 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2022 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

// Toggle the side navigation
const sidebarToggle = document.body.querySelector('#sidebarToggle');
if (sidebarToggle) {
    // Uncomment Below to persist sidebar toggle between refreshes
    // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
    //     document.body.classList.toggle('sb-sidenav-toggled');
    // }
    sidebarToggle.addEventListener('click', event => {
        event.preventDefault();
        document.body.classList.toggle('sb-sidenav-toggled');
        localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
    });
}

});




window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }
});


// chart area
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';


// // Set new default font family and font color to mimic Bootstrap's default styling
// Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
// Chart.defaults.global.defaultFontColor = '#292b2c';

// // Bar Chart Example
// var ctx = document.getElementById("myBarChart ");
// var myLineChart = new Chart(ctx, {
//   type: 'bar',
//   data: {
//     labels: ["block 1", "block 2", "block 3", "block 4", "block 5"],
//     datasets: [{
//       label: "Students",
//       backgroundColor: "rgba(2,117,216,1)",
//       borderColor: "rgba(2,117,216,1)",
//       data: [215, 312, 251, 841, 981, 984],
//     }],
//   },
//   options: {
//     scales: {
//       xAxes: [{
//         time: {
//           unit: 'month'
//         },
//         gridLines: {
//           display: false
//         },
//         ticks: {
//           maxTicksLimit: 5
//         }
//       }],
//       yAxes: [{
//         ticks: {
//           min: 0,
//           max: 1000,
//           maxTicksLimit: 5
//         },
//         gridLines: {
//           display: true
//         }
//       }],
//     },
//     legend: {
//       display: false
//     }
//   }
// });

// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';


var users = {!! json_encode($users->toArray()) !!};
// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [

     "block 1", "block 2", "block 3", "block 4", "block 5"],
    datasets: [{
      label: "Students",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: [ 
        @php
        
 
        $c=0;
        foreach($users as $key=>$datas){
            if($datas->block=="block1"){
                $c++;
    
     }}
     echo $c;
            @endphp,
              @php
        
 
        $c=0;
        foreach($users as $key=>$datas){
            if($datas->block=="block2"){
                $c++;
    
     }}
     echo $c;
            @endphp, 
             @php
        
 
        $c=0;
        foreach($users as $key=>$datas){
            if($datas->block=="block3"){
                $c++;
    
     }}
     echo $c;
            @endphp, 
             @php
        
 
        $c=0;
        foreach($users as $key=>$datas){
            if($datas->block=="block4"){
                $c++;
    
     }}
     echo $c;
            @endphp,
              @php
        
 
        $c=0;
        foreach($users as $key=>$datas){
            if($datas->block=="block5"){
                $c++;
    
     }}
     echo $c;
            @endphp],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 5
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 10,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});



// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["registered student", "pending Requests", "non-students"],
    datasets: [{
      data: [{{count($users)}}, 15.58, 11.25],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107'],
    }],
  },
});
// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
});





</script>