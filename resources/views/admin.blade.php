

<x-app-layout>
  



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel=stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" >
</head>
<body>
    <!-- nav-->
    
    <!-- END nav-->
    
                    <!-- Modal-->
                    <button type="button" style="position:absolute;margin-left:60px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-plus"></i> Ajouter un User </button>
                    <form   class="mt-4"  action="{{route('save.post')}}" method="POST">
                      {{ csrf_field() }}
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Ajouter un User</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              @csrf
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Name*:</label>
                                  <input type="text" name="name" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-pre" class="col-form-label">Prenom*:</label>
                                    <input type="text" name="pre" class="form-control" id="recipient-pre">
                                  </div>
                                  <div class="form-group">
                                    <label for="recipient-Email" class="col-form-label">Email*:</label>
                                    <input type="email" name="email" class="form-control" id="recipient-Email">
                                  </div>
                                  <div class="form-group">
                                    <label for="role" class="col-form-label">Role*:</label>
                                    <select name="role" id="role" class="form-control">
                                        <option value="responsable">Responsable</option>
                                        <option value="adherent">Adherent</option>
                                        <option value="coach">Coach</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="recipient-Telephone" class="col-form-label">Telephone*:</label>
                                    <input type="text" name="tel" class="form-control" id="recipient-Telephone">
                                  </div>
                                  <div class="form-group">
                                    <label for="recipient-date" class="col-form-label">Date De Naissance*:</label>
                                    <input type="date" name="dateN" class="form-control" id="recipient-date">
                                  </div>
                                  <div class="form-group">
                                    <label for="recipient-password" class="col-form-label">Password*:</label>
                                    <input type="text" name="password" class="form-control" id="recipient-password">
                                  </div>
                              
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                              
                             <input type="submit"  class="btn btn-primary" value="AJOUTER" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                     <!-- End Modal-->
                    <h1 style="margin-left:490px;position:relative;color:#2b4db3;font-style: italic;">Liste OF User</h1>
                        <table class="table  table-hover" style="position: relative;with:100%" >
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">NOM</th>
                            <th scope="col">PRENOM</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Phone</th>
                            <th scope="col">DATE NAISSANCE</th>
                            <th scope="col">Action</th>
                            
                           
                            </tr>
                        </thead>
                        <tbody>
                           
                          
                          
                            @foreach ($listuser as $key=>$list)
                            <?php  $listuser = DB::table('users')->get()  ?>
                            @if($list->role == 'responsable' || $list->role == 'adherent' || $list->role == 'coach')
    
                            
                                <tr>
                                <th scope="row"> {{$list->id}}</th>
                                <td>{{$list->name}}</td>
                                <td>{{$list->pre}}</td>
                                <td>{{$list->email}}</td>
                                <td>{{$list->role}}</td>
                                <td>{{$list->tel}}</td>
                                <td>{{$list->dateN}}</td>
                                <td>
                                  
                                  <form action="{{ route ('user.delete',$list->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                      <i class="fas fa-trash" style="position: relative;right:4px;"></i>Suprimer

                                    </button>

                                  </form>
                                </td>
                                

                                <td>
                                  <a href={{"adminEdit/".$list->id }} >
                                  <button type="submit" class="btn btn-success" style="position: relative;right:30px;">
                                  <i class="fas fa-edit" style="position: relative;right:4px;"></i>Edit
                                </button>
                                  </a>

                                </td>
                                
                                
                            </tr>
                            @endif
                            @endforeach
                            
                    
                        </tbody>
                        </table>
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

</x-app-layout>

