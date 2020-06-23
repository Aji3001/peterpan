</div>
                </main>
               
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>assets/js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>assets/assets/demo/datatables-demo.js"></script>
        <script src="<?=base_url()?>assets/js/custom.js"></script>
        <script src="<?=base_url()?>assets/js/sweetalert2.all.min.js"></script>
        <script src="<?=base_url()?>assets/js/sweetalertcontrol.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script type="text/javascript">
		toastr.options = {
		"closeButton": true,
		"debug": false,
		"newestOnTop": true,
		"progressBar": true,
		"positionClass": "toast-bottom-right",
		"preventDuplicates": false,
		"onclick": null,
		"showDuration": "100",
		"hideDuration": "1000",
		"timeOut": "5000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
		}
		<?php if($this->session->flashdata('success')){ ?>
			toastr.success("<?php echo $this->session->flashdata('success'); ?>");
		<?php }else if($this->session->flashdata('error')){  ?>
			toastr.error("<?php echo $this->session->flashdata('error'); ?>");
		<?php }else if($this->session->flashdata('warning')){  ?>
			toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
		<?php }else if($this->session->flashdata('info')){  ?>
			toastr.info("<?php echo $this->session->flashdata('info'); ?>");
		<?php } ?>
	</script>
	<script>
		$('#metode').change(function () {
			var val= $(this).val();
			if(val=='lurus'){
				$('#faktor').show();
			}else{
				$('#faktor').hide();
			}
		});
		$('#btnHitung').click(function(){
			var metode = $('#metode').val();
			var harga_perolehan = $('#perolehan').val();
			var umur = $('#umur').val();
			var residu = $('#residu').val();
			if(metode=='lurus'){
				$('#hasil').html('Rp. '+ (harga_perolehan-residu)/(umur/12));
				$('#penyusutan').val((harga_perolehan-residu)/(umur/12));
			}else{
				$('#hasil').html('Rp. '+ (2*((100/100)/umur))*harga_perolehan);
				$('#penyusutan').val((2*((100/100)/umur))*harga_perolehan);
			}
		});

	
	</script>
        
    </body>
</html>