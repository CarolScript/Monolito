
   
     <form action= "{{ route('alunos.store') }}" method= "POST">
 
    @csrf

    <label>Nome: </label>
    <input type="text" name="nome" id="nome" placeholder="nome" required><br><br>

    <label>Email </label>
    <input type="text" name="email" id="email" placeholder="email" required><br><br>

    

    <button type="submit">Cadastrar</button>

</form>