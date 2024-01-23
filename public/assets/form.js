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
$('#accountForm').on('submit', function(e) {
    e.preventDefault();
    let monthly_budget = $('#monthly_budget').val();
    let currency = $('#currency').val();
    if(monthly_budget > 0) {
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
            url: 'update-account',
            success: function(response) {
                $('.loader').removeClass('active')
                successModal("Congratulations! Account Updated Successfully!");
            }
        })
    }
    else {
        errorModal("Budget can not be 0!")
    }
});
$('#securityForm').on('submit', function(e) {
    e.preventDefault();
    let multiple_login = $('#multiple_login').val();
    let notifications = $('#notifications').val();
        $('.loader').addClass('active')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            cache: false,
            data: {multiple_login: multiple_login, notifications: notifications},
            url: 'update-security',
            success: function(response) {
                $('.loader').removeClass('active')
                successModal("Congratulations! Security Settings Updated Successfully!");
            }
        })
});
$('#deactivateAccount').on('submit', function(e) {
    e.preventDefault();
    let password = $('#password').val();
    if(password.length > 0) {
        $('.loader').addClass('active')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            cache: false,
            data: {password: password},
            url: 'decativate-account',
            success: function(response) {
                $('.loader').removeClass('active')
                if(response == "success") {
                    successModal("Your account has been deactivated successfully!");
                }
                else if(response == "invalid") {
                    errorModal("Invalid Password! Please enter correct password.")
                }
            }
        })
    }
    else {
        errorModal("Password can not be empty!")
    }
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

$('#changePassword').on('submit', function(e) {
    e.preventDefault();
    let old_password = $('#old_password').val();
    let new_password = $('#new_password').val();
    let confirm_password = $('#confirm_password').val();
    if(old_password.trim().length == 0) {
        errorModal("Please enter old password!")
        return;
    }
    if(new_password.trim().length < 6) {
        errorModal("New Password must be atleast of 6 characters!")
        return;
    }
    if(new_password != confirm_password) {
        errorModal("Password did not matched!")
        return;
    }
    $('.loader').addClass('active')
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        cache: false,
        data: {old_password: old_password, new_password: new_password},
        url: 'update-password',
        success: function(response) {
            $('#changePassword')[0].reset();
            $('.loader').removeClass('active')
            if(response == "success") {
                successModal("Congratulations! Password Updated Successfully!");
            }
            else if(response == "mismatch") {
                errorModal("Please enter correct old password!")
            }
        }
    })
})
$('#profileForm').on('submit', function(e) {
    e.preventDefault();
    let name = $('#name').val();
    let mobile = $('#mobile').val();
    if(name.trim().length == 0) {
        errorModal("Name can not be empty!")
        return;
    }
    if(mobile.trim().length == 0) {
        errorModal("Mobile number can not be empty!")
        return;
    }
    $('.loader').addClass('active')
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        cache: false,
        data: {name: name, mobile: mobile},
        url: 'update-profile',
        success: function(response) {
            $('.loader').removeClass('active')
            if(response == "success") {
                successModal("Congratulations! Profile Updated Successfully!");
            }
            else if(response == "duplicate") {
                errorModal("This mobile number already exists!")
            }
        }
    })
})

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

// Add Club entry
$('#addClubForm').on('submit', function(e) {
    e.preventDefault();
    let amount = $('#amount').val();
    let date = $('#date').val();
    let payment_type = $('#payment_type').val();
    let remarks = $('#remarks').val();
    if(amount == 0) {
        errorModal("Amount can not be 0!")
        return;
    }
    if(date == "") {
        errorModal("Date can not be empty")
        return;
    }
    $('.loader').addClass('active')
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        cache: false,
        data: {amount: amount, payment_type: payment_type, remarks: remarks, date: date},
        url: 'save-club-entry',
        success: function(response) {
            $('#addClubForm')[0].reset();
            $('.loader').removeClass('active')
            successModal("Congratulations! Entry Added Successfully!");
        }
    })
})
$('#editClubForm').on('submit', function(e) {
    e.preventDefault();
    let id = $('#editId').val();
    let amount = $('#editAmount').val();
    let date = $('#editDate').val();
    let payment_type = $('#editType').val();
    let remarks = $('#editRemarks').val();
    if(amount == 0) {
        errorModal("Amount can not be 0!")
        return;
    }
    if(date == "") {
        errorModal("Date can not be empty")
        return;
    }
    $('.loader').addClass('active')
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        cache: false,
        data: {id: id, amount: amount, payment_type: payment_type, remarks: remarks, date: date},
        url: 'update-club-entry',
        success: function(response) {
            $('#editClubForm')[0].reset();
            $('.loader').removeClass('active')
            successModal("Congratulations! Entry Updated Successfully!");
        }
    })
})

$(document).on('click', '#confirm-clubEntryDelete', function() {
    let id = $('#deleteId').val();
    $('.loader').addClass('active')
    $.ajax({
        type: "GET",
        cache: false,
        data: {id: id},
        url: 'delete-club-entry',
        success: function(response) {
            $('.loader').removeClass('active')
            $('.backdrop').removeClass('active')
            $('.modal3').removeClass('active')
            if(response == "deleted") {
                successModal("Congratulations! Entry Deleted Successfully!");
            }
            else if(response == "error") {
                errorModal("Failed to delete the entry!")
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
