
<div class="card m-2" style ="width :40rem;" >
<div class="card-header">Current Cars</div>
    <table class="table table-stripped">
        <thead >
            <tr>
                <th class="text-center">Car</th>
                <th class="text-center"></th>
                <th class="text-center"></th>
                <th class="text-center"></th>
            </tr>
        </thead>
        <tbody>
           
            @each('archivos.parcial',$coches,'coche')
            
        </tbody>
    </table>
  
    
    </div>


