<div class="card text-center">
            <div class="card-header">
                @if (!is_null($pub->image)) {{--  si image return diffrent null (l'image n'insert pas ) return image --}} 
                <img class="img-fluid" src="{{ asset('storage/' . $pub->image) }}" />
                    
                @endif
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $pub->title }}</h5>
                <p class="card-text">{{ $pub->body }}</p>
                <div class="d-flex  text-center">
                    @auth
                        <form action="{{ route('publication.edit', $pub->id) }}">
                            @csrf
                            <button class="btn btn-success mx-3">update</button>
                        </form>
                        <form method="POST" action="{{ route('publication.destroy', $pub->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">delete</button>
                        </form>
                    @endauth
                </div>

            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>