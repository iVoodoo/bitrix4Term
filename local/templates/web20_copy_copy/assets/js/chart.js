
// var dataCHART ;

// arElements = function (arParams) {
//   if (typeof arParams === 'object')
//   {
//     // console.log(arParams);
//     this.arParams = arParams;
//     // dataCHART = arParams;
//     // let dataCHART = arParams;
//     // data = arParams
//     // console.log(typeof arParams);
//     // console.log(data);
//     // dataCHART = data;
//     // console.log(dataCHART);
//     // return dataCHART
//   }
// };
// console.log(window['dataCHART']);




// BX.ready(function(){
//     am5.ready(function() {

//         // Create root element
//         // https://www.amcharts.com/docs/v5/getting-started/#Root_element
//         var root = am5.Root.new("chartdiv");
        
        
//         // Set themes
//         // https://www.amcharts.com/docs/v5/concepts/themes/
//         root.setThemes([
//           am5themes_Animated.new(root)
//         ]);
        
        
//         // Create chart
//         // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
//         var chart = root.container.children.push(am5percent.PieChart.new(root, {
//           layout: root.verticalLayout,
//           innerRadius: am5.percent(50)
//         }));
        
        
//         // Create series
//         // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
//         var series = chart.series.push(am5percent.PieSeries.new(root, {
//           valueField: "value",
//           categoryField: "key",
//           alignLabels: true
//         }));
        
//         series.labels.template.setAll({
//           textType: "adjusted",
//           centerX: 0,
//           centerY: 0
//         });
        
        
//         // Set data

       
//         // let chartDataString = document.getElementById("chartdiv").getAttribute('data-attr');
//         // console.log(chartDataString)
//         // const json = '"'+ chartDataString + '"';
//         // let chartDataObject = JSON.parse(json);
//         // console.log(chartDataString);
//         // console.log(chartDataObject);
//         // console.log(chartData[0]);
//         // typeof chartData;

// //         const json = "{'result':true, 'count':42}";
// // const obj = JSON.parse(json);

// // console.log(obj)
// // console.log(obj.count);
// // // expected output: 42

// // console.log(obj.result);
// // expected output: true


//         // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
//         series.data.setAll([
//           { value: 110, statsItem: "One" },
//           { value: 9, statsItem: "Two" },
//           { value: 6, statsItem: "Three" },
//           { value: 5, statsItem: "Four" },
//           { value: 4, statsItem: "Five" },
//           { value: 3, statsItem: "Six" },
//           { value: 1, statsItem: "Seven" },
//         ]);
        
//         // series.data.setAll(chartData);

//         // Create legend
//         // https://www.amcharts.com/docs/v5/charts/percent-charts/legend-percent-series/
//         var legend = chart.children.push(am5.Legend.new(root, {
//           centerX: am5.percent(50),
//           x: am5.percent(50),
//           marginTop: 15,
//           marginBottom: 15,
//         }));
        
//         legend.data.setAll(series.dataItems);
        
        
//         // Play initial series animation
//         // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
//         series.appear(1000, 200);
        
//         });
// });



// am5.ready(function() {

//          // Create root element
//          // https://www.amcharts.com/docs/v5/getting-started/#Root_element
//          var root = am5.Root.new("chartdiv");
      
      
//          // Set themes
//          // https://www.amcharts.com/docs/v5/concepts/themes/
//          root.setThemes([
//            am5themes_Animated.new(root)
//          ]);
      
      
//          // Create chart
//          // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
//          var chart = root.container.children.push(am5percent.PieChart.new(root, {
//            layout: root.verticalLayout,
//            innerRadius: am5.percent(50)
//          }));
      
      
//          // Create series
//          // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
//          var series = chart.series.push(am5percent.PieSeries.new(root, {
//            valueField: "value",
//            categoryField: "statsItem",
//            alignLabels: true
//          }));
      
//          series.labels.template.setAll({
//            textType: "adjusted",
//            centerX: 0,
//            centerY: 0
//          });
      
      
//          // Set data
//          // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
//          series.data.setAll([
//            { value: 110, statsItem: "One" },
//            { value: 9, statsItem: "Two" },
//            { value: 6, statsItem: "Three" },
//            { value: 5, statsItem: "Four" },
//            { value: 4, statsItem: "Five" },
//            { value: 3, statsItem: "Six" },
//            { value: 1, statsItem: "Seven" },
//          ]);
      
      
//          // Create legend
//          // https://www.amcharts.com/docs/v5/charts/percent-charts/legend-percent-series/
//          var legend = chart.children.push(am5.Legend.new(root, {
//            centerX: am5.percent(50),
//            x: am5.percent(50),
//            marginTop: 15,
//            marginBottom: 15,
//          }));
      
//          legend.data.setAll(series.dataItems);
      
      
//          // Play initial series animation
//          // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
//          series.appear(1000, 200);

//         });

// chartData = function(params) {
//   this.params = params;
//   console.log(params);
// };

// console.debug(chartData(params))
// console.log(ourJsObj);
// chartData = new Object();
// console.log(chartData)
// window.print("hey")