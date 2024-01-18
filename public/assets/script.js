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

$('.head-action').click(function() {
    $('.backdrop').addClass('active')
    $('.modal').addClass('active')
})
$('.edit-data').click(function() {
    $('.backdrop').addClass('active')
    $('.modal2').addClass('active')
})
$('.close-modal').click(function() {
    $('.backdrop').removeClass('active')
    $('.modal').removeClass('active')
    $('.modal2').removeClass('active')
})


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