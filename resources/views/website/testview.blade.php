@extends('website.layouts.main')
@section('title', 'example')
@section('container')
   {{--  code here  --}}
   <div id="pdf-container"></div>
@endsection
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/1.9.600/pdf.js"></script>

<?php $bool='Modern_PHP.pdf'?>

 <script>
   var target={!! json_encode($bool) !!};
   PDFJS.getDocument( target ).then(function(pdf) {
  for (var pageNum = 1; pageNum < pdf.numPages; ++pageNum) {
    pdf.getPage(pageNum).then(function(page) {
      // you can now use *page* here

      var scale = 1.5;
      var viewport = page.getViewport(1);

      var canvas = document.createElement('canvas');
      var context = canvas.getContext('2d');
      canvas.height = viewport.height;
      canvas.width = viewport.width;

      var renderContext = {
        canvasContext: context,
        viewport: viewport
      };
      page.render(renderContext);

      document.getElementById('pdf-container').appendChild(canvas);
    });
  }
})
</script>