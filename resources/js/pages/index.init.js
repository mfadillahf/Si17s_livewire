/**
 * Theme: Rizz - Bootstrap 5 Responsive Admin Dashboard
 * Author: Mannatthemes
 * Analytics Dashboard Js
 */

import {series} from '../../data/stock-prices.js'
// Audience Overview
import ApexCharts from 'apexcharts/dist/apexcharts'

window.ApexCharts = ApexCharts

import jsVectorMap from 'jsvectormap'
import 'jsvectormap/dist/maps/world-merc'
import 'jsvectormap/dist/maps/world'

var options = {
    series: [{
        data: series.monthDataSeries1.prices
    }],
    chart: {
        height: 280,
        type: "area",
        toolbar: {
            show: false,
        },
        dropShadow: {
            enabled: true,
            top: 12,
            left: 0,
            bottom: 0,
            right: 0,
            blur: 2,
            color: "rgba(132, 145, 183, 0.3)",
            opacity: 0.35,
        },
    },
    annotations: {
        xaxis: [{
            x: 312,
            strokeDashArray: 4,
            borderWidth: 1,
            borderColor: ["var(--bs-secondary)"],
        },],
        points: [{
            x: 312,
            y: 52,
            marker: {
                size: 6,
                fillColor: ["var(--bs-primary)"],
                strokeColor: ["var(--bs-card-bg)"],
                strokeWidth: 4,
                radius: 5,
            },
            label: {
                borderWidth: 1,
                offsetY: -110,
                text: '50k',
                style: {
                    background: ["var(--bs-primary)"],
                    fontSize: '14px',
                    fontWeight: '600',
                }
            }
        }],
    },
    colors: ["#22c55e", "rgba(106, 155, 155, 0.3)"],
    dataLabels: {
        enabled: false,
    },
    stroke: {
        show: true,
        curve: "smooth",
        width: [3, 3],
        dashArray: [0, 0],
        lineCap: "round",
    },
    series: [{
        name: "Income",
        data: [31, 40, 28, 51, 31, 40, 28, 51, 31, 40, 28, 51],
    },
        {
            name: "Expenses",
            data: [0, 30, 10, 40, 30, 60, 50, 80, 70, 100, 90, 130],
        },
    ],
    labels: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
    ],

    yaxis: {
        labels: {
            offsetX: -12,
            offsetY: 0,
            formatter: function (value) {
                return "$" + value;
            }
        },
    },
    grid: {
        strokeDashArray: 3,
        xaxis: {
            lines: {
                show: true,
            },
        },
        yaxis: {
            lines: {
                show: false,
            },
        },
    },
    legend: {
        show: false,
    },

    fill: {
        type: "gradient",
        gradient: {
            type: "vertical",
            shadeIntensity: 1,
            inverseColors: !1,
            opacityFrom: 0.05,
            opacityTo: 0.05,
            stops: [45, 100],
        },
    },
};

var chart = new ApexCharts(document.querySelector("#audience_overview"), options);
chart.render();


// Visitors

var options = {
    series: [{
        name: "Visitors",
        data: [20, 38, 38, 72, 55, 63, 43],
    },],
    chart: {
        height: 230,
        type: "bar",
        toolbar: {
            show: false,
        },
    },
    fill: {
        type: "gradient",
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 1,
            colorStops: [{
                offset: 0,
                color: "rgba(106, 155, 155, 0.4)",
                opacity: 1,
            },
                {
                    offset: 100,
                    color: "rgba(106, 155, 155, 0.4)",
                    opacity: 1,
                },
            ],
        },
    },

    plotOptions: {
        bar: {
            columnWidth: "55%",
            endingShape: "rounded",
            borderRadius: 5,
        },
    },
    dataLabels: {
        enabled: false,
    },
    legend: {
        show: false,
    },
    yaxis: {

        labels: {
            show: false,
        },
    },
    grid: {
        strokeDashArray: 3,
        xaxis: {
            lines: {
                show: false,
            },
        },
        yaxis: {
            lines: {
                show: false,
            },
        },
    },
    xaxis: {
        type: "week",
        categories: [
            "Sun",
            "Mon",
            "Tue",
            "Wed",
            "Thu",
            "Fri",
            "Sat",
        ],
        axisBorder: {
            show: false,
            color: "rgba(119, 119, 142, 0.05)",
            offsetX: 0,
            offsetY: 0,
        },
        axisTicks: {
            show: false,
            borderType: "solid",
            color: "rgba(119, 119, 142, 0.05)",
            width: 6,
            offsetX: 0,
            offsetY: 0,
        },
        labels: {
            rotate: -90,
            style: {
                colors: "rgb(107 ,114 ,128)",
                fontSize: "12px",
            },
        },
    },
};
var chart1 = new ApexCharts(document.querySelector("#visitors_report"), options);
chart1.render();

