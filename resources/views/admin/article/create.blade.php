
<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h4>Article Create</h4>
                            <a href="{{ route('admin.article.index') }}" class="btn btn-primary">go back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.article.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-6 pb-2">
                                        <label for="categories">Select Categories</label>
                                        <select name="categories[]" id="categories" class="form-control select2"
                                            multiple="multiple">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-6 pb-2">
                                        <label for="title">Enter Title</label>
                                        <input type="text" name="title" id="title" class="form-control">
                                    </div>

                                    <div class="col-12 pb-2">
                                        <label for="content">Enter Content</label>
                                        <textarea name="content" id="content" class="form-control summernote">
                                        </textarea>
                                    </div>


                                    <div class="col-12 pb-2">
                                        <label for="meta_keywords">Enter Meta Keywords</label>
                                        <textarea name="meta_keywords" id="meta_keywords" class="form-control">
                                        </textarea>
                                    </div>

                                    <div class="col-12 pb-2">
                                        <label for="description">Enter Meta Description</label>
                                        <textarea name="description" id="description" class="form-control">
                                        </textarea>
                                    </div>

                                    <div class="col-6 pb-2">
                                        <label for="image">Upload Image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Save Record</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
