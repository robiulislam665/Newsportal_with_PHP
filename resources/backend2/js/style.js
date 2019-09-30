
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}

(function(document) {
  'use strict';

  var LightTableFilter = (function(Arr) {

    var _input;
    var _select;

    function _onInputEvent(e) {
      _input = e.target;
      var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
      Arr.forEach.call(tables, function(table) {
        Arr.forEach.call(table.tBodies, function(tbody) {
          Arr.forEach.call(tbody.rows, _filter);
        });
      });
    }
    
    function _onSelectEvent(e) {
      _select = e.target;
      var tables = document.getElementsByClassName(_select.getAttribute('data-table'));
      Arr.forEach.call(tables, function(table) {
        Arr.forEach.call(table.tBodies, function(tbody) {
          Arr.forEach.call(tbody.rows, _filterSelect);
        });
      });
    }

    function _filter(row) {
      
      var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';

    }
    
    function _filterSelect(row) {
     
      var text_select = row.textContent.toLowerCase(), val_select = _select.options[_select.selectedIndex].value.toLowerCase();
      row.style.display = text_select.indexOf(val_select) === -1 ? 'none' : 'table-row';

    }

    return {
      init: function() {
        var inputs = document.getElementsByClassName('light-table-filter');
        var selects = document.getElementsByClassName('select-table-filter');
        Arr.forEach.call(inputs, function(input) {
          input.oninput = _onInputEvent;
        });
        Arr.forEach.call(selects, function(select) {
         select.onchange  = _onSelectEvent;
        });
      }
    };
  })(Array.prototype);

  document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
      LightTableFilter.init();
    }
  });


  var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
        datasets: [{
          label: '# Sales',
          data: [12, 19, 3, 5, 2, 3,10, 18, 3, 5, 2, 3],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    //end bar chart

    //pie chart
    var randomScalingFactor = function() {
      return Math.round(Math.random() * 100);
    };

    var config = {
      type: 'pie',
      data: {
        datasets: [{
          data: [
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          ],
          backgroundColor: [
          window.chartColors.red,
          'rgb(0,255,255)',
          'rgb(128,128,0)',
          window.chartColors.orange,
          window.chartColors.yellow,
          window.chartColors.green,
          window.chartColors.blue,
          ],
          label: 'Dataset 1'
        }],
        labels: [
        'Rangpur',
        'Rajshahi',
        'Dhaka',
        'Chittagong',
        'Barisal',
        'Sylhet',
        'Khulna'
        ]
      },
      options: {
        responsive: true
      }
    };

    window.onload = function() {
      var ctx = document.getElementById('chart-area').getContext('2d');
      window.myPie = new Chart(ctx, config);
    };

    document.getElementById('randomizeData').addEventListener('click', function() {
      config.data.datasets.forEach(function(dataset) {
        dataset.data = dataset.data.map(function() {
          return randomScalingFactor();
        });
      });

      window.myPie.update();
    });

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function() {
      var newDataset = {
        backgroundColor: [],
        data: [],
        label: 'New dataset ' + config.data.datasets.length,
      };

      for (var index = 0; index < config.data.labels.length; ++index) {
        newDataset.data.push(randomScalingFactor());

        var colorName = colorNames[index % colorNames.length];
        var newColor = window.chartColors[colorName];
        newDataset.backgroundColor.push(newColor);
      }

      config.data.datasets.push(newDataset);
      window.myPie.update();
    });

    document.getElementById('removeDataset').addEventListener('click', function() {
      config.data.datasets.splice(0, 1);
      window.myPie.update();
    });

        //endpie chart


})(document);

