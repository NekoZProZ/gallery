<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tambah</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url('home/aksi_tambah_user')?>">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" name="nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" name="username">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" name="password">
                                        </div>
                                    </div>
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="level">
                                            
                                                <option value="1">Admin</option>
                                                <option value="2">Petugas</option>
                                            
                                        </select>
                                    
                                    
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        

                    </div>
                    
                </div>
                <!-- editor -->
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->








            <!-- Form Start -->
            <!-- <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Change Logo / Icon</h6>

                            <form method="post" enctype="multipart/form-data" action="<?=base_url('home/aksi_settings')?>">
                                <div class="mb-3">
                                <label for="formFile" class="form-label">Logo Web</label>
                                <input class="form-control bg-dark" type="file" id="formFile" name="logo">
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Icon Web</label>
                                <input class="form-control bg-dark" type="file" id="formFile" name="icon">
                            </div>
                            
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Web</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="nama">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Change</button>
                            </form>
                            
                        </div>
                    </div>
                    
                </div>
            </div> -->
            <!-- Form End -->