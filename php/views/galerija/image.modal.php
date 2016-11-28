<!-- Modal -->
<div id="imageModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nova Slika</h4>
      </div>
      <div class="modal-body">
        <form action="storeImg.php?id=<?= $_GET['id']; ?>" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">        	
        	<label for="title">Naziv</label>
        	<input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">        	
        	<label for="img">Ubacite sliku</label>
        	<input type="file" name="img[]" class="form-control" multiple="true">
        </div>
        	<button type="submit" name="submit" class="btn btn-success">&plus;&nbsp;Unesi</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
      </div>
    </div>

  </div>
</div>