$(document).ready(function() {
  $('#date-picker').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });
  $('#date-range-picker').daterangepicker(null, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });

  $('#date-time-picker').daterangepicker({
    singleDatePicker: true,
    timePicker: true,
    timePickerIncrement: 30,
    format: 'MM/DD/YYYY h:mm A'
  }, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });

  //gauge chart
    var chart1 = am4core.createFromConfig({
      // Set inner radius
      "innerRadius": -15,

      // Add axis
      "xAxes": [{
        // Set axis type and settings
        "type": "ValueAxis",
        "min": 0,
        "max": 100,
        "strictMinMax": true,

        // Add axis ranges
        "axisRanges": [{
          "value": 0,
          "endValue": 50,
          "axisFill": {
            "fillOpacity": 1,
            "fill": "#67b7dc"
          }
        }, {
          "value": 50,
          "endValue": 80,
          "axisFill": {
            "fillOpacity": 1,
            "fill": "#6771dc"
          }
        }, {
          "value": 80,
          "endValue": 100,
          "axisFill": {
            "fillOpacity": 1,
            "fill": "#a367dc"
          }
        }]
      }],

      // Add hand
      "hands": [{
        "type": "ClockHand",
        "id": "h1"
      }]
    }, "chartdiv_gauge", "GaugeChart");

    // Change hand position
    setInterval(function () {
      var hand = chart1.hands.getIndex(0);
      hand.showValue(Math.random() * 100, 1000, am4core.ease.cubicOut);
    }, 2000);
    //end gauge chart

});

//wheather pasge js
document.getElementById("tempbtn").addEventListener("click", temp);
    document.getElementById("precbtn").addEventListener("click", prec);
    document.getElementById("windbtn").addEventListener("click", wind);
    document.getElementById("monBtn").addEventListener("click", monday);
    document.getElementById("tueBtn").addEventListener("click", tuesday);
    document.getElementById("wedBtn").addEventListener("click", wednesday);
    document.getElementById("thuBtn").addEventListener("click", thursday);
    document.getElementById("friBtn").addEventListener("click", friday);
    document.getElementById("satBtn").addEventListener("click", saterday);
    document.getElementById("sunBtn").addEventListener("click", sunday);
    document.getElementById("monBtn").addEventListener("click", monday);


    function temp() {
      $('#slider-holder').show();
      $('.prec').hide();
      $('.winddiv').hide();
    }

    function prec() {
      $('#slider-holder').hide();
      $('.prec').show();
      $('.winddiv').hide();
    }

    function wind() {
      $('#slider-holder').hide();
      $('.prec').hide();
      $('.winddiv').show(); 
    }

    function monday() {
    $('.day').text("Monday"); 
    $('.day-wheather').text("Thunderstorm");
    $('.precipitation').text("60%");  
    $('.humidity').text("68%"); 
    $('.wind').text("19 km/h");   
    $('.temperature').text("34"); 


  }

    function tuesday() {
    $('.day').text("Tuesday");  
    $('.day-wheather').text("Scattered Thunderstorms");
    $('.precipitation').text("50%");  
    $('.humidity').text("80%"); 
    $('.wind').text("18 km/h"); 
    $('.temperature').text("30"); 


  }
    function wednesday() {
    $('.day').text("Wednesday");  
    $('.day-wheather').text("Thunderstorm");
    $('.precipitation').text("80%");  
    $('.humidity').text("77%"); 
    $('.wind').text("18 km/h"); 
    $('.temperature').text("32"); 


  }
    function thursday() {
    $('.day').text("Thursday"); 
    $('.day-wheather').text("Scattered Thunderstorms");
    $('.precipitation').text("60%");  
    $('.humidity').text("72%"); 
    $('.wind').text("18 km/h"); 
    $('.temperature').text("35"); 


  }
    function friday() {
    $('.day').text("Friday"); 
    $('.day-wheather').text("Scattered Thunderstorms");
    $('.precipitation').text("40%");  
    $('.humidity').text("72%"); 
    $('.wind').text("18 km/h"); 
    $('.temperature').text("33"); 

  }
    function saterday() {
    $('.day').text("Saterday"); 
    $('.day-wheather').text("Thunderstorm");
    $('.precipitation').text("50%");  
    $('.humidity').text("71%"); 
    $('.wind').text("16 km/h"); 
    $('.temperature').text("31"); 


  }


    function sunday() {
    $('.day').text("Sunday"); 
    $('.day-wheather').text("Isolated Thunderstorms");
    $('.precipitation').text("30%");  
    $('.humidity').text("69%"); 
    $('.wind').text("16 km/h"); 
    $('.temperature').text("34"); 


  }



