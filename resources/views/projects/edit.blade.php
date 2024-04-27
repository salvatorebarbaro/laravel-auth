@extends ('layouts/app')

@section ('content')

    <div class="row justify-content-center ">
        <div class="col-8 my-5">
            <!-- alla rotta "aggiorna noi passiamo l'id del nostro progetto" -->
            <form action="{{ route ('admin.projects.update' ,['project'=> $project->id]) }}" method="POST">
                
            @csrf

            <!-- essendo che non glielo potevamo passare direttamente il metodo put abbiamo passato tramite la direttiva di blade il metodo put per l'edit -->
            @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label text-uppercase ">Nome del progetto</label>
                    <!-- value inserito per avere il valore vecchio -->
                    <input type="text" class="form-control @error('title')is-invalid @enderror" id="name" name="title" value="{{ old ('title' ) ? old ('title') : $project->title }}">
                <!-- required -->
                    <!-- inizio gestione errore del titlo con relativo messaggio sotto al campo  giusto -->
                    @error('title')
                    <!-- direttiva error di blade -->
                    <div class="alert alert-danger ">
                        {{$message}}
                        <!-- questo campo si prende l'errore che abbiamo inserito nella nostra funzione validate nel controller -->
                    </div>

                    @enderror
                    <!-- fine -->
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label text-uppercase">descrizione del fumetto</label>
                    <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
                    <!-- old description è stato inserito perchè facendo cio i dati inseriti dall'utente anche se sbagliati gli vengono fatti rivedere -->
                    <textarea type="text" class="form-control @error('description')is-invalid @enderror" id="description" name="description" > {{ old ('description' ) ? old ('description' ) : $project->description}}</textarea>

                    <!-- inizio gestione errore del titlo con relativo messaggio sotto al campo  giusto -->
                    @error('description')
                    <!-- direttiva error di blade -->
                    <div class="alert alert-danger ">
                        {{$message}}
                        <!-- questo campo si prende l'errore che abbiamo inserito nella nostra funzione validate nel controller -->
                    </div>
            
                    @enderror
                    <!-- fine -->

                </div>
                <div class="mb-3">
                    <label for="img_path" class="form-label text-uppercase ">link immagine del progetto</label>
                    <!-- name campo da inserire perchè ci facilità la gestione del campo come per esempio in questo caso il nome -->
                    <input type="url" class="form-control" id="img_path" name="img_path"  value="{{ old ('img_path' ) ? old ('img_path') : $project->img_path }}">
                </div>
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> 
        </div>
        
    </div>
    
</div>

@endsection