 

<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @page {
            margin: 0; /* Remove margens do PDF */
        }
        body {
            margin: 0;
            padding: 0;
 
            font-family: Arial;
             
        }
        .content {
 
            box-sizing: border-box;
            padding: 2mm; /* Reduz o padding interno */
             
        }
        .page-break {
    page-break: always;
    }
    </style>
</head>
<body>
    @for ($index = 1; $index <= $quantidade; $index++)
    <div class="content page-break">
        <b>{{ $produto }}</b><br>
        <b>Quantidade:</b> {{ $peso ?? '' }}  {{ $medida ?? '' }} <br>
        <b>Lote:</b> {{ $lote ?? '' }}<br>
        <b>Validade:</b> {{ $validade ?? '' }}</br>
        <b>Embalado:</b> {{ $embalado ?? '' }}<br>
        <b>Responsvel:</b> {{ $responsavel ?? '' }}<br>
        @if ($quantidade > 1)
            <b>Etiqueta:</b> {{ $index .' de '.$quantidade}}<br>
            
        @endif
         
    </div>
        
    @endfor
   
    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>