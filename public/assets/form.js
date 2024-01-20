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