// Map

var map_2 = new jsVectorMap({
    map: 'world',
    selector: '#map_2',
    mapBgColor: '#F7F8F9',
    zoomOnScroll: false,
    zoomButtons: false,
    markers: [{
        name: "Greenland",
        coords: [72, -42]
    },
        {
            name: "Canada",
            coords: [56.1304, -106.3468]
        },
        {
            name: "Brazil",
            coords: [-14.2350, -51.9253]
        },
        {
            name: "Egypt",
            coords: [26.8206, 30.8025]
        },
        {
            name: "Russia",
            coords: [61, 105]
        },
        {
            name: "China",
            coords: [35.8617, 104.1954]
        },
        {
            name: "United States",
            coords: [37.0902, -95.7129]
        },
        {
            name: "Norway",
            coords: [60.472024, 8.468946]
        },
        {
            name: "Ukraine",
            coords: [48.379433, 31.16558]
        },
    ],
    lines: [{
        from: "Canada",
        to: "Egypt"
    },
        {
            from: "Russia",
            to: "Egypt"
        },
        {
            from: "Greenland",
            to: "Egypt"
        },
        {
            from: "Brazil",
            to: "Egypt"
        },
        {
            from: "United States",
            to: "Egypt"
        },
        {
            from: "China",
            to: "Egypt"
        },
        {
            from: "Norway",
            to: "Egypt"
        },
        {
            from: "Ukraine",
            to: "Egypt"
        },
    ],
    labels: {
        markers: {
            render: marker => marker.name
        },
    },
    lineStyle: {
        animation: true,
        strokeDasharray: "6 3 6",
    },
    regionStyle: {
        initial: {
            fill: 'rgba(169,183,197, 0.3)',
            fillOpacity: 1,
        },
    },
    markerStyle: {
        initial: {
            r: 5, // Marker width
            fill: '#22c55e', // Marker color
            fillOpacity: 1, // The opacity of the marker shape
            stroke: '#FFF', // Stroke
            strokeWidth: 1, // the stroke width
            strokeOpacity: .65, // The stroke opacity
        },
        // All options in initial object can be overitten in hover, selected, selectedHover object as well.
        hover: {
            stroke: 'black',
            cursor: 'pointer',
            strokeWidth: 2,
        },
        selected: {
            fill: 'blue'
        },
        selectedHover: {
            fill: 'red'
        }
    },
});


// Traffic Sources
var options = {
    series: [76],
    chart: {
        height: '325',
        type: 'radialBar',
        offsetY: -20,
        sparkline: {
            enabled: true
        }
    },
    plotOptions: {
        radialBar: {
            startAngle: -90,
            endAngle: 90,
            hollow: {
                size: '75%',
                position: 'front',
            },
            track: {
                background: ["rgba(42, 118, 244, .18)"],
                strokeWidth: '80%',
                opacity: 0.5,
                margin: 5,
            },
            dataLabels: {
                name: {
                    show: false
                },
                value: {
                    offsetY: -2,
                    fontSize: '20px'
                }
            }
        }
    },
    stroke: {
        lineCap: 'butt'
    },
    colors: ["#95a0c5"],
    grid: {
        padding: {
            top: -10
        }
    },

    labels: ['Average Results'],
    responsive: [{
        breakpoint: 1150,
        options: {
            chart: {
                height: '150',
            },
        }
    }]
};

var chart = new ApexCharts(document.querySelector("#traffic_sources"), options);
chart.render();
