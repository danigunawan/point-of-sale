<?php echo Form::model($model, ['url'=>$form_url, 'method'=>'delete','class'=>'form-inline']); ?>

<a href="<?php echo $edit_url; ?>" class="btn btn-xs btn-success btn-fill"><i class="fa fa-edit" id="btnPopover1" title="Edit data ini" data-toggle="tooltip"></i></a>
<?php echo Form::button('<i class="fa fa-trash" id="btnPopover2" title="Tekan tombol ini jika anda mau menghapus data" data-toggle="tooltip"></i>', ['type'=>'submit','class'=>'btn btn-xs btn-fill btn-danger']); ?>

<?php echo Form::close(); ?>

<script type="text/javascript">
  $(document).ready(function() {
    $('#btnPopover1').tooltip();
    $('#btnPopover2').tooltip();
  });
</script>