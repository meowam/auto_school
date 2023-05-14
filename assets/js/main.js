$(document).ready(function () {
  $('#practiceEditForm').submit(function (event) {
    event.preventDefault();
    var data = myClassicEditor.getData();
    var formData = new FormData(this);
    formData.append('editor', data);
    $.ajax({
      type: 'POST',
      url: '/scripts/practiceEdit.php',
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        alert("Дані успішно відредаговано!");
        location.reload();
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.log('Помилка: ' + xhr.status);
        console.log('Повідомлення про помилку: ' + thrownError);
      }
    });
  });

  $('#availabilityEdit').submit(function (event) {
    event.preventDefault();
    var form = $(this);
    $.ajax({
      type: form.attr('method'),
      url: form.attr('action'),
      data: form.serialize(),
      success: function (response) {
        alert("Дані успішно відредаговано!");

      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.log('Помилка: ' + xhr.status);
        console.log('Повідомлення про помилку: ' + thrownError);
      }
    });
  });


  $('#student_id').change(function () {
    $('#name_surname, #contacts-student').val('');
    if ($(this).val() !== "00") {
      $('label[for="name_surname"], label[for="contacts-student"]').hide();
      $('#name_surname, #contacts-student').hide();
    } else {
      $('label[for="name_surname"], label[for="contacts-student"]').show();
      $('#name_surname, #contacts-student').show();
    }
  });


});

document.addEventListener("DOMContentLoaded", function () {
  let ageCounts = document.querySelectorAll('.age-count');
  let data = [];
  ageCounts.forEach(function (ageCount) {
    data.push(ageCount.textContent);
  });

  new Chart(document.getElementById("chartjs-dashboard-pie"), {
    type: "pie",
    data: {
      labels: ["17-24", "25-45", "45-65", "65+"],
      datasets: [{
        data: data,
        backgroundColor: [
          window.theme.primary,
          window.theme.warning,
          window.theme.danger,
          window.theme.success,
        ],
        borderWidth: 5
      }]
    },
    options: {
      responsive: !window.MSInputMethodContext,
      maintainAspectRatio: false,
      legend: {
        display: false
      },
      cutoutPercentage: 75
    }
  });

  let practiceCounts = document.querySelectorAll('.practice-count');
  let dataPractice = [];
  practiceCounts.forEach(function (practiceCount) {
    dataPractice.push(practiceCount.textContent);
  });

  var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
  var gradient = ctx.createLinearGradient(0, 0, 0, 225);
  gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
  gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
  // Line chart
  new Chart(document.getElementById("chartjs-dashboard-line"), {
    type: "line",
    data: {
      labels: ["Січ.", "Лют.", "Берез.", "Квіт.", "Трав.", "Черв.", "Лип.", "Серп.", "Верес.", "Жовт.", "Листоп.", "Груд."],
      datasets: [{
        label: "Занять (₴)",
        fill: true,
        backgroundColor: gradient,
        borderColor: window.theme.primary,
        data: dataPractice
      }]
    },
    options: {
      maintainAspectRatio: false,
      legend: {
        display: false
      },
      tooltips: {
        intersect: false
      },
      hover: {
        intersect: true
      },
      plugins: {
        filler: {
          propagate: false
        }
      },
      scales: {
        xAxes: [{
          reverse: true,
          gridLines: {
            color: "rgba(0,0,0,0.0)"
          }
        }],
        yAxes: [{
          ticks: {
            stepSize: 4000
          },
          display: true,
          borderDash: [3, 3],
          gridLines: {
            color: "rgba(0,0,0,0.0)"
          }
        }]
      }
    }
  });

  let peopleCounts = document.querySelectorAll('.people-count');
  let dataPeople = [];
  peopleCounts.forEach(function (peopleCount) {
    dataPeople.push(peopleCount.textContent);
  });

  new Chart(document.getElementById("chartjs-dashboard-bar"), {
    type: "bar",
    data: {
      labels: ["Січ.", "Лют.", "Берез.", "Квіт.", "Трав.", "Черв.", "Лип.", "Серп.", "Верес.", "Жовт.", "Листоп.", "Груд."],
      datasets: [{
        label: "2023",
        backgroundColor: window.theme.primary,
        borderColor: window.theme.primary,
        hoverBackgroundColor: window.theme.primary,
        hoverBorderColor: window.theme.primary,
        data: dataPeople,
        barPercentage: .75,
        categoryPercentage: .5
      }]
    },
    options: {
      maintainAspectRatio: false,
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          gridLines: {
            display: false
          },
          stacked: false,
          ticks: {
            stepSize: 20
          }
        }],
        xAxes: [{
          stacked: false,
          gridLines: {
            color: "transparent"
          }
        }]
      }
    }
  });
});