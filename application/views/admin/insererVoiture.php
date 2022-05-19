



    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
       
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Page d'insertion voiture </h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <form class="form-horizontal form-material" method="post" action="<?php echo base_url(); ?>/index.php/Admin/insererVoitureBDD"enctype="multipart/form-data" accept-charset="utf-8">
                                    
                                    
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Marque voiture</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Marque voiture"
                                                class="form-control p-0 border-0" name="marque"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Modele</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Modele"
                                                class="form-control p-0 border-0" 
                                                id="example-email" name="modele">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Numero immatriculation</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="numero immatriculation" class="form-control p-0 border-0" name="numero">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Type</label>

                                        <div class="col-sm-12 border-bottom">
                                            <select class="form-select shadow-none p-0 border-0 form-control-line" name="type">
                                                <option value="1">Legere</option>
                                                <option value="2">SUV</option>
                                                <option value="3">Utilitaire</option>
                                                <option value="4">Camion</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Image </label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <input type="file" multiple="multiple" name="image_name[]" class="form-control" />
                                        </div>
                                    </div>


                                    

                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Inserer voiture</button>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <?php if( isset($notif)) { ?>
                                            <div class="alert alert-sucess" role="alert">
                                                <?php echo $notif; ?>   
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           