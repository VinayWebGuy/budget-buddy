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
$(document).on('click', '.edit-incomeExpense', function() {
    $('.backdrop').addClass('active')
    $('.modal2').addClass('active')

    $('#editAmount').val($(this).attr('data-amount'))
    $('#editDate').val($(this).attr('data-date'))
    $('#editCategory').val($(this).attr('data-category'))
    $('#editMethod').val($(this).attr('data-method'))
    $('#editRemarks').val($(this).attr('data-remarks'))
    $('#editId').val($(this).attr('data-id'))
})
$(document).on('click', '.edit-clubEntry', function() {
    $('.backdrop').addClass('active')
    $('.modal2').addClass('active')

    $('#editAmount').val($(this).attr('data-amount'))
    $('#editDate').val($(this).attr('data-date'))
    $('#editType').val($(this).attr('data-type'))
    $('#editRemarks').val($(this).attr('data-remarks'))
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

const barTotalColors = [
  "#6e082a",
  "#ff0000",
  "#FF5733",
  "#FFC300",
  "#4CAF50",
  "#00BCD4",
  "#2196F3",
  "#673AB7",
  "#9C27B0",
  "#F44336",
  "#FF9800",
  "#795548",
  "#607D8B",
  "#8BC34A",
  "#FFEB3B",
  "#9E9E9E",
  "#03A9F4",
  "#E91E63",
  "#CDDC39",
];

// For Income by Category
let data_i = $('.cw_income');
let incomeValues = [];
let incomeAmountValues = [];
let barIncomeColors = [];
for (let i = 0; i < data_i.length; i++) {
  if(data_i[i].getAttribute('data-category') != "") {
    incomeValues.push(data_i[i].getAttribute('data-category'))
  }
  else {
    incomeValues.push("Unknown")
  }
  incomeAmountValues.push(Number(data_i[i].value));
  barIncomeColors.push(barTotalColors[i]);
}
if(incomeValues.length > 0) {
  new Chart("incomeCategoryChart", {
    type: "doughnut",
    data: {
      labels: incomeValues,
      datasets: [{
        backgroundColor: barIncomeColors,
        data: incomeAmountValues
      }]
    },
  });
}
// For Expense By Category
let data_e = $('.cw_expense');
let expenseValues = [];
let expenseAmountValues = [];
let barExpenseColors = [];
for (let i = 0; i < data_e.length; i++) {
  if(data_i[i].getAttribute('data-category') != "") {
    expenseValues.push(data_i[i].getAttribute('data-category'))
  }
  else {
    expenseValues.push("Unknown")
  }
  expenseAmountValues.push(Number(data_e[i].value));
  barExpenseColors.push(barTotalColors[i]);
}
if(expenseValues.length > 0) {
  new Chart("expenseCategoryChart", {
    type: "doughnut",
    data: {
      labels: expenseValues,
      datasets: [{
        backgroundColor: barExpenseColors,
        data: expenseAmountValues
      }]
    },
  });
}

// For Income by Method
let data_im = $('.mw_income');
let incomeMValues = [];
let incomeMAmountValues = [];
let barMIncomeColors = [];
for (let i = 0; i < data_im.length; i++) {
  if(data_im[i].getAttribute('data-method') != "") {
    incomeMValues.push(data_im[i].getAttribute('data-method'))
  }
  else {
    incomeMValues.push("Unknown")
  }
  incomeMAmountValues.push(Number(data_im[i].value));
  barMIncomeColors.push(barTotalColors[i]);
}
if(incomeMValues.length > 0) {
  new Chart("incomeMethodChart", {
    type: "doughnut",
    data: {
      labels: incomeMValues,
      datasets: [{
        backgroundColor: barMIncomeColors,
        data: incomeMAmountValues
      }]
    },
  });
}

// For Expense By Category
let data_em = $('.mw_expense');
let expenseMValues = [];
let expenseAmountMValues = [];
let barMExpenseColors = [];
for (let i = 0; i < data_em.length; i++) {
  if(data_em[i].getAttribute('data-method') != "") {
    expenseMValues.push(data_em[i].getAttribute('data-method'))
  }
  else {
    expenseMValues.push("Unknown")
  }
  expenseAmountMValues.push(Number(data_em[i].value));
  barMExpenseColors.push(barTotalColors[i]);
}
if(expenseMValues.length > 0) {
  new Chart("expenseMethodChart", {
    type: "doughnut",
    data: {
      labels: expenseMValues,
      datasets: [{
        backgroundColor: barMExpenseColors,
        data: expenseAmountMValues
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

$('#setup_monthly_budget').on('input', function() {
  let val = $('#setup_monthly_budget').val();
  if(val.trim().length > 0) {
    $('#setupBtn').attr('disabled', false)
  }
  else {
    $('#setupBtn').attr('disabled', true)
  }
})



$(document).ready(function () {
  $(".from_date").on("input", function () {
    var fromDateValue = $(this).val();
    var toDateInput = $(this).closest('.row').find('.to_date');
    toDateInput.prop("disabled", false);
    toDateInput.attr("min", fromDateValue);
  });
});


$(document).ready(function () {
  function toggleSidebarClass() {
      if ($(window).width() >= 1000) {
          $('body').removeClass('collapsed');
      } else {
          $('body').addClass('collapsed');
      }
  }
  $(window).resize(function () {
      toggleSidebarClass();
  });
  toggleSidebarClass();
});


$('.single-notificiation').on('click', function() {
  let id = $(this).attr('data-id');
  $(this).fadeOut();
  $.ajax({
    type: "GET",
    cache: false,
    data: {id: id},
    url: 'update-notification',
    success:function(response) {
    }
  })
})
