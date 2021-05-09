// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

var dataPieReturn=[];
function getData(){
  $.ajax({
    async: false, 
    url:"http://localhost/pondok-sambal/admin/dashboard/getPieChart",
    method:"POST",
    data:{},
    success:function(data){ 
        dataPieReturn.push(data[0].total_positive);
        dataPieReturn.push(data[0].total_negative);
      }
    });
};

getData();

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Positive", "Negative"],
    datasets: [{
      data: dataPieReturn,
      backgroundColor: ['#1cc88a', '#e74a3b'],
      hoverBackgroundColor: ['#17a673', '#e02d1b'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
