$(document).ready(function() {

    // Select2 for select boxes
    $('.js-example-basic-single').select2();

    // Summernote for rich text editor
    $('#summernote').summernote({
        placeholder: 'توضیحات کامل تر خود را اینجا درج کنید',
        tabsize: 20,
        height: 100
    });

    $("[type=file]").text("jvhv");

    // let path = window.location.href;
    // let target = $('[href="' + path + '"]');
    // target.addClass('active');

    let path = window.location.href;
    $('[href="' + path + '"]').addClass('active');
});

// const current_location = location.href;
// const menu_item = document.querySelector('#sidebarMenu').querySelector('a');
// const menu_length = menu_item.length;
// for (let i = 0; i < menu_length; i++) {
//     if (menu_item[i].href === current_location) {
//         menu_item[i].className = "active";
//     }
// }

// Graph
var ctx = document.getElementById("myChart");

var myChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ],
    datasets: [
      {
        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
        lineTension: 0,
        backgroundColor: "transparent",
        borderColor: "#007bff",
        borderWidth: 4,
        pointBackgroundColor: "#007bff",
      },
    ],
  },
  options: {
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: false,
          },
        },
      ],
    },
    legend: {
      display: false,
    },
  },
});
