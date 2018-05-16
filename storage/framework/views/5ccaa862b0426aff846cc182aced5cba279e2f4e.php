<?php echo Form::model($model, ['url'=>$form_url, 'method'=>'delete','class'=>'form-inline']); ?>

<a href="<?php echo $edit_url; ?>" class="btn btn-xs btn-success btn-fill"><i class="fa fa-edit"></i></a>
<?php echo Form::button('<i class="fa fa-trash"></i>', ['type'=>'submit','class'=>'btn btn-xs btn-fill btn-danger']); ?>

<?php echo Form::close(); ?>

  
