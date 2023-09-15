var table, modaledit = $('#editModal');
$(document).ready(function () {
    table = $('#table').DataTable();
});

var addStudentsModal = $('#addStudentModal');
$('#save').click(function () {
    var id = $('#id').val();
    var nama = $('#nama').val();

    $.ajax({
        url: base_url + 'students/add_student',
        type: "POST",
        data: { id: id, nama: nama },
        dataType: 'JSON',
        success: function (response) {
            console.log(response)
            if (response.status == 200) {
                addStudentsModal.modal('hide');
                location.reload();
            } else {
                alert("gagal menyimpan data!")
            }
        }
    });
});

table.on('click', 'btn-edit', function () {
    var id = $(this).attr('id');
    $.ajax({
        type: "POST",
        url: base_url + 'students/update_student',
        data: { id: id },
        dataType: "JSON",
        success: function (data) {
            console.log(data)
            modaledit.find('#id').val(data.id);
            modaledit.find('#nama').val(data.nama);
        }
    });
});

$('#saveed').click(function () {
    var id = $('#id').val();
    var nama = $('#nama').val();

    $.ajax({
        type: "POST",
        url: base_url + 'students/update_student',
        data: { id: id, nama: nama },
        dataType: "JSON",
        success: function (response) {
            console.log(response)
            if (response.status == 200) {
                modaledit.modal('hide');
                location.reload();
            } else {
                alert("gagal")
            }
        }
    });
});

function delete_student(id) {
    console.log(id)
    if (confirm('anda yakin?')) {
        $.ajax({
            type: "POST",
            url: base_url + 'students/delete_student',
            data: { id: id },
            dataType: "JSON",
            success: function (response) {
                if (response.status == 200) {
                    location.reload();
                } else {
                    alert("gagal hapus")
                }
            }
        });
    }
}
