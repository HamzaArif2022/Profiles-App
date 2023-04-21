<x-master title="Update">


    <form action="{{ route('publication.update', $publication['id']) }}" method="POST" enctype="multipart/form-data">
        {{-- send the newdata with the updated id --}}
        @method('PUT') {{-- specifie la modification --}}
        @csrf
        <div class="form-group">
            <label>title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter your title"
                value="{{ old('title', $publication['title']) }}">
            {{-- test when the is  enter somthing wrong in the form and referch the page we will return the old value that his inser --}}
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea placeholder="Somthing About You ..." class="form-control" name="body" rows="3">{{ old('body', $publication['body']) }}</textarea>

        </div>
        <div class="form-group">
            <label>photo</label>
            <input type="file" class="form-control" name="image" id="">

        </div>
        <div>
            <div>
                <img width="300px" src=" {{ asset('storage/' . $publication->image) }}" />
            </div>
        </div>
        <div class="D-grid my-3">
            <input type="submit" class="btn btn-primary btn-block" value="save" />
        </div>
    </form>
</x-master>
