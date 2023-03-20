{{-- <!--Import jQuery before materialize.js-->
    <script src="/js/main.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/materialize.min.js"></script>
    <script src="/js/custom.js"></script> --}}

	<script src="{{ asset('/js/main.min.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/materialize.min.js') }}"></script>
	<script src="{{ asset('/js/custom.js') }}"></script>

    {{-- <script src="{{ asset('/ckeditor/ckeditor.js') }}"></script> --}}
		{{-- <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script> --}}
		{{-- <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script> --}}
		<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
		<script>
				CKEDITOR.replace( 'editor', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    		});
		</script>