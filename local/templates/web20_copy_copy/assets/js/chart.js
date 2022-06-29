
console.log('script works');
    function drawChart(params, type) {
    
      // console.log(i);
        console.log(params)
        console.log(type)
        let typeChart = type;
        console.log(typeChart)
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
    console.log(arrObjects);

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

    series.data.setAll(arrObjects);

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
            console.log('ffffff');
            var chart = root.container.children.push( 
              am5percent.PieChart.new(root, {
                    layout: root.verticalLayout
              })
            );
          }
  
          console.log(type);

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
                maxDeviation: 0.1,
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
