<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ route('user.logout') }}">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Verification Modal-->
<div class="modal fade" id="verificationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body text-center">Are you sure you want to delete or accept the request?.</div>
            <div class="modal-footer border-0">
                <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-success" href="#">Sure!</button>
            </div>
        </div>
    </div>
</div>

<!-- Large modal -->
<div class="modal fade" id="detailRequestModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Gerai Reza Velayani</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table-responsive">
                    <tr>
                        <td class="align-top">Nama Pemilik</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold">Reza Velayani <small><a href="#" class="">Lihat
                                    Profil</a></small></td>
                    </tr>
                    <tr>
                        <td class="align-top">Nama Outlet</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold">Klinik Pratama by Larissa</td>
                    </tr>
                    <tr>
                        <td class="align-top">Tipe Outlet</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold">Klinik</td>
                    </tr>
                    <tr>
                        <td class="align-top">Gerai Terdaftar</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold">20 Januari 2023</td>
                    </tr>
                    <tr>
                        <td class="align-top">Telepon Outlet</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold">+62816947322</td>
                    </tr>
                    <tr>
                        <td class="align-top">Alamat Outlet</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold">Jl. Timoho Sayidan, Gg. 65,
                            Kelurahan Gondomanan, Kecamatan Gondokusuman</td>
                    </tr>
                    <tr>
                        <td class="align-top">Kabupaten Kota</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold">Yogyakarta</td>
                    </tr>
                    <tr>
                        <td class="align-top">Provinsi</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold">Daerah Istimewa Yogyakarta
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Approve <i class="fas fa-check"></i></button>
                <button type="button" class="btn btn-danger">Reject <i class="fas fa-times"></i></button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Change Password User Modal-->
<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">User Name</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="setNewPasswordUser" action="{{url('/admin/dashboard/users/{}/edit')}}" method="GET">
                    @csrf
                    <input type="hidden" name="userId" id="userId" value="">
                    <div class="mb-3">
                        <label for="firstPassword" class="form-label">New Password</label>
                        <input type="password" name="password" placeholder="**********" class="form-control"
                            id="firstPassword">
                    </div>
                    <div class="mb-3">
                        <label for="secondPassword" class="form-label">Re-Enter Password</label>
                        <input type="password" name="password_confirmation" placeholder="**********"
                            class="form-control" id="secondPassword">
                    </div>
                </form>
            </div>
            <div class="modal-footer border-0">
                <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-success" form="setNewPasswordUser" type="submit">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Show User modal -->
<div class="modal fade" id="showUserModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table-responsive">
                    <tr>
                        <td class="align-top">Nama</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold"></td>
                    </tr>
                    <tr>
                        <td class="align-top">Email</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold"></td>
                    </tr>
                    <tr>
                        <td class="align-top">Nomor Telpon</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold"></td>
                    </tr>
                    <tr>
                        <td class="align-top">Alamat</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold"></td>
                    </tr>
                    <tr>
                        <td class="align-top">Terdaftar</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold">+62816947322</td>
                    </tr>
                    <tr>
                        <td class="align-top">Status</td>
                        <td class="text-center align-top" width="20px">:</td>
                        <td class="align-top font-weight-bold"></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" data-toggle="modal" data-target="#changePasswordModal" class="btn btn-secondary"
                    data-dismiss="modal"><i class="fas fa-cog"></i> Change
                    Password</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>