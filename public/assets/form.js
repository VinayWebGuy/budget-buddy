$('#setupForm').on('submit', function(e) {
    e.preventDefault();
    let monthly_budget = $('#setup_monthly_budget').val();
    let currency = $('#setup_currency').val();
    $('.loader').addClass('active')
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        cache: false,
        data: {monthly_budget: monthly_budget, currency: currency},
        url: 'setup',
        success: function(response) {
            $('.loader').removeClass('active')
            $('.poppers').addClass('active');
            $('.setup-form-box').remove();
            setTimeout(() => {
                $('.poppers').fadeOut('slow');
            }, 2000);
            setTimeout(() => {
                $('.poppers').removeClass('active');
            }, 3000);
                
        }
    })
});
$('#updateBudget').on('submit', function(e) {
    e.preventDefault();
    let budget = $('#budget').val();
    if(budget > 0) {
        $('.loader').addClass('active')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            cache: false,
            data: {budget: budget},
            url: 'update-budget',
            success: function(response) {
                $('.loader').removeClass('active')
                $('.backdrop').removeClass('active')
                $('.modal').removeClass('active')
                successModal("Congratulations! Budget Updated Successfully!");
            }
        })
    }
    else {
        errorModal("Budget can not be 0!")
    }
});

// Category
$('#addCategoryForm').on('submit', function(e) {
    e.preventDefault();
    let name = $('#name').val();
    if(name.trim().length > 0) {
        $('.loader').addClass('active')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            cache: false,
            data: {name: name},
            url: 'save-category',
            success: function(response) {
                $('#addCategoryForm')[0].reset();
                $('.loader').removeClass('active')
                if(response == "success") {
                    successModal("Congratulations! Category Added Successfully!");
                }
                else if(response == "duplicate") {
                    errorModal("Category name already exists!")
                }
            }
        })
    }
    else {
        errorModal("Category can not be blank!")
    }
})
$('#editCategoryForm').on('submit', function(e) {
    e.preventDefault();
    let id = $('#editId').val();
    let name = $('#editName').val();
    if(name.trim().length > 0) {
        $('.loader').addClass('active')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            cache: false,
            data: {id: id, name: name},
            url: 'update-category',
            success: function(response) {
                $('#editCategoryForm')[0].reset();
                $('.loader').removeClass('active')
                if(response == "success") {
                    successModal("Congratulations! Category Updated Successfully!");
                }
                else if(response == "duplicate") {
                    errorModal("Category name already exists!")
                }
            }
        })
    }
    else {
        errorModal("Category can not be blank!")
    }
})

$(document).on('click', '#confirm-categoryDelete', function() {
    let id = $('#deleteId').val();
    $('.loader').addClass('active')
    $.ajax({
        type: "GET",
        cache: false,
        data: {id: id},
        url: 'delete-category',
        success: function(response) {
            $('.loader').removeClass('active')
            $('.backdrop').removeClass('active')
            $('.modal3').removeClass('active')
            if(response == "deleted") {
                successModal("Congratulations! Category Deleted Successfully!");
            }
            else if(response == "error") {
                errorModal("Failed to delete the category!")
            }
        }
    })
})

