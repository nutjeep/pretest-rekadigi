<div class="modal fade" id="addFeature" tabindex="-1" aria-labelledby="addFeatureLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addFeatureLabel">Tambah Fitur</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="/dashboard/add/feature" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            @csrf
            <div class="mb-3">
              <label for="feature_title" class="form-label">Nama Fitur</label>
              <input type="text" class="form-control" id="feature_title" name="feature_title">
            </div>
            <input type="hidden" class="form-control" id="feature_slug" name="slug">
            <div class="mb-3">
              <label for="thumbnail" class="form-label">Thumbnail</label>
              <input type="file" class="form-control" id="thumbnail" name="thumbnail">
              <p class="text-secondary">Max file 500kb</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
    </div>
  </div>
</div>

<script>
  // slug 
  const title = document.querySelector('#feature_title');
  const slug = document.querySelector('#feature_slug');

  title.addEventListener('keyup', function() {
    let preslug = title.value;
    preslug = preslug.replace(/ /g,"-");
    slug.value = preslug.toLowerCase();
  });
</script>