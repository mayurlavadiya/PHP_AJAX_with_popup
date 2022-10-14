<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Php - Ajax Crud</title>
</head>

<body>

    <!-- ADD DATA --- Modal -->
    <div class="modal fade" id="stud_addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="error-message">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">First Name</label>
                            <input type="text" class="form-control fname" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control lname" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">Class</label>
                            <input type="text" class="form-control class" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">Section</label>
                            <input type="text" class="form-control section" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary student_add_ajax">Add</button>
                </div>
            </div>
        </div>
    </div>    

    <!-- VIEW DATA --- Modal -->
    <div class="modal fade" id="studviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Student Details View</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="id_view"></h4>
                    <h4 class="fname_view"></h4>
                    <h4 class="lname_view"></h4>
                    <h4 class="class_view"></h4>
                    <h4 class="section_view"></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

       <!-- EDIT DATA --- Modal -->
       <div class="modal fade" id="studeditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Student Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" id="id_edit">

                        <div class="col-md-12">
                            <div class="error-message-update">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">First Name</label>
                            <input type="text" id="edit_fname" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Last Name</label>
                            <input type="text" id="edit_lname" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Class</label>
                            <input type="text" id="edit_class" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Section</label>
                            <input type="text" id="edit_section" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary student_update_ajax">Update</button>
                </div>
            </div>
        </div>
    </div>    

     <!-- DELETE DATA --- Modal -->
     <div class="modal fade" id="studedeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Student Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" id="id_delete">
                        <div class="col-md-12">
                            <h4>Are you sure want to delete this data ?</h4>
                        </div>
                        
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger student_delete_ajax">Yes Delete</button>
                </div>
            </div>
        </div>
    </div>    

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4><a href="index.php">PHP - AJAX CRUD OPERATION</a> 
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                        data-target="#stud_addModal">
                        ADD
                    </button>
                </h4>
            </div>
            <div class="card-body">
                <div class="show-message">

                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th>CLASS</th>
                            <th>SECTION</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="studentdata">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
         
    $(document).ready(function() {
        
        // page load thay tyare aa function call krse so automatic value fetch thy jase
        getdata(); 

        // Update Data function ..
        $('.student_update_ajax').click(function(e) {
            e.preventDefault();

            var stud_id = $('#id_edit').val(); // id hoi to # use krvano , class hoi to  . (dot)
            var fname = $('#edit_fname').val();
            var lname = $('#edit_lname').val();
            var stu_class = $('#edit_class').val();
            var section = $('#edit_section').val();

            if (fname != '' & lname != '' & stu_class != '' & section != '') 
            {
                $.ajax({
                    type: "POST",
                    url: "ajax-crud/code.php",
                    data: {
                        'checking_update': true,
                        'stud_id': stud_id,
                        'fname': fname,
                        'lname': lname,
                        'class': stu_class,
                        'section': section,
                    },
                    success: function(response) {
                        // console.log(response);
                        $('#studeditModal').modal('hide'); // hide oe show the popup
                        
                        $('.show-message').append('<div class="alert alert-success alert-dismissible fade show" role="alert">\
                            <strong>' + response + '</strong> \
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                <span aria-hidden="true">&times;</span>\
                            </button>\
                            </div>\
                        ');
                        $('.studentdata').html("");
                        getdata();
                    }
                });
            } else {
                // console.log("Please enter all details..!"); 
                $('.error-message-update').append('<div class="alert alert-warning alert-dismissible fade show" role="alert">\
                <strong>Hello !</strong> Please enter all details..!\
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                    <span aria-hidden="true">&times;</span>\
                </button>\
                </div>\
                ');
            }
        });

        // Edit button function 
        $(document).on("click",".editbtn", function () { // jquery for click button
            var stud_id = $(this).closest('tr').find('.stud_id').text();

            $.ajax({
                type: "POST",
                url: "ajax-crud/code.php",
                data: {
                    'checking_edit': true,
                    'stud_id': stud_id,
                },
                success: function (response) {
                    // console.log(response);
                    $.each(response, function (key, studedit) { 
                         $('#id_edit').val(studedit['id']);
                         $('#edit_fname').val(studedit['fname']);
                         $('#edit_lname').val(studedit['lname']);
                         $('#edit_class').val(studedit['class']);
                         $('#edit_section').val(studedit['section']);
                    });
                    $('#studeditModal').modal('show'); // bootsstrap modal for display.....
                }
            });
        }); 

        // View button function
        $(document).on("click",".viewbtn", function () { // jquery for click button
            var stud_id = $(this).closest('tr').find('.stud_id').text();
            // alert(stud_id);

            $.ajax({
                type: "POST",
                url: "ajax-crud/code.php",
                data: {
                    'checking_view': true,
                    'stud_id': stud_id,
                },
                success: function (response) {
                    // console.log(response);
                    $.each(response, function (key, studview) { 
                         $('.id_view').text(studview['id']);
                         $('.fname_view').text(studview['fname']);
                         $('.lname_view').text(studview['lname']);
                         $('.class_view').text(studview['class']);
                         $('.section_view').text(studview['section']);
                    });
                    $('#studviewModal').modal('show'); // bootsstrap modal for display.....
                }
            });
        });

        // ADD button function
        $('.student_add_ajax').click(function(e) {
            e.preventDefault();

            var fname = $('.fname').val();
            var lname = $('.lname').val();
            var stu_class = $('.class').val();
            var section = $('.section').val();

            if (fname != '' & lname != '' & stu_class != '' & section != '') {

                $.ajax({
                    type: "POST",
                    url: "ajax-crud/code.php",
                    data: {
                        'checking_add': true,
                        'fname': fname,
                        'lname': lname,
                        'class': stu_class,
                        'section': section,
                    },
                    success: function(response) {
                        // console.log(response);
                        $('#stud_addModal').modal('hide'); // hide oe show the popup
                        $('.show-message').append('<div class="alert alert-success alert-dismissible fade show" role="alert">\
                        <strong>' + response + '</strong> \
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                            <span aria-hidden="true">&times;</span>\
                        </button>\
                        </div>\
                    ');
                        $('.studentdata').html("");
                        getdata();
                        $('.fname').val("");
                        $('.lname').val("");
                        $('.class').val("");
                        $('.section').val("");
                    }
                });
            } else {
                // console.log("Please enter all details..!"); 
                $('.error-message').append('<div class="alert alert-warning alert-dismissible fade show" role="alert">\
                <strong>Hello !</strong> Please enter all details..!\
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                    <span aria-hidden="true">&times;</span>\
                </button>\
                </div>\
                ');
            }
        });

        // Delete Button function for confirm and delete
        $('.student_delete_ajax').click(function (e) { 
            e.preventDefault();

            var stud_id = $('#id_delete').val();
            // alert(stud_id);

            $.ajax({
                type: "POST",
                url: "ajax-crud/code.php",
                data: {
                    'checking_delete': true,
                    'stud_id': stud_id,
                },
                success: function (response) {
                    $('#studedeleteModal').modal('hide');  // delete modal hide krva mate 
                    
                    $('.show-message').append('<div class="alert alert-success alert-dismissible fade show" role="alert">\
                        <strong>' + response + '</strong> \
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                            <span aria-hidden="true">&times;</span>\
                        </button>\
                        </div>\
                    ');
                        $('.studentdata').html(""); // table data check and refresh
                        getdata();
                }
            });
        });

        // code for direct delete
        $(document).on("click",".deletebtn", function () { // jquery for click button
            
            var stud_id = $(this).closest('tr').find('.stud_id').text(); // closest tr 
            $('#id_delete').val(stud_id); 
            $('#studedeleteModal').modal('show');  

            // $.ajax({
            //     type: "POST",
            //     url: "ajax-crud/code.php",
            //     data: {
            //         'checking_delete': true,
            //         'stud_id': stud_id,
            //     },
            //     success: function (response) {
            //         $('#studedeleteModal').modal('hide');  // delete modal hide krva mate 
                    
            //         $('.show-message').append('<div class="alert alert-success alert-dismissible fade show" role="alert">\
            //             <strong>' + response + '</strong> \
            //             <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
            //                 <span aria-hidden="true">&times;</span>\
            //             </button>\
            //             </div>\
            //         ');
            //             $('.studentdata').html(""); // table data check and refresh
            //             getdata();
            //     }
            // });
        }); 
    });


    // fetch data in table using get data function
    function getdata() {
        $.ajax({
            type: "GET",
            url: "ajax-crud/fetch.php",
            success: function(response) {
                // console.log("response");

                //for loop for Jquery
                $.each(response, function(key, value) {
                    // console.log(value['fname']);

                    $('.studentdata').append('<tr>'+'<td class="stud_id">'+value['id']+' </td>\
                            <td> ' + value['fname'] + ' </td>\
                            <td> ' + value['lname'] + ' </td>\
                            <td> ' + value['class'] + ' </td>\
                            <td> ' + value['section'] + ' </td>\
                            <td>\
                                <a href="#" class="badge badge-primary viewbtn">VIEW</a>\
                                <a href="#" class="badge badge-warning editbtn">EDIT</a>\
                                <a href="#" class="badge badge-danger deletebtn">DELETE</a>\
                            </td>\
                        </tr>');
                });
            }
        });
    }
    </script>
</body>

</html>