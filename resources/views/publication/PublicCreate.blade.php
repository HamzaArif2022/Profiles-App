<x-master title="Mon publication">
   
   
    <div class="container">

        <form action="{{ route('publication.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter your name"
                    value="{{ old('title') }}">
                @error('title')
                    <div class=" text-danger">{{ $message }}</div>
                @enderror

            </div>
          
            <div class="form-group">
                <label>Description</label>
                <textarea placeholder="Somthing About You ..." class="form-control" name="body" rows="3">{{ old('body') }}</textarea>
                @error('body')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>image</label>
                <input type="file" class="form-control" name="image" id="">

            </div>
            @error('image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
            <div class="D-grid my-3">
                <input type="submit" class="btn btn-primary btn-block" value="Ajouter" />
            </div>
        </form>

    </div>

</x-master>