// Income
$('#addIncomeForm').on('submit', function(e) {
    e.preventDefault();
    let amount = $('#amount').val();
    let date = $('#date').val();
    let category = $('#category').val();
    let method = $('#method').val();
    let remarks = $('#remarks').val();

    if(amount > 0 && date != "") {
        $('.loader').addClass('active')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            cache: false,
            data: {amount: amount, date: date, category: category, method: method, remarks: remarks},
            url: 'save-income',
            success: function(response) {
                $('#addIncomeForm')[0].reset();
                $('.loader').removeClass('active')
                if(response == "success") {
                    successModal("Congratulations! Income Added Successfully!");
                }
            }
        })
    }
    else {
        if(amount == 0) {
            errorModal("Amount can not be 0!")
        }
        if(date == "") {
            errorModal("Date can not be blank!")
        }
    }
})
$('#editIncomeForm').on('submit', function(e) {
    e.preventDefault();
    let id = $('#editId').val();
    let amount = $('#editAmount').val();
    let date = $('#editDate').val();
    let category = $('#editCategory').val();
    let method = $('#editMethod').val();
    let remarks = $('#editRemarks').val();

    if(amount > 0 && date != "") {
        $('.loader').addClass('active')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            cache: false,
            data: {id: id, amount: amount, date: date, category: category, method: method, remarks: remarks},
            url: 'update-income',
            success: function(response) {
                $('#addIncomeForm')[0].reset();
                $('.loader').removeClass('active')
                if(response == "success") {
                    successModal("Congratulations! Income updated Successfully!");
                }
            }
        })
    }
    else {
        if(amount == 0) {
            errorModal("Amount can not be 0!")
        }
        if(date == "") {
            errorModal("Date can not be blank!")
        }
    }
})
$(document).on('click', '#confirm-incomeDelete', function() {
    let id = $('#deleteId').val();
    $('.loader').addClass('active')
    $.ajax({
        type: "GET",
        cache: false,
        data: {id: id},
        url: 'delete-income',
        success: function(response) {
            $('.loader').removeClass('active')
            $('.backdrop').removeClass('active')
            $('.modal3').removeClass('active')
            if(response == "deleted") {
                successModal("Congratulations! Income Deleted Successfully!");
            }
            else if(response == "error") {
                errorModal("Failed to delete the income!")
            }
        }
    })
})

// Expense
$('#addExpenseForm').on('submit', function(e) {
    e.preventDefault();
    let amount = $('#amount').val();
    let date = $('#date').val();
    let category = $('#category').val();
    let method = $('#method').val();
    let remarks = $('#remarks').val();

    if(amount > 0 && date != "") {
        $('.loader').addClass('active')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            cache: false,
            data: {amount: amount, date: date, category: category, method: method, remarks: remarks},
            url: 'save-expense',
            success: function(response) {
                $('#addExpenseForm')[0].reset();
                $('.loader').removeClass('active')
                if(response == "success") {
                    successModal("Congratulations! Expense Added Successfully!");
                }
            }
        })
    }
    else {
        if(amount == 0) {
            errorModal("Amount can not be 0!")
        }
        if(date == "") {
            errorModal("Date can not be blank!")
        }
    }
})
$('#editExpenseForm').on('submit', function(e) {
    e.preventDefault();
    let id = $('#editId').val();
    let amount = $('#editAmount').val();
    let date = $('#editDate').val();
    let category = $('#editCategory').val();
    let method = $('#editMethod').val();
    let remarks = $('#editRemarks').val();

    if(amount > 0 && date != "") {
        $('.loader').addClass('active')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            cache: false,
            data: {id: id, amount: amount, date: date, category: category, method: method, remarks: remarks},
            url: 'update-expense',
            success: function(response) {
                $('#editExpenseForm')[0].reset();
                $('.loader').removeClass('active')
                if(response == "success") {
                    successModal("Congratulations! Expense updated Successfully!");
                }
            }
        })
    }
    else {
        if(amount == 0) {
            errorModal("Amount can not be 0!")
        }
        if(date == "") {
            errorModal("Date can not be blank!")
        }
    }
})
$(document).on('click', '#confirm-expenseDelete', function() {
    let id = $('#deleteId').val();
    $('.loader').addClass('active')
    $.ajax({
        type: "GET",
        cache: false,
        data: {id: id},
        url: 'delete-expense',
        success: function(response) {
            $('.loader').removeClass('active')
            $('.backdrop').removeClass('active')
            $('.modal3').removeClass('active')
            if(response == "deleted") {
                successModal("Congratulations! Expense Deleted Successfully!");
            }
            else if(response == "error") {
                errorModal("Failed to delete the expense!")
            }
        }
    })
})

function successModal(msg) {
    $('.modal').removeClass('active')
    $('.modal2').removeClass('active')
    $('.success-message').html(msg);
    $('.success-modal').addClass('active')
}
function errorModal(msg) {
    $('.modal').removeClass('active')
    $('.modal2').removeClass('active')
    $('.error-message').html(msg);
    $('.error-modal').addClass('active')
}