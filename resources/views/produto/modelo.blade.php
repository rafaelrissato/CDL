 

<html>
<head>
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
</html>