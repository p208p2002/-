@extends('website.layouts.main')
@section('title', 'example')
@section('container')
   {{--  code here  --}}
   {{--  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/1.9.600/pdf.js"></script>  --}}


<?php $file=url('/').'/'.$data->filepath ?>

<script>
var url = {!! json_encode($file) !!};
</script>

<a href={{ $file }} class="btn btn-primary" download="file">Download</a>
<br>
<br>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/1.9.600/pdf.js"></script>
<script type="text/javascript">
function renderPDF(url, canvasContainer, options) {
    var options = options || { scale: 1.4 };
        
    function renderPage(page) {
        var viewport = page.getViewport(options.scale);
        var canvas = document.createElement('canvas');
        var ctx = canvas.getContext('2d');
        var renderContext = {
          canvasContext: ctx,
          viewport: viewport
        };
        
        
        canvas.height = viewport.height;
        canvas.width = viewport.width;
        canvasContainer.appendChild(canvas);
        
        page.render(renderContext);
    }
    
    function renderPages(pdfDoc) {
        for(var num = 1; num <= pdfDoc.numPages; num++)
            pdfDoc.getPage(num).then(renderPage);
    }
    PDFJS.disableWorker = true;
    PDFJS.getDocument(url).then(renderPages);
}   
</script> 

<div id="holder"></div>

<script type="text/javascript">
renderPDF(url, document.getElementById('holder'));
</script>  
@endsection
