/*!
 * Remark Material (http://getbootstrapadmin.com/remark)
 * Copyright 2017 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */

!function(global,factory){if("function"==typeof define&&define.amd)define("/charts/chartjs",["jquery","Site"],factory);else if("undefined"!=typeof exports)factory(require("jquery"),require("Site"));else{var mod={exports:{}};factory(global.jQuery,global.Site),global.chartsChartjs=mod.exports}}(this,function(_jquery,_Site){"use strict";var _jquery2=babelHelpers.interopRequireDefault(_jquery),Site=babelHelpers.interopRequireWildcard(_Site);(0,_jquery2.default)(document).ready(function($){Site.run()}),Chart.defaults.global.responsive=!0,function(){var lineChartData={labels:["January","February","March","April","May","June","July"],datasets:[{label:"First",fill:!0,backgroundColor:"rgba(204, 213, 219, .1)",borderColor:Config.colors("grey",300),pointRadius:4,borderDashOffset:2,pointBorderColor:"#fff",pointBackgroundColor:Config.colors("grey",300),pointHoverBackgroundColor:"#fff",pointHoverBorderColor:Config.colors("grey",300),data:[65,59,80,81,56,55,40]},{label:"Second",fill:!0,backgroundColor:"rgba(98, 168, 234, .1)",borderColor:Config.colors("primary",600),pointRadius:4,borderDashOffset:2,pointBorderColor:"#fff",pointBackgroundColor:Config.colors("primary",600),pointHoverBackgroundColor:"#fff",pointHoverBorderColor:Config.colors("primary",600),data:[28,48,40,19,86,27,90]}]};new Chart(document.getElementById("exampleChartjsLine").getContext("2d"),{type:"line",data:lineChartData,options:{responsive:!0,scales:{xAxes:[{display:!0}],yAxes:[{display:!0}]}}})}(),function(){var barChartData={labels:["January","February","March","April","May","June","July"],datasets:[{label:"First",backgroundColor:"rgba(204, 213, 219, .2)",borderColor:Config.colors("grey",300),hoverBackgroundColor:"rgba(204, 213, 219, .3)",borderWidth:2,data:[65,45,75,50,60,45,55]},{label:"Second",backgroundColor:"rgba(98, 168, 234, .2)",borderColor:Config.colors("primary",600),hoverBackgroundColor:"rgba(98, 168, 234, .3)",borderWidth:2,data:[30,20,40,25,45,35,40]}]};new Chart(document.getElementById("exampleChartjsBar").getContext("2d"),{type:"bar",data:barChartData,options:{responsive:!0,scales:{xAxes:[{display:!0}],yAxes:[{display:!0}]}}})}(),function(){var radarChartData={labels:["Eating","Drinking","Sleeping","Designing","Coding","Partying","Running"],pointLabelFontSize:14,datasets:[{label:"First",pointRadius:4,borderDashOffset:2,backgroundColor:"rgba(98, 168, 234, .15)",borderColor:"rgba(0,0,0,0)",pointBackgroundColor:Config.colors("primary",600),pointBorderColor:"#fff",pointHoverBackgroundColor:"#fff",pointHoverBorderColor:Config.colors("primary",600),data:[65,59,90,81,56,55,40]},{label:"Second",pointRadius:4,borderDashOffset:2,backgroundColor:"rgba(250,122,122,0.25)",borderColor:"rgba(0,0,0,0)",pointBackgroundColor:Config.colors("red",500),pointBorderColor:"#fff",pointHoverBackgroundColor:"#fff",pointHoverBorderColor:Config.colors("red",500),data:[28,48,40,19,96,27,100]}]};new Chart(document.getElementById("exampleChartjsRadar").getContext("2d"),{type:"radar",data:radarChartData,options:{responsive:!0,scale:{ticks:{beginAtZero:!0}}}})}(),function(){var chartData={datasets:[{data:[300,200,150,100],backgroundColor:[Config.colors("red",400),Config.colors("green",400),Config.colors("yellow",400),Config.colors("blue",400)],label:"My dataset"}],labels:["Red","Green","Yellow","Blue"]};new Chart(document.getElementById("exampleChartjsPloarArea").getContext("2d"),{data:chartData,type:"polarArea",options:{responsive:!0,elements:{arc:{borderColor:"#ffffff"}}}})}(),function(){var pieData={labels:["Red","Blue","Yellow"],datasets:[{data:[300,50,100],backgroundColor:[Config.colors("red",400),Config.colors("green",400),Config.colors("yellow",400)],hoverBackgroundColor:[Config.colors("red",600),Config.colors("green",600),Config.colors("yellow",600)]}]};new Chart(document.getElementById("exampleChartjsPie").getContext("2d"),{type:"pie",data:pieData,options:{responsive:!0}})}(),function(){var doughnutData={labels:["Red","Blue","Yellow"],datasets:[{data:[300,50,100],backgroundColor:[Config.colors("red",400),Config.colors("green",400),Config.colors("yellow",400)],hoverBackgroundColor:[Config.colors("red",600),Config.colors("green",600),Config.colors("yellow",600)]}]};new Chart(document.getElementById("exampleChartjsDonut").getContext("2d"),{type:"doughnut",data:doughnutData,options:{responsive:!0}})}()});