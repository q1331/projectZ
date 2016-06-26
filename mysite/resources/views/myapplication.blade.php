@extends("layouts.master")
@section('body')
<!-- Google web fonts -->
<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />
<!-- The main CSS file -->
<link href="css/upload.css" rel="stylesheet" />
<body>
<form id="upload" method="post" action="/upload" files="true" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div id="drop">
        Drop Here
        <a>Browse</a>
        <input type="file" name="upl" multiple />
    </div>
    <ul>
        <!-- The file uploads will be shown here -->
    </ul>
</form>

<script src="js/jquery.knob.js"></script>
<!-- jQuery File Upload Dependencies -->
<script src="js/jquery.ui.widget.js"></script>
<script src="js/jquery.iframe-transport.js"></script>
<script src="js/jquery.fileupload.js"></script>

<!-- Our main JS file -->
<script src="js/upload.js"></script>

</body>
@endsection