/**
 * Theme: Rizz - Bootstrap 5 Responsive Admin Dashboard
 * Author: Mannatthemes
 * Analytics Reports Js
 */
import ApexCharts from "apexcharts/dist/apexcharts";

var chart = {
  series: [
    {
      name: "2024",
      data: [ 2.7, 2.2, 1.3, 2.5, 1, 2.5, 1.2, 1.2, 2.7, 1, 3.6, 2.1,],
    },
    {
      name: "2023",
      data: [ -2.3, -1.9, -1, -2.1, -1.3, -2.2, -1.1, -2.3, -2.8, -1.1, -2.5, -1.5,],
    },
  ],
  chart: {
    toolbar: {
      show: false,
    },
    type: "bar",
    fontFamily: "inherit",
    foreColor: "#adb0bb",
    height: 292,
    stacked: true,
    offsetX: -15,
  },
  colors: ["var(--bs-primary)", "var(--bs-secondary)"],
  plotOptions: {
    bar: {
      horizontal: false,
      barHeight: "80%",
      columnWidth: "12%",
      borderRadius: [3],
      borderRadiusApplication: "end",
      borderRadiusWhenStacked: "all",
    },
  },
  dataLabels: {
    enabled: false,
  },
  legend: {
    show: false,
  },
  grid: {
    show: true,
    strokeDashArray: 3,
    padding: {
      top: 0,
      bottom: 0,
      right: 0,
    },
    borderColor: "rgba(0,0,0,0.05)",
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
  yaxis: {
    min: -5,
    max: 5,
  },
  xaxis: {
    axisBorder: {
      show: false,
    },
    axisTicks: {
      show: false,
    },
    categories: [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "July",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ],
  },
  yaxis: {
    tickAmount: 4,
  },
};

var chart = new ApexCharts(
  document.querySelector("#reports-bar"),
  chart
);
chart.render();