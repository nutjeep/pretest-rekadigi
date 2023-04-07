{{-- EDIT FEATURE --}}
<div class="modal fade" id="editFeature{{ $feature->slug }}" tabindex="-1" aria-labelledby="editFeature{{ $feature->slug }}Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editFeature{{ $feature->slug }}Label">Edit Fitur</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/dashboard/update/feature/{{ $feature->slug }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="modal-body">
          <div class="mb-3">
            <label for="addTitle{{ $feature->id }}" class="form-label">Nama Fitur</label>
            <input type="text" class="form-control" id="addTitle{{ $feature->id }}" name="feature_title" value="{{ $feature->feature_title }}">
          </div>
          <input type="hidden" class="form-control" name="oldImage" value="{{ $feature->thumbnail }}">
          <input type="hidden" class="form-control" id="slug{{ $feature->id }}" name="slug" value="{{ $feature->slug }}">
          <div class="mb-3">
            <label for="thumbnail" class="form-label">Thumbnail</label>
            <input type="file" class="form-control" id="thumbnail" name="thumbnail">
            <p class="text-secondary">Max file 300kb</p>
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
  const addTitle{{ $feature->id }} = document.querySelector('#addTitle{{ $feature->id }}');
  const slug{{ $feature->id }} = document.querySelector('#slug{{ $feature->id }}');

  addTitle{{ $feature->id }}.addEventListener('keyup', function() {
    let preslug = addTitle{{ $feature->id }}.value;
    preslug = preslug.replace(/ /g,"-");
    slug{{ $feature->id }}.value = preslug.toLowerCase();
  });
</script>