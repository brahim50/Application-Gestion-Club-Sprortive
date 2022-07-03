<x-app-layout>
    <x-slot name="header">
        <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
            <link rel=stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" >
        </head>
        <body style="background-color:floralwhite;" > 
            <div class="container d-flex justify-content-center align-items-center " style="min-height: 74.5vh;background-color:white; position: relative;bottom: 10px;">
              @foreach ($listuser as $key=>$list)
              @endforeach
                <form class="border shadow p-3  rounded " style="width: 450px;" method="POST" action="{{route ('user.edit',$list->id)}}">
                  @csrf
                  @method('UPDATE')
                  
                  <h1 class="text-center p-5" style="font-style: italic;position: relative;bottom:56px;color:#102361;"><i class="fas fa-edit"></i> Edit Profil    </h1>
                  
                
                <div class="form-group" style="position: relative;bottom:80px;">
                    <label for="recipient-name" class="col-form-label">Name*:</label>
                    <input type="text" name="name" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group" style="position: relative;bottom:70px;">
                      <label for="recipient-pre" class="col-form-label">Prenom*:</label>
                      <input type="text" name="pre" class="form-control" id="recipient-pre">
                    </div>
                    <div class="form-group" style="position: relative;bottom:60px;">
                      <label for="recipient-Email" class="col-form-label">Email*:</label>
                      <input type="email" name="email" class="form-control" id="recipient-Email">
                    </div>
                    <div class="form-group" style="position: relative;bottom:50px;">
                        <label for="recipient-Telephone" class="col-form-label">Telephone*:</label>
                        <input type="text" name="tel" class="form-control" id="recipient-Telephone">
                      </div>
                      <div class="form-group" style="position: relative;bottom:40px;">
                        <label for="recipient-date" class="col-form-label">Date De Naissance*:</label>
                        <input type="date" name="dateN" class="form-control" id="recipient-date">
                      </div>
              <div class="d-grid gap-2" style="position: relative;bottom:30px;">
              <button type="submit"   class="btn btn-primary" ><i class="fas fa-edit"style="right: 6px;position: relative;"></i>Edit</button>
            </div>
                </form>
                </div>







</body>
    </x-slot>
</x-app-layout>