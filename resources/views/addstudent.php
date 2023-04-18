
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Dossier</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" ></link> 
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"></link>
 --></head>
<body>

 <div class="container col-md-8 col-md-offset-2 col-xs-12">
    <div class="panel panel-primary">
      <div class="card w-100 mx-auto my-25" style="background: #e3f2fd;">
     <div class="card-header text-center"style="background:Teal;">
      <i class="ui icon user plus"></i> Saisie d'une dossier</h2>
      @if(session()->has('message'))
          <h5 class="alert alert-succes">{{session('message')}}</h5>
      @endif
    
    </div><br>
       <div class="panel-body">
         <form action="{{ route('addstudent.store') }}" method="post">
            @csrf
            <div class="form-group">
             
              <input type="text" name="nom" class="form-control" required="required" placeholder="Nom"/>
              
            </div>
            
            <div class="form-group">
           
            <input type="text" name="prénom"  class="form-control"required="required" placeholder="Prénom" />
            <span></span>
            </div>
            
            <div class="form-group">
           
            <input type="text" name="code"  class="form-control" required="required"placeholder="Votre Code"/>
            <span></span>
            </div>
            <div class="row">
                <div class="form-group" style="padding-top:10px">
                  <a href="/" class="btn btn-primary pull-left">retour</a>
                  <button type="submit" class="btn btn-primary">Enregistre</button>

                </div>
            </div>
         </form>
           </div>
        </div>
    </div>
  </div>
  <script src="js/bootstrap.js"></script>
</body>
</html>