const {
    ajax
} = require("jquery");

$(function () {
    // make event for modal change password user send parameter id user
    const changePasswordModal = $('#changePasswordModal');
    changePasswordModal.on('show.bs.modal', event => {
        var button = $(event.relatedTarget),
            modal = $(this),
            id = button.data("user-id"),
            name = button.data("user-name");

        modal.find("input[name='userId']").val(id);
        modal.find(".modal-title").html(name);
    });

    // make event for modal detail user 
    const showUserModal = $('#showUserModal');
    showUserModal.on('show.bs.modal', event => {
        var button = $(event.relatedTarget),
            modal = $(this),
            id = button.data("user-id"),
            name = button.data("user-name");
        $('#showUserModal .alert').remove();
        // Select the first child tr of the parent table then Select the last child td of the selected tr
        var fullName = modal.find('.modal table').find('tr:nth-child(1)').find('td:last-child');
        var email = modal.find('.modal table').find('tr:nth-child(2)').find('td:last-child');
        var phoneNumber = modal.find('.modal table').find('tr:nth-child(3)').find('td:last-child');
        var address = modal.find('.modal table').find('tr:nth-child(4)').find('td:last-child');
        var registered = modal.find('.modal table').find('tr:nth-child(5)').find('td:last-child');
        var status = modal.find('.modal table').find('tr:nth-child(6)').find('td:last-child');
        var buttonChangePassword = modal.find('.modal .modal-footer').find('button:first-child');

        fullName.empty();
        email.empty();
        phoneNumber.empty();
        address.empty();
        registered.empty();
        status.empty();
        buttonChangePassword.data("user-id", '');
        buttonChangePassword.data("user-name", '');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'GET',
            url: base_path + 'admin/dashboard/users/show',
            data: {
                id: id
            },
            dataType: 'json',
            success: function (res) {
                if (res.email_verified_at === "") {
                    var badge = '<span class="badge badge-warning">Pending</span>';
                } else {
                    var badge = '<span class="badge badge-success">Verified</span>';
                }

                modal.find(".modal-title").html(res.full_name);
                fullName.html(res.full_name);
                email.html(res.email);
                phoneNumber.html(res.phone_number);
                address.html(res.address);
                registered.html(Moment(res.created_at).format("DD MMMM YYYY"));
                status.html(badge);
                buttonChangePassword.data("user-id", res.id);
                buttonChangePassword.data("user-name", res.full_name);
            },
            error: function (res) {
                modal.find('.modal .modal-body').append('<div class="alert alert-danger alert-dismissible fade show">Data tidak ditemukan<br><small>Terjadi kesalahan pada server, silakan memuat kembali halaman</small></div>');
                return false;
            }
        });
    })
});
