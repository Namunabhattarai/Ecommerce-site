



{{-- <x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
          <div class="az-content-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h2>Update category: {{$category->name}}</h2>
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                Category Name: <input type="text" name="name" id="" class="form-control" value="{{ $category->name }}"
                @error('name')
                    style="border-color: red;"
                @enderror
                >
               
                <br><br>
                Category Slug: <input type="text" name="slug" id="slug" class="form-control" value="{{ $category->slug}}"><br><br>
                Description: <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $category->description }}</textarea> <br><br>
                
                Parent Category: 
                <x-forms.select name="parent_id" class="form-control">
                    <option value="0">Select a category</option>
                    @foreach ($category as $category)
                        <option value="{{ $category->id }}" {{ $category->id == old('parent_id') ? "selected": '' }}>{{ $category->name }}</option>
                    @endforeach
                </x-forms.select><br><br>
                
                <input type="submit" name="submit" value="Save">
            </form>
          </div>
        </div>
    </div>
</x-admin.layout>

<script>
    jQuery(document).ready(function($){
        $('#name').on('change', function(){
            var name = $('#name').val();
            var slug = name.replace(/\s+/g, '-').toLowerCase();
            $('#slug').val(slug);
        })
    })
</script> --}}
    
