@csrf
<div class="md-form">
  <label>タイトル</label>
  <input class="form-control" type="text" name="title" id="title" required value="{{ old('title') }}">
</div>
<div class="form-group">
  <textarea name="body" id="body" class="form-control" rows="16" placeholder="本文" required
    value="{{ old('body') }}"></textarea>
</div>