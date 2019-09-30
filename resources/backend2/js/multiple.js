
// fetch('http://talhatraining.org/esp/finaljsonView.php')
fetch('https://fish-expert.com/android_apps/finaljsonView.php')
  .then(function(response) {
    return response.json();
  })
  .then(function(myJson) {

    am4core.ready(function() {

    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end

    // Create chart instance
    var chart = am4core.create("chartdiv", am4charts.XYChart);

    console.log(myJson.sensor_status.length);

     // window.setInterval(function(){
        for (i = 0; i < myJson.sensor_status.length ; i++) {  
                chart.data.push({ "time": myJson.sensor_status[i].temperature_sensor_level_time, "PH": myJson.sensor_status[i].ph_sensor_level,"Temparature": myJson.sensor_status[i].temperature_sensor_level

            });
            }
    // }, 5000);
    // add json data to chart
   
    // for (i = 0; i < 15; i++) {  
    //         chart.data.push({ "time": myJson.sensor_status[i].temperature_sensor_level_time, "PH": myJson.sensor_status[i].ph_sensor_level,"Temparature": myJson.sensor_status[i].temperature_sensor_level

    //     });
    //     }

    // console.log(jsondata);



    // Add data
    // chart.data = [{
    //   "time": "3 AM",
    //   "PH": 0,
    //   "Desolve O2": 0,
    //   "CO2": 0,
    //   "Ammonia": 0,
    //   "Temparature": 0,
    //   "NO2": 0
    // }, {
    //   "time": "6 AM",
    //   "PH": 9,
    //   "Desolve O2": 8,
    //   "CO2": 7,
    //   "Ammonia": 6,
    //   "Temparature": 5,
    //   "NO2": 4
    // }, {
    //   "time": "9 AM",
    //   "PH": 7,
    //   "Desolve O2": 5,
    //   "CO2": 3,
    //   "Ammonia": 4,
    //   "Temparature": 6,
    //   "NO2": 2
    // }, {
    //   "time": "12 AM",
    //   "PH": 8,
    //   "Desolve O2": 7,
    //   "CO2": 3,
    //   "Ammonia": 6,
    //   "Temparature": 5,
    //   "NO2": 4
    // }, {
    //   "time": "3 PM",
    //   "PH": 6,
    //   "Desolve O2": 8,
    //   "CO2": 4,
    //   "Ammonia": 3,
    //   "Temparature": 5,
    //   "NO2": 7
    // }, {
    //   "time": "6 PM",
    //   "PH": 9,
    //   "Desolve O2": 8,
    //   "CO2": 6,
    //   "Ammonia": 5,
    //   "Temparature": 2,
    //   "NO2": 4
    // }, {
    //   "time": "9 PM",
    //   "PH": 7,
    //   "Desolve O2": 5,
    //   "CO2": 3,
    //   "Ammonia": 2,
    //   "Temparature": 5,
    //   "NO2": 4
    // }, {
    //   "time": "12 PM",
    //   "PH": 10,
    //   "Desolve O2": 9,
    //   "CO2": 8,
    //   "Ammonia": 7,
    //   "Temparature": 6,
    //   "NO2": 2
    // }
    // ];

    // Create category axis
    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "time";
    categoryAxis.renderer.opposite = false;

    // Create value axis
    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    valueAxis.renderer.inversed = false
    ;valueAxis.renderer.minLabelPosition = 0.01;

    // Create series
    var series1 = chart.series.push(new am4charts.LineSeries());
    series1.dataFields.valueY = "PH";
    series1.dataFields.categoryX = "time";
    series1.name = "Potential of Hydrogen";
    series1.strokeWidth = 3;
    series1.bullets.push(new am4charts.CircleBullet());
    series1.stroke = am4core.color("#67B7DC");
    series1.fill = am4core.color("#67B7DC");
    series1.tooltipText = "{name} at {categoryX}: {valueY}";
    series1.legendSettings.valueText = "{valueY}";
    series1.visible  = false;

    // var series2 = chart.series.push(new am4charts.LineSeries());
    // series2.dataFields.valueY = "Desolve O2";
    // series2.dataFields.categoryX = "time";
    // series2.name = 'Desolve O2';
    // series2.strokeWidth = 3;
    // series2.bullets.push(new am4charts.CircleBullet());
    // series2.stroke = am4core.color("#6794DC");
    // series2.fill = am4core.color("#6794DC");
    // series2.tooltipText = "{name} at {categoryX}: {valueY}";
    // series2.legendSettings.valueText = "{valueY}";

    // var series3 = chart.series.push(new am4charts.LineSeries());
    // series3.dataFields.valueY = "CO2";
    // series3.dataFields.categoryX = "time";
    // series3.name = 'Carbon Dioxide';
    // series3.strokeWidth = 3;
    // series3.bullets.push(new am4charts.CircleBullet());
    // series3.stroke = am4core.color("#6771DC");
    // series3.fill = am4core.color("#6771DC");
    // series3.tooltipText = "{name} at {categoryX}: {valueY}";
    // series3.legendSettings.valueText = "{valueY}";

    // var series4 = chart.series.push(new am4charts.LineSeries());
    // series4.dataFields.valueY = "Ammonia";
    // series4.dataFields.categoryX = "time";
    // series4.name = 'Ammonia';
    // series4.strokeWidth = 3;
    // series4.bullets.push(new am4charts.CircleBullet());
    // series4.stroke = am4core.color("#000000");
    // series4.fill = am4core.color("#000000");
    // series4.tooltipText = "{name} at {categoryX}: {valueY}";
    // series4.legendSettings.valueText = "{valueY}";

    var series5 = chart.series.push(new am4charts.LineSeries());
    series5.dataFields.valueY = "Temparature";
    series5.dataFields.categoryX = "time";
    series5.name = 'Temparature';
    series5.strokeWidth = 3;
    series5.bullets.push(new am4charts.CircleBullet());
    series5.stroke = am4core.color("#912E2F");
    series5.fill = am4core.color("#912E2F");
    series5.tooltipText = "{name} at {categoryX}: {valueY}";
    series5.legendSettings.valueText = "{valueY}";

    // var series6 = chart.series.push(new am4charts.LineSeries());
    // series6.dataFields.valueY = "NO2";
    // series6.dataFields.categoryX = "time";
    // series6.name = 'Nuclear Opacity 2';
    // series6.strokeWidth = 3;
    // series6.bullets.push(new am4charts.CircleBullet());
    // series6.stroke = am4core.color("#D5433D");
    // series6.fill = am4core.color("#D5433D");
    // series6.tooltipText = "{name} at {categoryX}: {valueY}";
    // series6.legendSettings.valueText = "{valueY}";

    series.showOnInit = false;
    // Add chart cursor
    chart.cursor = new am4charts.XYCursor();
    chart.cursor.behavior = "zoomY";

    // Add legend
    chart.legend = new am4charts.Legend();

    }); // end am4core.ready()



  });



