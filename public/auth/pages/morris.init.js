
/**
* Theme: Minton Admin Template
* Author: Coderthemes
* Morris Chart
*/

!function($) {
    "use strict";

    var MorrisCharts = function() {};

    //creates line chart
    MorrisCharts.prototype.createLineChart = function(element, data, xkey, ykeys, labels, opacity, Pfillcolor, Pstockcolor, lineColors, time) {
        Morris.Line({
          element: element,
          data: data,
          xkey: xkey,
          ykeys: ykeys,
          labels: labels,
          fillOpacity: opacity,
          pointFillColors: Pfillcolor,
          pointStrokeColors: Pstockcolor,
          behaveLikeLine: true,
          gridLineColor: '#eef0f2',
          hideHover: 'auto',
          resize: true, //defaulted to true
          parseTime: time,
          lineColors: lineColors
        });
    },
    //creates area chart
    MorrisCharts.prototype.createAreaChart = function(element, pointSize, lineWidth, data, xkey, ykeys, labels, lineColors, time) {
        Morris.Area({
            element: element,
            pointSize: 0,
            lineWidth: 1,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            hideHover: 'auto',
            resize: true,
            gridLineColor: '#eef0f2',
            parseTime: time,
            lineColors: lineColors
        });
    },
    //creates area chart with dotted
    MorrisCharts.prototype.createAreaChartDotted = function(element, pointSize, lineWidth, data, xkey, ykeys, labels, Pfillcolor, Pstockcolor, lineColors) {
        Morris.Area({
            element: element,
            pointSize: 3,
            lineWidth: 1,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            hideHover: 'auto',
            pointFillColors: Pfillcolor,
            pointStrokeColors: Pstockcolor,
            resize: true,
            gridLineColor: '#eef0f2',
            lineColors: lineColors
        });
    },
    //creates Bar chart
    MorrisCharts.prototype.createBarChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            hideHover: 'auto',
            resize: true, //defaulted to true
            gridLineColor: '#eeeeee',
            barColors: lineColors
        });
    },
    //creates Stacked chart
    MorrisCharts.prototype.createStackedChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            stacked: true,
            labels: labels,
            hideHover: 'auto',
            resize: true, //defaulted to true
            gridLineColor: '#eeeeee',
            barColors: lineColors
        });
    },
    //creates Donut chart
    MorrisCharts.prototype.createDonutChart = function(element, data, colors) {
        Morris.Donut({
            element: element,
            data: data,
            resize: true, //defaulted to true
            colors: colors
        });
    },
    MorrisCharts.prototype.init = function() {

        //create line chart
        var $data = $('#morris-weekly-page-view').data('chart');
        this.createLineChart('morris-weekly-page-view', $data, 'week', ['lastPageViews', 'thisPageViews'], ['上週','本週'],['0.1'],['#ffffff'],['#999999'], ["#f9cd48", "#29b6f6"], false);

        var $data = $('#morris-weekly-visitors').data('chart');
        this.createLineChart('morris-weekly-visitors', $data, 'week', ['lastVisitors', 'thisVisitors'], ['上週','本週'],['0.1'],['#ffffff'],['#999999'], ["#f9cd48", "#29b6f6"], false);

        //creating area chart
        var $areaData = [
                { y: '2009', a: 10, b: 20, c:30 },
                { y: '2010', a: 75, b: 65, c:30 },
                { y: '2011', a: 50, b: 40, c:30 },
                { y: '2012', a: 75, b: 65, c:30 },
                { y: '2013', a: 50, b: 40, c:30 },
                { y: '2014', a: 75, b: 65, c:30 },
                { y: '2015', a: 90, b: 60, c:30 }
            ];
        var $areaData = $('#morris-hourly-actions').data('chart');
        this.createAreaChart('morris-hourly-actions', 0, 0, $areaData, 'hour', ['yesterday', 'today'], ['昨天', '今天'], ["#f9cd48", "#64b5f6","#dcdcdc"], false);

        //creating area chart with dotted
        //var $areaDotData = [
        //        { y: '2009', a: 10, b: 20 },
        //        { y: '2010', a: 75,  b: 65 },
        //        { y: '2011', a: 50,  b: 40 },
        //        { y: '2012', a: 75,  b: 65 },
        //        { y: '2013', a: 50,  b: 40 },
        //        { y: '2014', a: 75,  b: 65 },
        //        { y: '2015', a: 90, b: 60 }
        //    ];
        //this.createAreaChartDotted('morris-area-with-dotted', 0, 0, $areaDotData, 'y', ['a', 'b'], ['Series A', 'Series B'],['#ffffff'],['#999999'], ["#f9cd48", "#64b5f6"]);

        //creating bar chart
        var $barData  = [
            { y: '2009', a: 100, b: 90 , c: 40 },
            { y: '2010', a: 75,  b: 65 , c: 20 },
            { y: '2011', a: 50,  b: 40 , c: 50 },
            { y: '2012', a: 75,  b: 65 , c: 95 },
            { y: '2013', a: 50,  b: 40 , c: 22 },
            { y: '2014', a: 75,  b: 65 , c: 56 },
            { y: '2015', a: 100, b: 90 , c: 60 }
        ];
        //this.createBarChart('morris-bar-example', $barData, 'y', ['a', 'b', 'c'], ['Series A', 'Series B', 'Series C'], ["#f9cd48", "#64b5f6","#dcdcdc"]);

        //creating Stacked chart
        var $stckedData  = [
            { y: '2005', a: 45, b: 180 },
            { y: '2006', a: 75,  b: 65 },
            { y: '2007', a: 100, b: 90 },
            { y: '2008', a: 75,  b: 65 },
            { y: '2009', a: 100, b: 90 },
            { y: '2010', a: 75,  b: 65 },
            { y: '2011', a: 50,  b: 40 },
            { y: '2012', a: 75,  b: 65 },
            { y: '2013', a: 50,  b: 40 },
            { y: '2014', a: 75,  b: 65 },
            { y: '2015', a: 100, b: 90 }
        ];
        //this.createStackedChart('morris-bar-stacked', $stckedData, 'y', ['a', 'b'], ['Series A', 'Series B'], ["#f9cd48", "#ededed"]);

        //creating donut chart
        var $donutData = [
                {label: "Download Sales", value: 12},
                {label: "In-Store Sales", value: 30},
                {label: "Mail-Order Sales", value: 20}
            ];
        var $donutData = $('#morris-monthly-devices').data('chart');
        this.createDonutChart('morris-monthly-devices', $donutData, ["#f9cd48", "#ededed", "#64b5f6"]);
    },
    //init
    $.MorrisCharts = new MorrisCharts, $.MorrisCharts.Constructor = MorrisCharts
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.MorrisCharts.init();
}(window.jQuery);