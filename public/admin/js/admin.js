$(document).ready(function() {

    // Select2 for select boxes
    // $('.js-example-basic-single').select2();

    // Summernote for rich text editor
    $('#summernote').summernote({
        placeholder: 'توضیحات کامل تر خود را اینجا درج کنید',
        tabsize: 20,
        height: 100,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });

    // $("[type=file]").text("jvhv");

    // Dark Mode
    $("#dark-mode").on("click", function () {
        if ($("#dark-mode").is(":checked")) {
            $("body").addClass('dark');
            $("nav").addClass('dark');
            $(".card").addClass('dark');
            $("#sidebarMenu .list-group-item").addClass('dark');
        } else {
            $("*").removeClass('dark');
        }
    });


    // let path = window.location.href;
    // let target = $('[href="' + path + '"]');
    // target.addClass('active');

    let path = window.location.href;
    $('[href="' + path + '"]').addClass('active');

    $(".side-dropdown-btn").on("click", function () {
        $(this).toggleClass("active");
        if ($(this).hasClass("active")) {
            $(".side-dropdown-btn").not(this).removeClass("active");
        }
    });

    if ($(".side-dropdown-item").attr("href") === path) {
        let active =  $(".side-dropdown-item[href=" + path + "]");
        active.parents().css("display", "block");
    }



    // let dropdown = $("#sidebarMenu .dropdown");
    // let i;
    // for (i = 0; i < dropdown.length; i++) {
    //     dropdown[i].on("click", function () {
    //         $(this).toggleClass("active");
    //         let dropdownContent = $(this).nextElementSibling;
    //         if (dropdownContent.css("display") === "block") {
    //             dropdownContent.css("display", "none");
    //         } else {
    //             dropdownContent.css("display", "block");
    //         }
    //     });
    // }

    // let dropdown = $("#sidebarMenu .dropdown");
    // let i;
    //
    // for (i = 0; i < dropdown.length; i++) {
    //     dropdown[i].addEventListener("click", function() {
    //         this.classList.toggle("active");
    //         let dropdownContent = this.nextElementSibling;
    //         if (dropdownContent.style.display === "block") {
    //             dropdownContent.style.display = "none";
    //         } else {
    //             dropdownContent.style.display = "block";
    //         }
    //     });
    // }
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
