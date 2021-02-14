<div class="row g-3">
    <div class="col-sm-6">
      <label for="firstName" class="form-label">Site name</label>
      <input name ="site_name" type="text" class="form-control"  placeholder="google"  required="" value="{{ old('site_name') ?? $post->site_name ?? '' }}">
      <div class="invalid-feedback">
        Site name for example "google".
      </div>
    </div>
    <div class="col-sm-6">
        <label name="phone" class="form-label">Phone number</label>
        <input name="phone" class="form-control"  placeholder="+996559404040" required value="{{ old('phone') ?? $post->phone ?? ''}}" >
        <div class="invalid-feedback">
         For contact with you
        </div>
      </div>
      <div class="col-12">
        <label name="email" class="form-label">Email</label>
        <input name="email" class="form-control"  placeholder="you@example.com" value="{{ old('email') ?? $post->email ?? ''}}">
        <div class="invalid-feedback">
          Please enter a valid email address for sent information.
        </div>
      </div>

    {{-- <div class="col-12">
    <textarea name="descr" rows="5" class="form-control"  required> {{ old('descr') ?? $post->descr ?? ''}}</textarea>
    </div> --}}
    <div class="col-12">
        <label name="descr"  class="form-label">Description </label>
        <textarea  name="descr" rows="5" class="form-control"  placeholder="Description" value="{{ old('descr') ?? $post->descr ?? ''}}"></textarea>
        <div class="invalid-feedback">
          Please enter a valid email address for sent information.
        </div>
      </div>
</div>
