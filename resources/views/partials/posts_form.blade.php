{!! csrf_field() !!}
<div class"form-group">
	<label for="title">Title</label>
	<input 
		type="text"
		id="title"
		name="title"
		class="form-control"
		value="{{ old('title') }}"
		>
</div>
<div class="form-group">
	<label for="content">Content</label>
	<input 
		type="text"
		id="content"
		name="content"
		class="form-control"
		value="{{ old('content') }}"
		>
</div>
<div class="form-group">
	<label for="url">URL</label>
	<input 
		type="text"
		id="url"
		name="url"
		class="form-control"
		value="{{ old('url') }}"
		>
</div>