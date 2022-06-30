let keysPressed = {};

document.addEventListener('keydown', (event) => {
    keysPressed[event.key] = true;

    if (keysPressed['Control'] && event.key == '/') {
        load_modal()
    }
});

document.addEventListener('keyup', (event) => {
    delete keysPressed[event.key];
});

function load_modal_filter() {
    load_modal()
}

function load_modal() {
    $('#datatable-filter').modal('show');
    $('#datatable-search-form').val('');
}


// submit filter datatable
$('.submit-filter').on('click', function (e) {
    if ($(this).val() == 'reset') {
        $('.filter-datatable-form').find('input, select, textarea').val('').trigger('change');
    }
    var target = $(this).data('target');
    $('#' + target).DataTable().draw();
    $('#datatable-filter').modal('hide');
});

$('#datatable-search-form').keyup(function (e) { 
    if (this.value.length == 1) {
        $('.filter-datatable-form').find('input, select, textarea').val('').trigger('change');
    }
});


// $('body').on('click', '.table-delete', function() {
//     Swal.fire({
//         title: 'Apa Anda sudah yakin?',
//         text: "Data yang Anda hapus tidak dapat dikembalikan",
//         icon: 'question',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Ya, Hapus!',
//         cancelButtonText: 'Tidak'
//     }).then((result) => {
//         if (result.isConfirmed) {
//             $.ajax({
//                 type: "DELETE",
//                 url: $(this).data("url"),
//                 data: { "_token": $(this).data('token') },
//                 success: function(data) {
//                     table.draw();
//                     Swal.fire({
//                         title: 'Sukses',
//                         text: 'Data berhasil dihapus',
//                         icon: 'success',
//                         timer: 1000,
//                         showConfirmButton: false,
//                     });
//                 },
//                 error: function(e) {
//                     if (e.responseJSON.message) {
//                         var swal_message = e.responseJSON.message;
//                     } else {
//                         var swal_message = "Data gagal dihapus";
//                     }
//                     Swal.fire({
//                         title: 'Terjadi Kesalahan',
//                         text: swal_message,
//                         icon: 'error',
//                         timer: 2000,
//                         showConfirmButton: false,
//                     });
//                 }
//             });
//         }
//     })
// });
