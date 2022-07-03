    function drawChart(params, type) {
  
        let typeChart = type;
        var arrObjects = [];

    for (let key in params) {
      if (params.hasOwnProperty(key)) {
        value = params[key];
        arrObjects.push({
          value: Number(value),
          parameter: key
        });
      }
    }

    var root = am5.Root.new("chartdiv");

    root.setThemes([
      am5themes_Animated.new(root),
      am5themes_Dark.new(root)
    ]);

    var chart = makeChart(typeChart);

    var yAxis, xAxis
    if (typeChart == 'xy_chart') {
      yAxis = makeAxisY();
      xAxis = makeAxisX();
      xAxis.data.setAll(arrObjects);
    }
        
    var series = makeSeries(typeChart);

    series.data.setAll(arrObjects);2

        function makeChart(type) {
          if (type == 'xy_chart') {
            var chart = root.container.children.push( 
              am5xy.XYChart.new(root, {
                panY: false,
                wheelY: "zoomX",
                layout: root.verticalLayout
              }) 
            );
          }
          if (type == 'pie') {
            var chart = root.container.children.push( 
              am5percent.PieChart.new(root, {
                    layout: root.verticalLayout
              })
            );
          }
          
          return chart;
        }

        function makeAxisY() {
          let yAxis = chart.yAxes.push(
            am5xy.ValueAxis.new(root, {
              renderer: am5xy.AxisRendererY.new(root, {
              })
            })
          );

          return yAxis
        }

        function makeAxisX() {
          var xAxis = chart.xAxes.push(
            am5xy.CategoryAxis.new(root, {
                maxDeviation: 0,
                renderer: am5xy.AxisRendererX.new(root, {
              }),
              categoryField: "parameter"
            })
          );

          xAxis.get("renderer").labels.template.setAll({
            oversizedBehavior: "wrap",
            maxWidth: 150
          });

          return xAxis
        }

        function makeSeries(type) {
          if (type == 'xy_chart') {
            var series = chart.series.push( 
              am5xy.ColumnSeries.new(root, { 
                name: "",
                xAxis: xAxis, 
                yAxis: yAxis, 
                valueYField: "value", 
                categoryXField: "parameter",
              }) 
            );
          }
          if (type == 'pie') {

            var series = chart.series.push(
              am5percent.PieSeries.new(root, {
                name: "Series",
                valueField: "value",
                categoryField: "parameter"
            })
            );
           
          }
         
          return series
        }       
    }
