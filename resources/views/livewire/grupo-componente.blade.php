<div>

    {{-- Be like water. --}}
    <h2>ola mundo estou no componente livewire</h2>
    <p>{{ $message }}</p>
    <form method="POST" wire:submit="cdddreate">
        @csrf
        <input text="text" name="grupo" id="grupo" wire:model="grupo">
        <button type="submit">Gravar</button>
    </form>

        <table>
           <thead class="thead-dark">
             <tr>
               <th scope="col">#</th>
               <th scope="col">Nome</th>
               <th scope="col">Comissao</th>
               <th scope="col">Handle</th>
             </tr>
           </thead>
           <tbody>
             @foreach($grupo as $grupos)
             <tr>
                <td>{{ $grupos->id_grupo }}</td>
                 <td>{{ $grupos->nome }}</td>
                 <td>{{ $grupos->comissao }}</td>
                 <td>@mdo</td>
             </tr>
             @endforeach
           </tbody>
         </table>
        {{--  
         <table class="table">
           <thead class="thead-light">
             <tr>
               <th scope="col">#</th>
               <th scope="col">First</th>
               <th scope="col">Last</th>
               <th scope="col">Handle</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <th scope="row">1</th>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
             </tr>
             <tr>
               <th scope="row">2</th>
               <td>Jacob</td>
               <td>Thornton</td>
               <td>@fat</td>
             </tr>
             <tr>
               <th scope="row">3</th>
               <td>Larry</td>
               <td>the Bird</td>
               <td>@twitter</td>
             </tr>
           </tbody>
         </table>  --}}
        
      
</div>
