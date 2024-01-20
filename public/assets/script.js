$('.toggle-sidebar').click(function () {
    $('body').toggleClass('collapsed')
})

$(document).ready(function () {
    $(".notification-header i, .settings-header i, .profile-header i").click(function (e) {
        e.stopPropagation();
        $(".header-icon-box").removeClass("active");
        $(this).siblings(".header-icon-box").toggleClass("active");
    });

    $(document).click(function (event) {
        if (!$(event.target).closest('.header-icon-box').length) {
            $(".header-icon-box").removeClass("active");
        }
    });
});

$(document).on('click', '.head-action', function() {
    $('.backdrop').addClass('active')
    $('.modal').addClass('active')
})
$(document).on('click', '.edit-category', function() {
    $('.backdrop').addClass('active')
    $('.modal2').addClass('active')

    $('#editName').val($(this).attr('data-name'))
    $('#editId').val($(this).attr('data-id'))
})
$(document).on('click', '.delete-data', function() {
  $('#delete-id').val('');
    $('.backdrop').addClass('active')
    $('.modal3').addClass('active')
    $('#deleteId').val($(this).attr('data-id'));
})
$(document).on('click', '.close-modal', function() {
    $('.backdrop').removeClass('active')
    $('.modal').removeClass('active')
    $('.modal2').removeClass('active')
    $('.modal3').removeClass('active')
})
$(document).on('click', '#cancel-delete', function() {
  $('.backdrop').removeClass('active')
  $('.modal3').removeClass('active')
})


if(chart) {
  const xValues = ["Income", "Expense"];
  let incomeVal = Number($('#incomeVal').val());
  let expenseVal = Number($('#expenseVal').val());

  const yValues = [incomeVal, expenseVal];
  const barColors = [
    "#6e082a",
    "#ff0000",
  ];

  new Chart("incomeExpenseChart", {
    type: "pie",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
  });
}

$('#income_period').change(function() {
  let val = $(this).val()

  if(val == "custom") {
    $('.incomeRange').addClass('active')
  }
  else {
    $('.incomeRange').removeClass('active')
  }
})
$('#expense_period').change(function() {
  let val = $(this).val()

  if(val == "custom") {
    $('.expenseRange').addClass('active')
  }
  else {
    $('.expenseRange').removeClass('active')
  }
})
$('#overall_period').change(function() {
  let val = $(this).val()

  if(val == "custom") {
    $('.overallRange').addClass('active')
  }
  else {
    $('.overallRange').removeClass('active')
  }
})

$(document).on('click', '.close-success-modal', function() {
  location.reload()
  $('.backdrop').removeClass('active')
  $('.success-modal').removeClass('active')
})
$(document).on('click', '.close-error-modal', function() {
  $('.backdrop').removeClass('active')
  $('.error-modal').removeClass('active')
})