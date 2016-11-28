<!-- Modal -->
<div id="galleryModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Novi Album/Galerija</h4>
      </div>
      <div class="modal-body">
        <form action="store.php" method="POST" role="form">
        <div class="form-group">        	
        	<label for="title">Naziv</label>
        	<input type="text" name="title" class="form-control">
        </div>
        	<button type="submit" class="btn btn-success">&plus;&nbsp;Unesi</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
      </div>
    </div>

  </div>
</div>