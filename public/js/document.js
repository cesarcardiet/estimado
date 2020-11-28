// USUARIOS

var table = $('.data-table').DataTable({

    processing: true,

    serverSide: true,

    ajax: 'users',

    columns: [

        {data: 'id', name: 'id'},

        {data: 'name', name: 'name'},

        {data: 'email', name: 'email'},

        {data: 'action', name: 'action', orderable: false, searchable: false},

    ]

});


//Empleado
var table = $('.data-table-employee').DataTable({

    processing: true,

    serverSide: true,

    ajax: 'employees',

    columns: [
        {data: 'id', name: 'id'},
        {data: 'nuip', name: 'nuip'},
        {data: 'name', name: 'name'},
        {data: 'credit_balance', name: 'credit_balance'},
        {data: 'discounted_balance', name: 'discounted_balance'},
        {data: 'outstanding_balance', name: 'outstanding_balance'},
        {data: 'action', name: 'action', orderable: false, searchable: false},

    ]

});
$(function () {


    $.ajaxSetup({

      headers: {

          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

      }

    });


$('#createNewUser').click(function () {
    $('#saveBtn').html('Registar');

    $('#saveBtn').val("create-product");

    $('#user_id').val('');

    $('#userForm').trigger("reset");

    $('#modelHeading').html("Crear un nuevo usuario");

    $('#ajaxModel').modal('show');

});



$('body').on('click', '.editUser', function () {

   var user_id = $(this).data('id');
//    $('#user_id').val(user_id);

  $.get("users" +'/' + user_id +'/edit', function (data) {

      $('#modelHeading').html("Editar usuario");
      $('#saveBtn').html('Actualizar');

    //   $('#saveBtn').val("edit-user");

      $('#ajaxModel').modal('show');

      $('#user_id').val(data.id);

      $('#nameUser').val(data.name);

    //   $('#lastname').val(data.lastname);
      $('#emailUser').val(data.email);
    //   $('#nuip').val(data.nuip);
    //   $('#phone').val(data.phone);

  })

});



$('#saveBtn').click(function (e) {

    e.preventDefault();

    $(this).html('Sending..');
    id = $('#user_id').val()
    if ( id=== '') {
        console.log('crear');
        $.ajax({

            data: $('#userForm').serialize(),

            url: "users",

            type: "POST",

            dataType: 'json',

            success: function (data) {
                $('#user_id').val('');

                $('#userForm').trigger("reset");

                $('#ajaxModel').modal('hide');

                table.draw();

            },

            error: function (data) {

                console.log('Error:', data);

                $('#saveBtn').html('Algo saliio mal');

            }

        });

    }else{

        console.log('Actualizar');
        $.ajax({

            data: $('#userForm').serialize(),

            url: "users"+'/'+id,

            type: "PUT",

            dataType: 'json',

            success: function (data) {
                $('#user_id').val('');
                table.draw();
                $('#ajaxModel').modal('hide');


            },

            error: function (data) {

                console.log('Error:', data);

                $('#saveBtn').html('Save Changes');

            }

        });

    }





});



$('body').on('click', '.deleteUser', function () {

    var user_id = $(this).data("id");

    Swal.fire({
        title: '¿Estás seguro?',
        text: '¡No podrás recuperar este archivo imaginario!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: '¡Sí, bórralo!',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.value) {


            $.ajax({

                type: "DELETE",

                url: "users"+'/'+user_id,

                success: function (data) {

                    table.draw();

                },

                error: function (data) {

                    console.log('Error:', data);

                }

            });
          Swal.fire(
            '¡Eliminado!',
            'Ha sido eliminado con exito.',
            'success'
          )
        // For more information about handling dismissals please visit
        // https://sweetalert2.github.io/#handling-dismissals
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire(
            'Cancelado',
            'Tu dato está seguro.',
            'error'
          )
        }
      })


});



});
//----------------------

$('#saveBtnEmployee').click(function (e) {


    e.preventDefault();
    id = $('#employee_id').val();
    console.log(id);

    $.ajax({

        data: $('#employeeForm').serialize(),

        url: "employees"+'/'+id,

        type: "PUT",

        dataType: 'json',

        success: function (data) {

            console.log('success');
            $('#employee_id').val('');
            table.draw();
            $('#ajaxModel').modal('hide');

        },

        error: function (data) {

            console.log('Error:', data);

            $('#saveBtnEmployee').html('Algo salio mal');

        }

    });


});
$('body').on('click', '.editEmployee', function () {

    var employee_id = $(this).data('id');
 //    $('#user_id').val(user_id);

   $.get("employees" +'/' + employee_id +'/edit', function (data) {

       $('#modelHeading').html("Actualizar datos de empleado");
       $('#saveBtnEmployee').html('Actualizar');

     //   $('#saveBtn').val("edit-user");

       $('#ajaxModel').modal('show');

       $('#employee_id').val(data.id);

       $('#name').val(data.name);

     //   $('#lastname').val(data.lastname);
       $('#lastname').val(data.lastname);
       $('#phone').val(data.phone);
       $('#nuip').val(data.nuip);
     //   $('#nuip').val(data.nuip);
     //   $('#phone').val(data.phone);

   })

 });

///-------Update
 $('#saveBtnEmployeeUpdate').click(function (e) {


    e.preventDefault();
    id = $('#employeeUpdate_id').val();
    console.log(id);

    $.ajax({

        data: $('#employeeForm').serialize(),

        url: "employees"+'/'+id,

        type: "PUT",

        dataType: 'json',

        success: function (data) {

            console.log('success');
            $('#employee_id').val('');
            table.draw();
            $('#ajaxModel').modal('hide');
            Swal.fire({
                title: "Exito!",
                text: "Todo se actualizo correctamente!",
                icon: "success",
              });

        },

        error: function (data) {

            console.log('Error:', data);

            $('#saveBtnEmployee').html('Algo salio mal');

        }

    });


});
