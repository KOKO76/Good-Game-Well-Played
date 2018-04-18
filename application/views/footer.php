<footer class="main-footer">
          <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                <p>&copy; 2018. Program Studi Informatika Fakultas Teknik</p>
              </div>
              <div class="col-sm-6 text-right">
                <p>Dina Hastari <a href="https://bootstrapious.com/free-templates">F1D014025 </a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          
            </div>
          </div>
        </div>
</footer>
    <!-- Javascript files-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/popper.js/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url() ?>assets/vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="<?php echo base_url() ?>assets/vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="<?php echo base_url() ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/front.js"></script>
    <script src="<?php echo base_url() ?>assets/dataTables/datatables.min.js"></script>

    <!-- data tabel -->
    <script type="text/javascript">
        $(document).ready( function () {
                $('#datatables').DataTable();
                
            } );
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#example').DataTable({
                lengthMenu: [
                        [10,25,50,-1],
                        ['10 rows','25 rows','50 rows','shpw all']
                ],
                dom: 'Bfrtip',
                buttons: [
                    'pageLenght',
                    'print'
                ]
            });
        });
    </script>


    <!-- alert data berhasil disimpan -->
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $(".alert-success").remove();
            });
        });
    </script>

    <!-- info penyakit -->
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>
  </body>
</html>